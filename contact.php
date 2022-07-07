<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Event Managment</title>
        <?php require 'libraries/styles.php'; ?><!--css links. file found in librarieslibraries folder-->
        <?php require 'libraries/scripts.php'; ?><!--js links. file found in libraries folder-->
    </head>
    <body>
        <?php require 'libraries/header.php'; ?><!--header content. file found in libraries folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Contact Us</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
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
   $title             = $_POST['title'];
   $message         = $_POST['message'];
   
  

    if($_POST['submit']){
      $query = mysqli_query($conn, "INSERT into contact
    VALUES (
    '$id',
    '$title',
    '$message')"); 
       echo '<div class="alert alert-success">
  <strong>Success!</strong> your request has been submitted.
</div>';
    }
    else{
  echo '<div class="alert alert-info">
  <strong>Info!</strong> if u need any other information fill the form given below.
</div>';
    
  }
         ?>
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="container">
                <div class="col-md-6 contacts">
                    <h1><span class="glyphicon glyphicon-user"></span> Event Organization</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: Eventum@yahoo.com<br>
                        <span class="glyphicon glyphicon-link"></span> Facebook: www.facebook.com/eventum<br>
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 03335479368
                    </p>
                </div>
                <div class="col-md-6">
                    <form action="contact.php" method="post">
                        <div class="form-group">
                            <label for="Title">Title:</label>
                            <input type="text" name="title" id="Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="10" class="form-control"></textarea>
                        </div>
                     <input type="submit" name="submit">
                    </form>
                </div>
            </div>
			
            
        </div><!--body content div-->
        <?php require 'libraries/footer.php'; ?><!--footer content. file found in libraries folder-->
    </body>
</html>
