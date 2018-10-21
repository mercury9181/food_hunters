<?php
require_once 'config.php';

$new_restaurant_name=$_POST['new_restaurant_name'];

// start employee
$query_restaurant="INSERT INTO restaurant VALUES('','$new_restaurant_name')";
$query_new_table="CREATE TABLE $new_restaurant_name (
    id int NOT NULL,
    p_name varchar(255) NOT NULL,
    image varchar(255) NOT NULL ,
    price int NOT NULL,
    PRIMARY KEY (ID)
);";



$send_restaurant=mysqli_query($connection,$query_restaurant);
$send_new_table=mysqli_query($connection,$query_new_table);
$current_dir= getcwd();



if ($send_restaurant) {
    if ($send_new_table) {


           if(mkdir($current_dir."/product_image/$new_restaurant_name",0777)){/// with this line ..its creating the folder  which ll keep the photos of the new restaurant
        header("Location: admin_page_new.php?new_restaurant=success");
             }
      else {
        echo "process failed";
        }
    }
 else {
   echo " table not created<br>";
 }

}
else {
  echo "not inserted restaurant<br>";
}

 ?>
