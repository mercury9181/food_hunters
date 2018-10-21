<?php
require_once ("config.php");

// $sql = "SHOW TABLES FROM $dbname";
// $result = mysqli_query($sql);

$query_admin="SHOW TABLES FROM $dbname";


$send_admin=mysqli_query($connection,$query_admin);

if ($send_admin) {
 // header("Location: admin_page.php?admin=success");
 echo "yes yes yes";

}
else {
  echo "not inserted employee<br>";
}

 while ($row1=mysqli_fetch_array($send_admin)) {
    echo "Table: {$row1[0]}<br>";
}


?>
