<?php
    require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reservation_id = $_POST['reservation_id'];
    $reservation_date = $_POST['reservation_date'];
    $house_id = $_POST['house_id'];
}

    $query="SELECT * FROM reservations WHERE house_id='$house_id' and reservation_date='$reservation_date'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        echo " already reserved. Please choose another date or another guest house.";
        echo "<a href='dashboard.php'>Go to Dashboard</a>";
    }

else{
    $query="UPDATE reservations SET reservation_date='$reservation_date' WHERE reservation_id='$reservation_id'";
    mysqli_query($conn,$query);
    header("Location:dashboard.php");
}

?>