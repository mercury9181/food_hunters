<?php
require_once ("config.php");
session_start();

if (isset($_GET['cream_spice'])) {
  $restaurant="cream_and_spice";
  $_SESSION['r']=$restaurant;
}

if (isset($_GET['orders_up'])) {
  $restaurant="orders_up";
  $_SESSION['r']=$restaurant;
}

if (isset($_GET['espresso'])) {
  $restaurant="espresso";
  $_SESSION['r']=$restaurant;
}

if(isset($_SESSION['r'])){
$restaurant=$_SESSION['r'];
}
else {
  echo "hoi nai";
}


 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <title></title>



   </head>
   <body background="image/product_back.jpg">



     <div class="container " style="width:80%;">
	<h2 align="center">Shopping Cart</h2>

  <div class="container" style="width:60%;">

    <?php
   if(isset($_GET['added'])){
  echo '<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <strong>added to the cart!</strong> Thank you
  </div>';
}
    ?>

    <?php
   if(isset($_GET['del'])){
  echo '<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <strong>Product has been removed!</strong> Thank you
  </div>';
}
    ?>

    <?php
   if(isset($_GET['entry_already'])){
  echo '<div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>sorry!already added</strong>
  </div>';

   }
    ?>

  </div>

    <?php

	$query = "SELECT * FROM $restaurant ORDER BY id ASC";
	$result = mysqli_query($connection,$query);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			?>
            <div class="col-md-3">
            <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
            <div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
            <img src="<?php echo $row["image"]; ?>" class="img-responsive">
            <h5 class="text-info"><?php echo $row["p_name"]; ?></h5>
            <h5 class="text-danger">$ <?php echo $row["price"]; ?></h5>
            <input type="text" name="quantity" class="form-control" value="1">
            <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="submit" name="add" style="margin-top:5px;" class="btn btn-default" value="Add to Bag">
            </div>
            </form>
            </div>
            <?php
		}
	}
	 ?>






    <div style="clear:both"></div>
    <h2>My Shopping Bag</h2>
    <div class="table-responsive">
    <table class="table table-bordered">
    <tr>
    <th width="40%">Product Name</th>
    <th width="10%">Quantity</th>
    <th width="20%">Price Details</th>
    <th width="15%">Order Total</th>
    <th width="5%">Action</th>
    </tr>
    <?php
	if(!empty($_SESSION["cart"]))
	{
		$total = 0;
		foreach($_SESSION["cart"] as $keys => $values)
		{
			?>
            <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"] ?></td>
            <td>$ <?php echo $values["product_price"]; ?></td>
            <td>$ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
            <td><a href="shop.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></td>
            </tr>
            <?php
			$total = $total + ($values["item_quantity"] * $values["product_price"]);
		}
		?>
        <tr>
        <td colspan="3" align="right">Total</td>
        <td align="right">$ <?php echo number_format($total, 2); ?></td>
        <td></td>
        </tr>
        <?php
	}
	?>
    </table>
    </div>

     <center> <a href="thank_you.php" class="btn btn-danger btn-lg" role="button" >Done</a></center>
    </div>







   </body>
 </html>
