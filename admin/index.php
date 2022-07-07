<!-- <?php error_reporting(0); ?> -->

<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>Admin login</title>
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

  <div class="login">
<div class="container">
  <div class="row">
    <div class="col-sm-3">
 
</div>
    <div class="col-sm-6">

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
	
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	
	if ($username&&$password){
	
	
	$query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username'") or die ("error");
	$numrows = mysqli_num_rows($query);
	if ($numrows!=0)
	{
		
		 if($row = mysqli_fetch_assoc($query))
		 {
			  $dbusername = $row['username'];
	          $dbpassword = $row['password'];
		
		 
		 // check to see if they match
	   if($username==$dbusername&&$password==$dbpassword)
	   {
	   	echo "you're in! <a href='welcome.php'>click here</a> to enter into login page";
		  $_SESSION['username']=$username;
	   }
	   else{
	   echo "<script>alert('incorect password!')</script>";
	   }
	}

	else{
		echo "<script>alert('Invlid username & password')</script>";
	}
		 
		 }

	else{
		die ("that user doesn't exist");
	}
	
	}
	
	?>


			
			<form action="index.php" method="post"  autocomplete="off">
  <div class="form-group">
    <label for="username" class="text-uppercase">user name</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your name" required>
    </div>

  <div class="form-group">
    <label for="password" class="text-uppercase">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
  </div>
  

    <div class="b">
  <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="LOGIN" class="button">
</div>
  </form>

</div>
<div class="col-sm-3"></div>


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
