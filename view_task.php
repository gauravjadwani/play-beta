
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
  
  <ul class="list-group">

<?php

if(!empty($_POST['date']))
{
include 'connection.php';
//session_start();
    $email=$_SESSION["email"];
    $date=$_POST['date'];
    
    $name=$r->hget($email,'name');
$check=$r->zrange($date.$email,0,-1);var_dump($check);
//echo $check;

foreach($check as $c)
    {
//echo $c;
echo "<br>";

print 
    '<li class="list-group-item list-group-item-success">'.$c.'</li>';
    
  




    }
   
}
   


    
?>
      </ul>
    </div>

    
    
    
  
  
  
</body>
</html>

