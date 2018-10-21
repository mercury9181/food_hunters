<?php

require_once("config.php");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];


$query="INSERT INTO user VALUES('','$name','$email','$password')";

$send=mysqli_query($connection,$query);

if ($send) {
 header("Location: home.php?value_reg=success");
}


?>
