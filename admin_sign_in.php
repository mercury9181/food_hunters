<?php

require_once ("config.php");
session_start();

$user_name=$_POST['user_name'];
$user_password=$_POST['user_password'];

// $user_password=sha1($user_password);

$query="select name,password from admin where name ='$user_name' and password='$user_password'";

$send=mysqli_query($connection,$query);


$row=mysqli_fetch_array($send);
if ($user_name ==$row['name'] and $user_password==$row['password']) { //$row['password'] ...akhan password column er name

$_SESSION['u_n']=$user_name;
$_SESSION['u_p']=$user_password;
header("Location:admin_page.php");

}

else {
 header("Location: home.php?admin_value_sign_in=fail");

}

 ?>
