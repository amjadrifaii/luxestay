<?php
    session_start();
    include('db_connect.php');
    $uri=$_SERVER['REQUEST_URI'];// get the part in url after localhost
    $request_method=$_SERVER['REQUEST_METHOD'];
    $email=$_SESSION['email'];//get email through session
    $data=[];
    if($request_method=='GET'){
        if($uri=='/luxestay/get-data.php/users'){
        
            $query="SELECT user_id ,user_name FROM users WHERE user_email='$email'";
            $result=mysqli_query($conn,$query);
            
            if($result&&mysqli_num_rows($result)>0){//check if there are results and rows>0
                while($row=mysqli_fetch_assoc($result))
                    $data[]=$row;//while there are rows add them to the array
            }
        }
    
        else if($uri=='/luxestay/get-data.php/properties'){
                $query="SELECT guest_house_name FROM guest_houses";
                $result=mysqli_query($conn,$query);
                if($result&&mysqli_num_rows($result)>0){
                    while($rows=mysqli_fetch_assoc($result))
                        $data[]=$rows;
                }
            }
        else if ($uri=="/luxestay/get-data.php/get_guest_house"){
            $query="SELECT guest_house_name, guest_house_des, guest_house_about, guest_house_id,owner_id, location_id FROM guest_houses WHERE guest_house_id=1";
            $result=mysqli_query($conn,$query);
            if($result && mysqli_num_rows($result)>0){
                while($rows=mysqli_fetch_assoc($result))
                    $data[]=$rows;
            }
        }
    }
    
    
    
    mysqli_close($conn);
    echo json_encode($data);//encode data as jason file to send them out
?>