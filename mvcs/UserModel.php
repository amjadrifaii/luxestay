<?php
    class UserModel {
        private $conn;

        public function __construct($conn) {
            $this->conn = $conn;
        }


        public function getUserById($userId) {
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE user_id = ?");
            $stmt->bind_param("i", $userId);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        }
    }
?>