<?php


include "connection.php";
$check_hash=$r->hmget('123',array("name","age"));
//print $check_hash;
//var_dump($check_hash);
echo $check_hash["age"];
?>
