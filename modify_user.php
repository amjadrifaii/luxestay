<?php
$conn = mysqli_connect("localhost", "root", "", "project_guesthouse");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $query = "SELECT user_id, user_name, user_email FROM users WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    } else {
        $user = null; // Handle the case when user is not found
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['user_id'], $_POST['user_name'], $_POST['user_lastName'], $_POST['user_email'],$_POST['user_phone'])) {
        $user_id = $_POST['user_id'];
        $username = $_POST['user_name'];
        $last_name = $_POST['user_lastName'];
        $email = $_POST['user_email'];
        $phone= $_POST['user_phone'];

            $query = "SELECT * FROM users WHERE user_phone = '$phone' AND user_id != '$user_id'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                echo "Phone number already exists. Please choose another phone number.";
                echo "<a href='dashboard.php'>Go to Dashboard</a>";
                exit(); // Stop execution here
            }
        

        // Check if the email is being changed and if it already exists for another user

            $query = "SELECT * FROM users WHERE user_email = '$email' AND user_id != '$user_id'";
            $res = mysqli_query($conn, $query);
            if (mysqli_num_rows($res) > 0) {
                echo "Email already exists. Please choose another email.";
                echo "<a href='dashboard.php'>Go to Dashboard</a>";
                exit(); // Stop execution here
            
        }
            
    
            
        $update_query = "UPDATE users SET user_name='$username',user_lastName='$last_name', user_email='$email',user_phone='$phone' WHERE user_id='$user_id'";
        if (mysqli_query($conn, $update_query)) {
            echo "User updated successfully!";
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Error updating user: " . mysqli_error($conn);
        }
    }
}
?>
