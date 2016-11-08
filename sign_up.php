<?php
include 'connection.php';

$name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password=$_POST['passwd'];
    $hashed_password=sha1($password);
    
    
   $check=$r->hMset($email, array('name' => $name, 'mobile' =>$mobile,'email'=>$email,'password_hash'=>$hashed_password)); 
    if($check==1)
    { //header("Location: login.php");
    echo "e";
    header("location: login.html");
    }
    else 
        echo "non-comit";

?>
