
<?php
require_once ("config.php");

session_start();

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

     <br><br>

       <div class="container">
       <ul class="nav nav-pills nav-justified" >
         <li class="active"><a data-toggle="pill" href="#admin" >Admin</a></li>
         <li><a data-toggle="pill" href="#orders_up">Orders up</a></li>
         <li><a data-toggle="pill" href="#cream_spice">Cream & spice</a></li>
           <li><a data-toggle="pill" href="#espresso">Espresso</a></li>

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
   <!-- for orders_up allert -->
     <?php
   if(isset($_GET['order_value'])){
   echo '<div class="alert alert-success alert-dismissible">
   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <center> <strong>successfully department registration done!</strong> Thank you </center>
   </div>';

   }
   ?>

   <!-- for project allert -->
   <?php
   if(isset($_GET['cream_value'])){
   echo '<div class="alert alert-success alert-dismissible">
   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <center><strong>successfully cream and spice food registration done!</strong> Thank you </center>
   </div>';

   }
   ?>



   <!-- for ft_pt_work_info allert -->
   <?php
   if(isset($_GET['espresso_value'])){
   echo '<div class="alert alert-success alert-dismissible">
   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <center><strong>successfully espresso food registration done!</strong> Thank you</center>
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



   <!-- start orders_up tab -->
         <div id="orders_up" class="tab-pane fade">
           <!-- department form -->
           <div class="order">
             <h3 style="color:white"> To add new product </h3>



           <form class="form-horizontal" action="process_orders_up.php" method="post" enctype="multipart/form-data">


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

           <!-- finished orders_up form -->

         </div>
         <!-- finish orders_up tab -->



         <!-- start cream_spice tab -->
               <div id="cream_spice" class="tab-pane fade">
                 <!-- cream_spice form -->
                 <div class="cream">
                   <h3 style="color:white"> To add new product </h3>



                 <form class="form-horizontal" action="process_cream_spice.php" method="post" enctype="multipart/form-data">


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

                 <!-- finished cream_spice form -->

               </div>
               <!-- finish cream_spice tab -->



               <!-- start espresso tab -->
                     <div id="espresso" class="tab-pane fade">
                       <!-- department form -->
                       <div class="espresso">
                         <h3 style="color:white"> To add new product </h3>



                       <form class="form-horizontal" action="process_espresso.php" method="post" enctype="multipart/form-data">


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

                       <!-- finished orders_up form -->

                     </div>
                     <!-- finish orders_up tab -->





         </div>
       </div>




   </body>
 </html>
