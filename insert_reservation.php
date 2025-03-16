<?php

if (!isset($_SESSION['user_id']) || !isset($_SESSION['guest_house_id'])) {
    die("Unauthorized access.");
}

$user_id = $_SESSION['user_id'];
$house_id = $_SESSION['guest_house_id'];
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['selected_dates'])) {
        die("No dates selected.");
    }

    $days = explode(',', $_POST['selected_dates']);

    foreach ($days as $day) {
        $check_sql = "SELECT reservation_id FROM reservations WHERE reservation_date = '$day' AND house_id = '$house_id'";
        $result = mysqli_query($conn, $check_sql);

        if (mysqli_num_rows($result) == 0) {
            $insert_sql = "INSERT INTO reservations (reservation_date, house_id, user_id) VALUES ('$day', '$house_id', '$user_id')";
            if (!mysqli_query($conn, $insert_sql)) {
                die("Error inserting reservation: " . mysqli_error($conn));
            }
        }
    }

    mysqli_close($conn);

    echo "<script>alert('Reservation successful!'); window.location.href = '/luxestay/property-single.php?guest_house_id=$house_id';</script>";
    exit();
}
?>