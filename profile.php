<?php
session_start();
require_once ("config.php");

if(!isset($_SESSION['u_n'])){

  header("Location: log_in.php");
}

else {
  $name=$_SESSION['u_n'];
}


if(isset($_GET['name'])){
  $user_name=$_GET['name'];
}

$query="select * from user where name='$name'";
$send=mysqli_query($connection,$query);
$row=mysqli_fetch_array($send);



 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>User</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="css/prostyle.css">
     <link rel="stylesheet" href="my_css/pro_style.css">
   	<link rel="stylesheet" href="js_rating/ratingstar.css">
    <!-- font awesome -->
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
   </head>


   <body>

     <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
      <h1 style="color:#e6e6e6;"><b><i>Food Hunters</i></b></a>

      </div>

      <ul class="nav navbar-nav navbar-right">

        <li><a href="log_out.php?name=<?php echo "$name";?>"><span class="glyphicon glyphicon-log-in"></span><b> Log out</b></a></li>
      </ul>
    </div>
  </nav>


    <center> <h1  style="color:white;">Welcome <?php echo "$row[name]"; ?></h1> </center>


<!--    just for test -->

<div class="container">

        <div class="row">

            <div class="col-md-3" style="margin-top:50px;">

             <ul class="nav nav-pills nav-stacked ">
          <li><a data-toggle="pill" href="#orders_up" class="btn btn-danger btn-lg"style="color:black;">Orders Up</a></li>
          <li><a data-toggle="pill" href="#cream_spice" class="btn btn-danger btn-lg"style="color:black;">Cream & Spice</a></li>
          <li><a data-toggle="pill" href="#espresso" class="btn btn-danger btn-lg"style="color:black;">Espresso</a></li>

        </ul>

       </div>

            <div class="col-md-9">

              <div class="tab-content">

    <div id="orders_up" class="tab-pane fade in active">

      <p style="color:black;"><b>Orders Up is a renowned restaurant of Rajshahi.It is fast-food shop,cafe,multi-cuisine and ice-cream parlour at the same time.
      Their behaviour and all services are praiseworthy.Their food quality is up to the mark.They claim that their food are not only delicious but also healthy.
    <br>Address:<i>Jamal Super Market,Rajshahi</i>
    <br>Phone:01779-000775
</b></p>
<br>

      <p style="color:black;"><b>Facebook link</b></p>


    <a href="https://www.facebook.com/ordersupofficial/" class="btn btn-danger btn-lg" role="button" target="_blank"style="color:black;">Orders up</a>
    <a href="product_page.php?orders_up=success" class="btn btn-danger btn-lg" role="button" target="_blank"style="color:black;">Order FOod</a>
<br><br>

    <!-- review section start-->


    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_order">give us your review</button>

    <!-- Modal -->
    <div id="myModal_order" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <!-- modal body start -->
          <div class="modal-body">


            <div class="form-group">
            		<div class="form-group has-success has-feedback">
            		    <label for="name">name :</label>
            		    <input type="text" class="form-control" id="name">
            	  	</div>
            	  	<div class="form-group has-success has-feedback">
            		    <label for="review">review :</label>
            		    <input type="review" class="form-control" id="review">
            	  	</div>
            	    <label for="email">Studnet Rating :</label>
            	  	<div class='starrr' id='rating-student'></div> 	<br>
            	  	<input type="button" id="submit" class="btn btn-success" value="submit review">
            	  	<div class="msg"></div>
            	</div>

          </div>
          <!-- //end of modal body -->
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>


    <h3>User Reviews</h3>
<!-- reviwe show -->
<div class="review">

  <?php
  $conn = mysqli_connect('localhost','root','','m');
  if($qry = mysqli_query($conn,"SELECT * FROM review_orders_up")){
    while($show = mysqli_fetch_assoc($qry)){
      echo '<div class="name">';
     echo "<h4> $show[name]</h4>";
     echo '</div>';
     echo "rating: ";
     if($show['rating']==1){ echo "<td><i class='fa fa-star'></i></td>"; }
     if($show['rating']==2){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
     if($show['rating']==3){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
     if($show['rating']==4){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
     if($show['rating']==5){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
      echo "<br>";



      echo "$show[review]";

    }
  }
?>

</div>


  <!-- review show end -->

    <!-- star js -->
<script src="js_rating/ratingstar.js"></script>
<!-- ajax -->
<script>
// rating
var rate;
$('#rating-student').starrr({
  change: function(e, value){
  	rate = value;
    if (value) {
      $('.your-choice-was').show();
    } else {
      $('.your-choice-was').hide();
    }
  }
});
// ajax submit
$("#submit").click(function(){
	var name = $('#name').val();
	var review = $('#review').val();
	$.ajax({
        url: "rating_orders_up.php",
        type: 'post',
        data: {v1 : name, v2 : review, v3 : rate},
        success: function (status) {
        	if(status == 1){
            	$('.msg').html('<b>your review is successfully submitted!</b>');
        	}else{
            	$('.msg').html('<b>Server side error !</b>');
        	}
        }
    });

});
</script>


   <!-- review section end-->
    </div>
    <!-- end of orders up -->

    <div id="cream_spice" class="tab-pane fade in ">

      <p style="color:black;"><b>Cream & Spice is a renowned restaurant of Rajshahi.It is fast-food shop,cafe,multi-cuisine and ice-cream parlour at the same time.
      Their behaviour and all services are praiseworthy.Their food quality is up to the mark.They claim that their food are not only delicious but also healthy.
    <br>Address:<i>Rani Bazar,Rajshahi</i>
    <br>Phone:01738-113658
</b></p>
<br>


      <p style="color:black;"><b>Facebook link</b></p>

    <a href="https://web.facebook.com/CreamAndSpice.raj/?_rdc=1&_rdr" class="btn btn-danger btn-lg" role="button" target="_blank"style="color:black;">Cream and spice</a>
    <a href="product_page.php?cream_spice=success" class="btn btn-danger btn-lg" role="button" target="_blank"style="color:black;">Order FOod</a>

<br><br>

<!-- review section start-->


<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal_cream">give us your review</button>

<!-- Modal -->
<div id="myModal_cream" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <!-- modal body start -->
      <div class="modal-body">


        <div class="form-group">
            <div class="form-group has-success has-feedback">
                <label for="name">name :</label>
                <input type="text" class="form-control" id="name_cream">
              </div>
              <div class="form-group has-success has-feedback">
                <label for="review_cream">review :</label>
                <input type="review" class="form-control" id="review_cream">
              </div>
              <label for="email">Studnet Rating :</label>
              <div class='starrr' id='rating-student_cream'></div> 	<br>
              <input type="button" id="submit_cream" class="btn btn-success" value="submit review">
              <div class="msg"></div>
          </div>

      </div>
      <!-- //end of modal body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<h3>User Reviews</h3>
<!-- reviwe show -->
<div class="review">

<?php
$conn = mysqli_connect('localhost','root','','m');
if($qry = mysqli_query($conn,"SELECT * FROM review_cream_and_spice")){
while($show = mysqli_fetch_assoc($qry)){
  echo '<div class="name">';
 echo "<h4> $show[name]</h4>";
 echo '</div>';
 echo "rating: ";
 if($show['rating']==1){ echo "<td><i class='fa fa-star'></i></td>"; }
 if($show['rating']==2){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
 if($show['rating']==3){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
 if($show['rating']==4){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
 if($show['rating']==5){ echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>"; }
  echo "<br>";



  echo "$show[review]";

}
}
?>

</div>


<!-- review show end -->

<!-- star js -->
<script src="js_rating/ratingstar.js"></script>
<!-- ajax -->
<script>
// rating
var rate;
$('#rating-student_cream').starrr({
change: function(e, value){
rate = value;
if (value) {
  $('.your-choice-was').show();
} else {
  $('.your-choice-was').hide();
}
}
});
// ajax submit
$("#submit_cream").click(function(){
var name = $('#name_cream').val();
var review = $('#review_cream').val();
$.ajax({
    url: "rating_cream_and_spice.php",
    type: 'post',
    data: {v1 : name, v2 : review, v3 : rate},
    success: function (status) {
      if(status == 1){
          $('.msg').html('<b>your review is successfully submitted!</b>');
      }else{
          $('.msg').html('<b>Server side error !</b>');
      }
    }
});

});
</script>


<!-- review section end-->


    </div>
    <!-- end of cream spice -->

    <div id="espresso" class="tab-pane fade in ">

      <p style="color:black;"><b>Expresso is a renowned restaurant of Rajshahi.It is mainly cafe.But it also serves american foods.Their decorations are attractive and different.
      Their behaviour and all services are praiseworthy.Their food quality is up to the mark.They claim that their food are not only delicious but also healthy.
    <br>Address:<i>1st Floor, 110 Habib Tower, Newmarket road, Alokar More,Rajshahi</i>
    <br>Phone:01798-141198
</b></p>
<br>


      <p style="color:black;"><b>Facebook link</b></p>

    <a href="https://www.facebook.com/Espressobd/" class="btn btn-danger btn-lg" role="button" target="_blank"style="color:black;">espresso</a>
    <a href="product_page.php?espresso=success" class="btn btn-danger btn-lg" role="button" target="_blank"style="color:black;">Order FOod</a>



    </div>
    <!-- end of expresso -->

  </div>
  <!-- end of tab content -->



            </div>
            <!-- end of col-md-9 -->

        </div>
        <!-- end of row -->

    </div>
    <!-- end of container -->


   </body>
 </html>
