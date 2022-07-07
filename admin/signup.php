<!-- <?php error_reporting(0); ?> -->

<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>login system</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css.css">
   <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>



<body>
  <?php
date_default_timezone_set("Asia/Karachi");
 $date = date("20y-m-d");
   $time = date("h:i:s A");

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "food";

   $conn = mysqli_connect($servername, $username, $password, $dbname);

   if (!$conn){
    die("connection failed: " . mysqli_connect_error());
   }
     $id       = $_POST['id'];
   $username     = $_POST['username'];
     $password    =$_POST['password'];
    if($_POST['SUBMIT']){
      $query = mysqli_query($conn, "INSERT into admin
    VALUES ('$id','$username', '$password')"); 
       echo " <div class='a'> Submitted. </div>";
    }
    else{
  
      echo " <div class='a'> please fill the form. </div>";
    
  }
    ?>
	<div class="container">
	
<div class="col-sm-3"></div>

	<div class="col-sm-6">
				
          <h2> signup form</h2>
			<form action="signup.php" method="post" enctype="multipart/form-data" autocomplete="off">
				

				
  <input type="text" placeholder="enter user name" class="form-control" id="username" name="username" required />
  <input type="password" placeholder="password" class="form-control" id="password" name="password" required />
<input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="signup" class="btn btn-block btn-primary" />


 
	  </form>
			</div>
		</div>
		</div>




</body>
</html>
