
<?php
require_once ("config.php");

session_start();

 ?>


 <?php

 $query1="SELECT * FROM restaurant";
  $send1=mysqli_query($connection,$query1);
  $row1=mysqli_fetch_array($send1);


  ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">


     <title>admin page</title>

     <meta name="viewport" content="width=device-width,
       initial-scale=1,shrink-to-fit=no">
         <link rel="stylesheet" href="my_css/admin_page.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

   </head>
   <body>

     <center> <a href="database.php" class="btn btn-danger btn-lg" role="button" >See Database</a></center>
<!-- container start -->
<div class="container">

  <ul class="nav nav-pills nav-justified" >
    <li class="active"><a data-toggle="pill" href="#admin" >Admin</a></li>
    <li><a data-toggle="pill" href="#new_restaurant">New restaurant</a></li>
    <li><a data-toggle="pill" href="#add_new_item">Adding new item</a></li>
  </ul>

  <!-- //for admin allert -->
      <?php
   if(isset($_GET['admin'])){
  echo '<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <center><strong>successfully admin registration done!</strong> Thank you</center>
  </div>';

   }
    ?>

    <!-- //for new_restaurant allert -->
        <?php
     if(isset($_GET['new_restaurant'])){
    echo '<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <center><strong>successfully new_restaurant registration done and database for new restaurant created!</strong> Thank you</center>
    </div>';

     }
      ?>

      <!-- //for new item value allert -->
          <?php
       if(isset($_GET['new_item_value'])){
      echo '<div class="alert alert-success alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <center><strong>successfully new item inserten into the database done!</strong> Thank you</center>
      </div>';

       }
        ?>

<!-- tab content start -->
    <div class="tab-content">


      <!-- for admin tab -->
      <div id="admin" class="tab-pane fade in active">

        <!-- for employee form -->
        <div class="admin">

          <h3 style="color:white"> For adding new admin</h3>


          <form class="form-horizontal" action="process_admin.php" method="post">


          <div class="form-group">
            <label class="control-label col-sm-2" style="color:white">Admin Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="admin_name" placeholder="Enter name">
            </div>
          </div>


          <div class="form-group">
            <label class="control-label col-sm-2" style="color:white">Password:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="admin_password" placeholder="Enter Password">
            </div>
          </div>




                <button style="width:100%;" type="submit" class="btn btn-primary butn_position">Submit</button>

          </form>

        </div>
        <!-- finished admin form -->
      </div>
      <!-- finished admin tab -->

      <!-- for new restaurant tab -->
      <div id="new_restaurant" class="tab-pane fade in">


        <div class="admin">

          <h3 style="color:white"> For adding new restaurant</h3>


          <form class="form-horizontal" action="process_new_restaurant.php" method="post">

            <div class="form-group">
              <label class="control-label col-sm-2" style="color:white">restaurant name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="new_restaurant_name" placeholder="Enter restaurant name">
              </div>
            </div>

                <button style="width:100%;" type="submit" class="btn btn-primary butn_position">Submit</button>

          </form>

        </div>
        <!-- finished new_restaurant form -->
      </div>
      <!-- finished new_restaurant tab -->


      <!-- for add_new_item tab -->
      <div id="add_new_item" class="tab-pane fade in">


        <div class="admin">

          <h3 style="color:white"> For adding new items</h3>


          <form class="form-horizontal" action="process_new_items.php" method="post" enctype="multipart/form-data">

            <?php

           $query = "SELECT * FROM restaurant";
           $result = mysqli_query($connection,$query);


              ?>
                  <div class="form-group">
                        <label class="control-label col-sm-2" style="color:white">restaurant name:</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="restaurant_name">
                                <?php
                                while($row = mysqli_fetch_array($result))
                                { ?>
                                              <option><?php echo "$row[name]";?></option>
                                              <?php
                                      }//while loop sesh

                                     ?>
                                      </select>
                                  </div>
                                </div>




            <div class="form-group">
              <label class="control-label col-sm-2" style="color:white"> Item name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="item_name" placeholder="enter item name" required>
              </div>
            </div>

            <div class="form-group ">
                <label class="control-label col-sm-2" style="color:white">item image</label>
                <div class="col-sm-10">
              <input type="file"  name="item_image" class="form-control" required>
              </div>
              </div>


              <div class="form-group ">
                  <label class="control-label col-sm-2" style="color:white">item price: </label>
                  <div class="col-sm-10">
                <input type="number"  name="item_price" class="form-control" placeholder="enter item price" required>
                </div>
                </div>

                <button style="width:100%;" type="submit" class="btn btn-primary butn_position">Submit</button>

          </form>

        </div>
        <!-- finished add_new_item  form -->
      </div>
      <!-- finished add_new_item tab -->


  </div>
  <!-- tab content finish -->


</div>
<!-- container finished -->



   </body>
 </html>
