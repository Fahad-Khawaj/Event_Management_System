<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Event Managment</title>
        <?php require 'libraries/styles.php'; ?><!--css links. file found in librarieslibraries folder-->
        <?php require 'libraries/scripts.php'; ?><!--js links. file found in libraries folder-->
    </head>
    <body>
        <?php require 'libraries/header.php'; ?>


<div class="bookevent">
<div class="container">
<div class="row">
	<h2>Book Event</h2>
	<div class="col-sm-3"></div>
	<div class="col-sm-6">





		<form action="bookevent.php" method="POST">
					 <?php
date_default_timezone_set("Asia/Karachi");
 $date = date("20y-m-d");
   $time = date("h:i:s A");

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "event_managment";

   $conn = mysqli_connect($servername, $username, $password, $dbname);

   if (!$conn){
    die("connection failed: " . mysqli_connect_error());
   }

   
    $id              = $_POST['id'];
   $name             = $_POST['name'];
   $phone_no         = $_POST['phone_no'];
   $event_type       = $_POST['event_type'];
   $location         = $_POST['location'];
   $persons          = $_POST['persons'];
   $other_details    = $_POST['other_details'];

   
  

    if($_POST['submit']){
      $query = mysqli_query($conn, "INSERT into bookings
    VALUES (
    '$id',
    '$name',
    '$phone_no',
    '$event_type',
    '$location',
    '$persons',
    '$other_details')"); 
       echo '<div class="alert alert-success">
  <strong>Success!</strong> your request  for booking event has been submitted.
</div>';
    }
    else{
  echo '<div class="alert alert-info">
  <strong>Info!</strong> if u want to book event fill the form given below.
</div>';
  }
		 ?>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="phone_no">Phone No.:</label>
                            <input type="text" name="phone_no" id="phone_no" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="event_type">Event Type:</label><br>
                            <input type="radio" name="event_type" value="Wedding"> Wedding<br>
                            <input type="radio" name="event_type" value="Birthday"> Birthday<br>
                            <input type="radio" name="event_type" value="Meeting"> Meeting<br>
                            <input type="radio" name="event_type" value="Other"> Other<br>
                        </div>

                        <div class="form-group">
                            <label for="location">Location (Address):</label>
                            <textarea name="location" id="location" rows="5" class="form-control"></textarea>
                        </div>

                         <div class="form-group">
                            <label for="persons">Persons:</label>
                            <input type="text" name="persons" id="persons" class="form-control">
                        </div>

                         <div class="form-group">
                            <label for="other_details">Other Details:</label>
                            <textarea name="other_details" id="other_details" rows="10" class="form-control"></textarea>
                        </div>
                       <input type="submit" name="submit" id="submit">
                    </form>
	</div>
	<div class="col-sm-3"></div>
</div>
</div>	
</div>




        <?php require 'libraries/footer.php'; ?><!--footer content. file found in libraries folder-->
    </body>
</html>
