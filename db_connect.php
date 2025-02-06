<?php 


    $db_server="localhost";
    $user="root";
    $pass="";
    $db_name="project_guesthouse";
    try{$conn=mysqli_connect($db_server,$user,$pass,$db_name);
        ;}
    catch(mysqli_sql_exception){
        echo "Error Establishing a DataBase Connection";
        
    }

    /*
    $mysql="INSERT INTO properties_data (ID,location,type,status,area,beds,baths,cost, googlelink)
          VALUES (1,'Zahl&eacute', 'house', 'rent', 120, 4, 2,120,'https://maps.app.goo.gl/HCKYDh3bz8W5vvjbAD')";
    $mysql="INSERT INTO properties_data (ID,location,type,status,area,beds,baths,cost,googlelink) 
            VALUES(2,'Bshamoun','hut','rent',60 , 2,2,150, 'https://maps.app.goo.gl/uUVv47HRC3eSgKsq5')";
            
    $mysql="INSERT INTO reservations (ID,reservationday) 
            VALUES(2,'8-02-2025')";
    
            

  mysqli_query($conn,$mysql);
  */
    
?>