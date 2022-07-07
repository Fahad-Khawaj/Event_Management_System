<!-- <?php error_reporting(0); ?> -->

<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css.css">
   <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>



<body>
	
<div class="bar">
	<div class="container">
		<div class="col-sm-5"></div>
		<div class="col-sm-5"></div>
		<div class="col-sm-2">
<a href="logout.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</a> 
	</div>
	</div>
</div>

	<div class="welcome">

<?php

if ($_SESSION['username']);
else

die("you must be logged in!");

?>
<div class="box"></div>
<div class="navbar">

	<div class="container">
		<div class="row">
		<div class="col-sm-2"><a href="contact.php"><h4 style="border: #000000 1px solid; padding: 3px; text-align: center; color: #000000;" >Contact Details</h4></div>
		<div class="col-sm-2"><a href="bookings.php"><h4 style="border: #000000 1px solid; padding: 3px; text-align: center; color: #000000;" >Bookings</h4></div>
		<div class="col-sm-1"></div>
		<div class="col-sm-1"></div>

	</div>
	</div>
</div>


</div>


<div class="foot">
  <div class="container ">
    <div class="row">
      
      <div class="col-sm-6 remarks">&copy;Event Management - 2018.All Right Reserved.</div>
      <div class="col-sm-6 company">Desighned & Developed By:<br>
        <span>Arooj & Sohrab</span>
      </div>
      
    </div>
  </div>
</div>

</body>
</html>

