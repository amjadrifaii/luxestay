<?php
        include 'db_connect.php';
        session_start();
        if($_SESSION['urole']!="admin")
        header("Location:index.php");

       $house_id=$_GET['guest_house_id'];
       echo $house_id;
       $query="DELETE FROM guest_houses WHERE guest_house_id=$house_id";
       if (mysqli_query($conn, $query)) {

        $query = "SELECT image_path FROM images WHERE guest_house_id=$house_id";  // Adjust table and column name
        $result = $conn->query($query);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $imagePath = $row["image_path"];
        
                // Delete the file from local storage
                if (file_exists($imagePath)) {
                    unlink($imagePath);  
                }
            }
        }
           $query="DELETE FROM images WHERE guest_house_id=$house_id";
           mysqli_query($conn,$query);
           $query="DELETE FROM reservations WHERE house_id=$house_id";
           mysqli_query($conn,$query);
        
           header("Location: properties-dashboard.php");
           exit(2);}
       else {
           echo "Error deleting property: " . mysqli_error($conn);
       }
?>