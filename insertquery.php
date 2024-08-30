<?php
include 'connect.php';
if(isset($_POST['btn_add'])){

    
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $city = $_POST["city"];
    $radio = $_POST["radio"];
    $chk_skills= implode(",", $_POST ['chk_skills']);
    $file = $_POST ["file"];
    //for image save in folder
    $pic_type = $_FILES['img']['type'];
    $allowed_filetype = array ('image/jpeg','image/gif','image/bmp','image/png','image/jpg');

    if (!in_array($pic_type,$allowed_filetype)){
        exit ("unsupported");
    }
    else{
        $pic = $_FILES['img']['name'];
        $now_time = time();
        $pic =  $now_time."".$pic;
        $pic_tmp = $_FILES ['img']['tmp_name'];
    }
    
     
        $sql  = "INSERT INTO `profile` (`fname`, `lname`, `city`, `radio`,`chk_skills`, `file_image`, `file`) 
        VALUES ('$fname','$lname','$city','$radio','$chk_skills','$pic','$file')";
        $result = mysqli_query($conn,$sql);
        move_uploaded_file($pic_tmp,"images/$pic");

        if ($result){
        //   
        header("location:display.php"); 
        }
       
       else{
        echo 'invalid';
       }
       }
    
     

?>