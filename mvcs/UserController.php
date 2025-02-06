<?php
    require_once 'UserModel.php';

    class UserController {
        private $userModel;

        public function __construct($conn) {
            $this->userModel = new UserModel($conn);
        }

        // Get a user by ID
        public function getUserById($userId) {
            $user = $this->userModel->getUserById($userId);
            return json_encode($user);
        }
    }
?>