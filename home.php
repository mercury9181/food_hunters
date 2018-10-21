<?php
require_once ("config.php");

session_start();

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <!-- here double curly helps to pass a variable -->
     <title>Food hunters</title>
     <link rel="stylesheet" href="my_css/my_index_style.css">

     <link rel="stylesheet" href="my_css/slide_show.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   </head>

   <body class="background_style">

<h1 id="header"><b><i>Food Hunters</i></b></h1>

  <!-- slide show start -->

<div class="slideshow-container">

<div class="mySlides fade">
<div class="numbertext">1 / 7</div>
<img src="image/breakfast.jpg" style="width:100%">
</div>

<div class="mySlides fade">
<div class="numbertext">2 / 7</div>
<img src="image/turkey.jpg" style="width:100%">
</div>

<div class="mySlides fade">
<div class="numbertext">3 / 7</div>
<img src="image/hand_cup.jpg" style="width:100%">

</div>

<div class="mySlides fade">
<div class="numbertext">4 / 7</div>
<img src="image/cake.jpg" style="width:100%">

</div>

<div class="mySlides fade">
<div class="numbertext">5 / 7</div>
<img src="image/lemon_chiken.jpg" style="width:100%">

</div>

<div class="mySlides fade">
<div class="numbertext">6 / 7</div>
<img src="image/pasta.jpg" style="width:100%">

</div>

<div class="mySlides fade">
<div class="numbertext">7 / 7</div>
<img src="image/salmon.jpg" style="width:100%">

</div>

</div>
<br>

<div style="text-align:center">
<span class="dot"></span>
<span class="dot"></span>
<span class="dot"></span>
<span class="dot"></span>
<span class="dot"></span>
<span class="dot"></span>
<span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
 var i;
 var slides = document.getElementsByClassName("mySlides");
 var dots = document.getElementsByClassName("dot");
 for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
 }
 slideIndex++;
 if (slideIndex > slides.length) {slideIndex = 1}
 for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" active", "");
 }
 slides[slideIndex-1].style.display = "block";
 dots[slideIndex-1].className += " active";
 setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


  <!-- slide show end -->


<!-- registration -->



<div class="registration_style regitration_position">

  <h1 align="center">Sign up</h1>

  <div style="margin: 20px;">
    <form class="" action="registration.php" method="post">
    <label for="name">NAME</label><br>
    <input class="form-control" type="text" name="name" value="" style="color: black; width: 100%;" placeholder="Enter Name"><br>

    <label for="email">email</label><br>
      <input class="form-control" type="email" name="email" value="" style="color: black; width: 100%;" placeholder="Enter Email" required><br>


    <label for="password">password</label><br>
      <input class="form-control" type="password" name="password" value="" style="color: black; width: 100%; "  placeholder="Enter password" required><br>



      <button type="submit"  style="color: black;"> submit</button>
    <br><br><br>

</form>
  </div>

  <?php

  if(isset($_GET['value_reg'])){
echo '  <div class="alert alert-success alert-dismissible fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Success!</strong> you have been successfully registered
    </div>';

  }
   ?>

  </div><br><br>
  <!-- registration finished -->


  <!-- modal start -->
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-danger btn-lg " data-toggle="modal" data-target="#myModal" style="margin-left:100px;">Login as admin</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">

          <h4 class="modal-title">Admin login</h4>
        </div>
        <div class="modal-body">

          <h1 align="center">Admin sign in</h1>

        <form class="" action="admin_sign_in.php" method="post">
          <label for="name" style="color:white;">Name</label><br>
         <input class="form-control" type="text" name="user_name" value="" style="color:black;  width: 100%;" placeholder="Enter Name" required>
          <label for="password" style="color:white;">password</label><br>
         <input class="form-control" type="password" name="user_password" value="" style="color:black; width: 100%;"  placeholder="Enter password" required>
        <br>
         <input type="submit" name="submit" value="log in" style="color:black;">

          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- modal finished -->
<center>
  <?php

  if(isset($_GET['admin_value_sign_in'])){
echo '<div class="alert alert-danger alert-dismissible fade in" style="width:30%; hight:20%;">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>admin name or password wrong!</strong> try again
</div>';

  }
   ?>
</center>



<!-- sign in -->

<div class="sign_in_style">
  <h1 align="center">sign in</h1>

<form class="" action="sign_in.php" method="post">
  <label for="name" style="color:white;">Name</label><br>
 <input class="form-control" type="text" name="user_name" value="" style="color:black;  width: 100%;" placeholder="Enter Name" required>
  <label for="password" style="color:white;">password</label><br>
 <input class="form-control" type="password" name="user_password" value="" style="color:black; width: 100%;"  placeholder="Enter password" required>
<br>
 <input type="submit" name="submit" value="log in" style="color:black;" class="btn btn-primary btn-md">

  </form>

  <?php

  if(isset($_GET['value_sign_in'])){
echo '<div class="alert alert-danger">
  <strong>wrong password!</strong> try again
</div>';

  }
   ?>

 </div><br><br>

 <!-- sign in finished -->

 <div class="container about">


<button style="margin-left: 130px;" type="button" class="btn btn-info button_style" data-toggle="collapse" data-target="#demo">about</button>
<div id="demo" class="collapse transbox">
       <p style="color: black">for the betterment of RUET....
       this will be the platform where this need of blood will meet its purpose...</p>
</div>
</div>


   </body>
 </html>
