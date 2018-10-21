<?php
require_once 'config.php';

$item_name=$_POST['item_name'];
$item_price=$_POST['item_price'];

$file= $_FILES['item_image']['name'];
$path= "product_image/orders_up/".$file;
$tmp=$_FILES['item_image']['tmp_name'];
 move_uploaded_file($tmp,$path);



 if ($_FILES['item_image']['name']) {
   echo "uplodade <br>";
 }



// start employee
$query_order="INSERT INTO orders_up VALUES('','$item_name','$path','$item_price')";


$send_order=mysqli_query($connection,$query_order);

if ($send_order) {
 header("Location: admin_page.php?order_value=success");

}
else {
  echo "not inserted <br>";
}

// finish employee








 ?>
