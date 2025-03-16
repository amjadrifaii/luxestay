<?php 

    $db_server="localhost";
    $user="root";
    $pass="";
    $db_name="luxestay";
    try{$conn=mysqli_connect($db_server,$user,$pass,$db_name);
        ;}
    catch(mysqli_sql_exception){
        echo "Error Establishing a DataBase Connection";
        
    }

    
?>