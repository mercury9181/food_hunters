<?php
require_once 'config.php';

$item_name=$_POST['item_name'];
$item_price=$_POST['item_price'];

$file= $_FILES['item_image']['name'];
$path= "product_image/cream_and_spice/".$file;
$tmp=$_FILES['item_image']['tmp_name'];
 move_uploaded_file($tmp,$path);



 if ($_FILES['item_image']['name']) {
   echo "uplodade <br>";
 }



// start employee
$query="INSERT INTO cream_and_spice VALUES('','$item_name','$path','$item_price')";


$send=mysqli_query($connection,$query);

if ($send) {
 header("Location: admin_page.php?cream_value=success");

}
else {
  echo "not inserted <br>";
}

// finish employee



 ?>
