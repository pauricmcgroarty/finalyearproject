<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>


<div class="topnav">

  <a>Contact Us</a>
  <a href="login.php">Log In</a>
  <a href="about.html">About</a>
  <a href="register.php" class="active" style="float:left">Social Ride</a>

</div>

<br>
<br>



  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register2.php">
  	<?php include('errors.php'); ?>
	  	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="firstname" value="<?php echo $firstname; ?>">
  	</div>
	  	<div class="input-group">
  	  <label>Surname</label>
  	  <input type="text" name="surname" value="<?php echo $surname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
	 <div class="input-group">
  	  <label>Age</label>
  	  <input type="text" name="age" value="<?php echo $age; ?>">
  	</div>
	<div>
  <label>Gender</label><br>
  <input type="radio" name="gender" value="male" checked="checked"> Male
  <input type="radio" name="gender" value="female"> Female
</div>
   
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Log In</a>
  	</p>
  </form>
  
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br><br>
<br><br>

</body>
</html>