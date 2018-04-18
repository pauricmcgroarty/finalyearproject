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
	<h2>Your nearly there!</h2>
</div>
<br><center><h2> Fill in the following details to complete registration </h2><center><br>
</div>	
<form method="post" action="index.php">
   <div>
  <label>Are you a Registered driver?</label><br>
  <input type="radio" name="drive" value="yes" checked="checked"> Yes
  <input type="radio" name="drive" value="no"> No
</div><br>
   <div>
  <label>What county are you from?</label><br>
  <select class="form-control" name="county">
    <option value="">-- select one --</option>
    <option value="Antrim">Antrim</option>
    <option value="Armagh">Armagh</option>
    <option value="Carlow">Carlow</option>
    <option value="Cavan">Cavan</option>
    <option value="Clare">Clare</option>
    <option value="Cork">Cork</option>
    <option value="Derry">Derry</option>
    <option value="Donegal">Donegal</option>
    <option value="Down">Down</option>
    <option value="Dublin">Dublin</option>
    <option value="Fermanagh">Fermanagh</option>
    <option value="Galway">Galway</option>
    <option value="Kerry">Kerry</option>
    <option value="Kildare">Kildare</option>
    <option value="Kilkenny">Kilkenny</option>
    <option value="Laois">Laois</option>
    <option value="Leitrim">Leitrim</option>
    <option value="Limerick">Limerick</option>
    <option value="Longford">Longford</option>
    <option value="Louth">Louth</option>
    <option value="Mayo">Mayo</option>
    <option value="Meath">Meath</option>
    <option value="Monaghan">Monaghan</option>
    <option value="Offaly">Offaly</option>
    <option value="Roscommon">Roscommon</option>
    <option value="Sligo">Sligo</option>
    <option value="Tipperary">Tipperary</option>
    <option value="Tyrone">Tyrone</option>
    <option value="Waterford">Waterford</option>
    <option value="Westmeath">Westmeath</option>
    <option value="Wexford">Wexford</option>
    <option value="Wicklow">Wicklow</option>
</select>
</div><br>
<div>
<label>Choose career</label><br>
  <select class="form-control" name="career">
    <option value="">-- select one --</option>
    <option value="Accountancy">Accountancy</option>
	<option value="Architecture">Architecture</option>
	<option value="Business Professional">Business Professional</option>
	<option value="Construction">Construction</option>
    <option value="Engineering">Engineering</option> 
	<option value="Entrepreneurship">Entrepreneurship</option>
    <option value="Farming">Farming</option>	
	<option value="Hairdressing">Hairdressing</option>
	<option value="Hospitality">Hospitality</option>
	<option value="Insurance">Insurance</option>
	<option value="Labour">Labour</option>
	<option value="Lawyer">Lawyer</option>
	<option value="Mechanic">Mechanic</option>
	<option value="Medical Practitioner">Medical Practitioner</option>
	<option value="Nutrition">Nutrition</option>
	<option value="Personal Training">Personal Training</option>
	<option value="An Garda Siochana">An Gardar Siochana</option>
	<option value="IT Professional">IT Professional</option>
	<option value="Project Management">Project Management</option>
	<option value="Science">Science</option>
	<option value="Student">Student</option>
	<option value="Teaching">Teaching</option>
</select>
</div><br>
   <div>
  <label>Interests</label><br>
  <select multiple class="form-control" name="interests[]">
    <option value="Music">Music</option>
    <option value="Health">Health</option>
	<option value="Fitness">Fitness</option>
	<option value="Sport">Sport</option>
	<option value="Politics">Politics</option>
	<option value="History">History</option>
	<option value="Technology">Technology</option>
	<option value="Gaming">Gaming</option>
	<option value="Art">Art</option>
	<option value="Photography">Photography</option>
	<option value="Dancing">Dancing</option>
	<option value="Travel">Travel</option>
  </select>
</div><br>
<p>Hold down the Ctrl (windows) / Command (Mac) button to select multiple options.</p>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="complete">Complete Registration</button>
  	</div>
</form>








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