<?php
require_once 'config.php';

$admin_name=$_POST['admin_name'];
$admin_password=$_POST['admin_password'];





// start employee
$query_admin="INSERT INTO admin VALUES('','$admin_name','$admin_password')";


$send_admin=mysqli_query($connection,$query_admin);

if ($send_admin) {
 header("Location: admin_page.php?admin=success");

}
else {
  echo "not inserted employee<br>";
}

// finish employee








 ?>
