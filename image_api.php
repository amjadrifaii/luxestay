<?php
   include ('db_connect.php');
   session_start();
   if($_SESSION['urole']!="admin"){
       header("Location:index.php");
   }


if (($_FILES["image_path1"])!=null&&($_FILES["image_path2"]!=null&&($_FILES["image_path3"])!=null)) {
    $target_dir = "assets/img/property-slide/";
    
    // Create the directory if it doesn't exist
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    // Define target file path
    $target_file1 = $target_dir . basename($_FILES["image_path1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["image_path2"]["name"]);
    $target_file3 = $target_dir . basename($_FILES["image_path3"]["name"]);
    $imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION));
    $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
    $imageFileType3 = strtolower(pathinfo($target_file3, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file1)||file_exists($target_file2)||file_exists($target_file3)) {
        echo "Sorry, the file already exists.";
        echo $target_file1.$target_file2.$target_file3;
        exit;
    }
    

    // Check file size
    if ($_FILES["image_path1"]["size"] > 5000000||$_FILES["image_path2"]["size"] > 5000000 ||$_FILES["image_path3"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        exit;
    }

    // Check file type (allow JPG, PNG, JPEG)
    if ($imageFileType1 != "jpg" && $imageFileType1 != "jpeg" && $imageFileType1 != "png") {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
        exit;
    }
    if ($imageFileType2 != "jpg" && $imageFileType2 != "jpeg" && $imageFileType2 != "png") {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
        exit;
    }
    if ($imageFileType3 != "jpg" && $imageFileType3 != "jpeg" && $imageFileType3 != "png") {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
        exit;
    }

    // Attempt to move the uploaded file
    if (move_uploaded_file($_FILES["image_path1"]["tmp_name"], $target_file1)&&move_uploaded_file($_FILES["image_path2"]["tmp_name"], $target_file2)
    &&move_uploaded_file($_FILES["image_path3"]["tmp_name"], $target_file3)) {
        
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                $name=$_POST['new_guest_house_name'];
                $location=$_POST['new_location_id'];
                $beds=$_POST['new_beds'];
                $area=$_POST['new_area'];
                $baths=$_POST['new_baths'];
                $garages=$_POST['new_garages'];
                $cost=$_POST['new_cost'];
                $about=$_POST['new_guest_house_about'];
                $desc=$_POST['new_guest_house_des'];
                $type=$_POST['new_house_type'];
                
                $query="INSERT INTO guest_houses (guest_house_id,guest_house_name,area,beds,baths,garages,cost,
                guest_house_des, guest_house_about,location_id,house_type) VALUES ('','$name','$area'
                ,'$beds','$baths','$garages',
                '$cost','$desc','$about','$location','$type')";

                $result=mysqli_query($conn,$query);
                $guest_house_id = mysqli_insert_id($conn);
                $query="INSERT INTO images (image_path,guest_house_id) VALUES ('$target_file1','$guest_house_id')";
                mysqli_query($conn,$query);
            
                $query="INSERT INTO images (image_path,guest_house_id) VALUES ('$target_file2','$guest_house_id')";
                mysqli_query($conn,$query);
            
                $query="INSERT INTO images (image_path,guest_house_id) VALUES ('$target_file3','$guest_house_id')";
                mysqli_query($conn,$query);
            }
            mysqli_close($conn);
             echo "<script>alert('added property successfulyl!'); window.location.href = '/luxestay/properties-dashboard.php';</script>";  exit();

    } else {
        echo "Sorry, there was an error.";
    }
}
?>
