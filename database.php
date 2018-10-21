<?php
require_once ("config.php");
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>query</title>
     <meta name="viewport" content="width=device-width,
    initial-scale=1,shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<style media="screen">
  body{
    background-color: white;
  }
</style>
   </head>
   <body>


     <div class="container">
       <div class="row">
         <div class="col-md-3" style="margin-top:100px;">

             <ul class="nav nav-pills nav-stacked ">
          <li class="active"><a data-toggle="pill" href="#user">user</a></li>
          <li><a data-toggle="pill" href="#admin">admin</a></li>
          <li><a data-toggle="pill" href="#orders_up">orders up</a></li>
            <li><a data-toggle="pill" href="#cream_spice">Cream & spice</a></li>
              <li><a data-toggle="pill" href="#espresso">Espresso</a></li>


        </ul>

       </div>

       <div class="col-md-9" style="margin-top:100px;">

         <div class="tab-content">
  <!-- user start -->
           <div id="user" class="tab-pane fade in active">
             <h1 class="header"> Users</h1>


    <div>
      <table class="table table-hover table-bordered">
        <thead >
          <tr>
            <th>user id</th>
            <th>user name</th>
            <th>user email</th>
          </tr>
        </thead>

      <?php
      $query1="select * from user";


      $send1=mysqli_query($connection,$query1);
// if ($send1) {
//   echo "hoise";
// }
// else {
//  echo "hoi nai";
// }

while ($row1=mysqli_fetch_array($send1)) {
  echo "<tr>
    <td>$row1[id]</td>
    <td>$row1[name]</td>
    <td>$row1[email]</td>

  </tr>";

}
       ?>
     </table>
          </div>
  </div>

 <!-- user finshed -->



<!-- admin start -->
             <div id="admin" class="tab-pane fade">
               <h1>Admins</h1>


               <div>
               <table class="table table-hover table-dark">
               <thead >
               <tr>
               <th>Admin id</th>
               <th>Admin name</th>
               </tr>
               </thead>

               <?php
               $query1="  select * from admin ";


               $send1=mysqli_query($connection,$query1);
               // if ($send1) {
               // echo "hoise";
               // }
               // else {
               // echo "hoi nai";
               // }

               while ($row1=mysqli_fetch_array($send1)) {
               echo "<tr>
               <td>$row1[id]</td>
               <td>$row1[name]</td>

               </tr>";

               }
               ?>
               </table>

               </div>

             </div>
<!-- admin finished -->



<!-- orders_up start -->
               <div id="orders_up" class="tab-pane fade">
                 <h1>products</h1><br><br>

                 <div>
                 <table class="table table-hover table-dark">
                 <thead >
                 <tr>
                 <th>id</th>
                 <th>food name</th>
                 <th>image</th>
                 <th>price</th>
                 </tr>
                 </thead>

                 <?php
                 $query1="SELECT * FROM orders_up";


                 $send1=mysqli_query($connection,$query1);
                 // if ($send1) {
                 // echo "hoise";
                 // }
                 // else {
                 // echo "hoi nai";
                 // }

                 while ($row1=mysqli_fetch_array($send1)) {
                 echo "<tr>
                 <td>$row1[id]</td>
                 <td>$row1[p_name]</td>
                 <td>$row1[image]</td>
                 <td>$row1[price]</td>

                 </tr>";

                 }
                 ?>
                 </table>

                 </div>
               </div>
<!-- orders_up finished -->



<!-- cream_spice start -->
               <div id="cream_spice" class="tab-pane fade">
                 <h1>products</h1><br><br>

                 <div>
                 <table class="table table-hover table-dark">
                 <thead >
                 <tr>
                 <th>id</th>
                 <th>food name</th>
                 <th>image</th>
                 <th>price</th>
                 </tr>
                 </thead>

                 <?php
                 $query1="SELECT * FROM cream_and_spice";


                 $send1=mysqli_query($connection,$query1);
                 // if ($send1) {
                 // echo "hoise";
                 // }
                 // else {
                 // echo "hoi nai";
                 // }

                 while ($row1=mysqli_fetch_array($send1)) {
                 echo "<tr>
                 <td>$row1[id]</td>
                 <td>$row1[p_name]</td>
                 <td>$row1[image]</td>
                 <td>$row1[price]</td>

                 </tr>";

                 }
                 ?>
                 </table>

                 </div>
               </div>
<!-- cream_spice finished -->



<!-- espresso start -->
               <div id="espresso" class="tab-pane fade">
                 <h1>products</h1><br><br>

                 <div>
                 <table class="table table-hover table-dark">
                 <thead >
                 <tr>
                 <th>id</th>
                 <th>food name</th>
                 <th>image</th>
                 <th>price</th>
                 </tr>
                 </thead>

                 <?php
                 $query1="SELECT * FROM espresso";


                 $send1=mysqli_query($connection,$query1);
                 // if ($send1) {
                 // echo "hoise";
                 // }
                 // else {
                 // echo "hoi nai";
                 // }

                 while ($row1=mysqli_fetch_array($send1)) {
                 echo "<tr>
                 <td>$row1[id]</td>
                 <td>$row1[p_name]</td>
                 <td>$row1[image]</td>
                 <td>$row1[price]</td>

                 </tr>";

                 }
                 ?>
                 </table>

                 </div>
               </div>
<!-- espresso finished -->





         </div>


       </div>

       </div>

     </div>

   </body>
 </html>
