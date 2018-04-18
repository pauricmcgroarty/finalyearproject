<?php include('server.php') ?>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="topnav">
  
  <a href="register.php?logout='1'">Log Out</a>
  <a>Settings</a>
  <a href="profile.php">Profile</a>
  <a href="add.php">Add Journey/Commute</a>
  <a href="search.php">Search</a>
  <a href="index.php" style="float:left" class="active">Social Ride</a>

</div>
<br>
<br>
<br>
<br>
<center><h2>Welcome to Social Ride</h2></center>

	<div id="images"><br>
	<br>
	<br>
    <br>
	<h3> Search for Drivers </h3><br>
    <a href="search.php"><img class="pic" src="search.png" style="width: 250px; height: 250px;" hspace="50"></a><br><br>
	<h3> Add Journey/Commute </h3><br>
    <a href="add.php"><img class="pic" src="car.png" style="width: 250px; height: 250px;" hspace="50"></a>
    </div>
	
    <!-- logged in user information --> 

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	</body>
</html>