<?php
require_once("config.php");

session_start();

 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
    <!-- here double curly helps to pass a variable -->
    <title>FOOD HUNTERS</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1,shrink-to-fit=no">


      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/homestyle.css">

    <link rel="stylesheet" href="css/slideshowstyle.css">

  </head>

  <body>
    <h1 id="header"><b><i>FOOD HUNTERS</i></b></h1>


    <!-- slide show start -->

<div class="slideshow-container">

<div class="mySlides fade">
<div class="numbertext">1 / 7</div>
<img src="images/cake.jpg" style="width:100%">
</div>

<div class="mySlides fade">
<div class="numbertext">2 / 7</div>
<img src="images/coffee.jpg" style="width:100%">
</div>

<div class="mySlides fade">
<div class="numbertext">3 / 7</div>
<img src="images/pizza.jpg" style="width:100%">

</div>

<div class="mySlides fade">
<div class="numbertext">4 / 7</div>
<img src="images/saslik.jpg" style="width:100%">

</div>

<div class="mySlides fade">
<div class="numbertext">5 / 7</div>
<img src="images/sharma.jpg" style="width:100%">

</div>

<div class="mySlides fade">
<div class="numbertext">6 / 7</div>
<img src="images/pasta.jpg" style="width:100%">

</div>

<div class="mySlides fade">
<div class="numbertext">7 / 7</div>
<img src="images/khicuri.jpg" style="width:100%">

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
setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

  <!-- slide show ends -->

<!-- form start -->

<div class="sign_in_style">
  <h1 align="center">sign in</h1>

<form class="" action="sign_in.php" method="post">
  <label for="name" style="color:	 #404040;">Name</label><br>
 <input class="form-control" type="text" name="user_name" value="" style="color:black;  width: 100%;" placeholder="Enter Name" required>
  <label for="password" style="color:	 #404040;">password</label><br>
 <input class="form-control" type="password" name="user_password" value="" style="color:black; width: 100%;"  placeholder="Enter password" required>
<br>
 <input type="submit" name="submit" value="log in" style="color:#404040;" class="btn btn-light btn-md">
 <br>
 <br>



<div class="w3-show-inline-block">
  <div class="w3-bar">
      <p style="color:#404040; font-family:"Comic Sans MS", cursive, sans-serif; font-size:50px;"><b>New here?Then</b></p>
      <a href="#myModal1" style=""><b><i><u>Register</u></i></b></a>
  </div>

</div>


<br>
<br>

<p style="color:#404040; font-family:"Comic Sans MS", cursive, sans-serif; font-size:50px;"><b>Want to login as Admin?</b></p>
<div style="float:right">
  <a data-toggle="modal" href="#myModal2"><b><i><u>Click here!</u></i></b></a>
</div>





  </form>

  <?php

  if(isset($_GET['value_sign_in'])){
echo '<div class="alert alert-danger">
  <strong>wrong password!</strong> try again
</div>';

  }
   ?>

 </div><br><br>

<!-- form  ends -->

<!-- myModal1 starts -->

<div class="modal fade" id="myModal2" role="dialog">
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


<!-- myModal1 ends -->



<div class="container about">

  <button style="margin-left: 200px;" type="button" class="btn btn-info button_style" data-toggle="collapse" data-target="#demo">about</button>
  <div id="demo" class="collapse transbox">
    this is a website on rajshahi restaurants
  </div>
</div>



</body>
</html>
