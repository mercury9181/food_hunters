<?php
require_once 'config.php';
$restaurant_name=$_POST['restaurant_name'];

// echo "$restaurant_name";


$item_name=$_POST['item_name'];
$item_price=$_POST['item_price'];

$file= $_FILES['item_image']['name'];
$path= "product_image/$restaurant_name/".$file;
$tmp=$_FILES['item_image']['tmp_name'];
 move_uploaded_file($tmp,$path);



 if ($_FILES['item_image']['name']) {
   // echo "uplodade <br>";
 }
 else {
   echo "not uplodade <br>";
 }



// start employee
$query_order="INSERT INTO $restaurant_name VALUES('','$item_name','$path','$item_price')";


$send_order=mysqli_query($connection,$query_order);

if ($send_order) {
 header("Location: admin_page_new.php?new_item_value=success");
// echo "item inserted in $restaurant_name table";
}
else {
  echo "not inserted <br>";
}


 ?>
