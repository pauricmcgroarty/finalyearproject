<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('leone.computing.dcu.ie', '4th18_3_user', '4th18_3_pwd7838', '4thProject18_3');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $surname = mysqli_real_escape_string($db, $_POST['surname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $gender = $_POST['gender'];
  //$interests_array = $_POST['interests'];
  //$interests = implode(',', $interests_array);
  
	   

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($age)) { array_push($errors, "Age is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if ($age < 18) {
	array_push($errors, "You must be over 18 to Sign Up");
  }
  if ($age > 90) {
	array_push($errors, "Invalid Age");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (firstname, surname, username, email, password, age, gender, drive, county, career, interests, driving_from, driving_to) 
  			  VALUES('$firstname', '$surname', '$username', '$email', '$password', '$age', '$gender', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
 // 	$_SESSION['success'] = "You are now logged in";
 // 	header('location: index.php');
  }
}

// UPDATE DATABASE FOR 2ND PART OF REGISTRATION //

if (isset($_POST['complete'])) {
  // receive all input values from the form
  $current_username = $_SESSION['username'];
  $drive = $_POST['drive'];
  $county = $_POST['county'];
  $career = $_POST['career'];
  $interests_array = $_POST['interests'];
  $interests = implode(',', $interests_array);
  
  
// if $county = '-- select one --' { array_push($errors, "County is required"); }
 // if $career = '-- select one --' { array_push($errors, "Career is required"); }
//  if (empty($interests)) { array_push($errors, "Choose at least one interest"); }
  
  
    if (count($errors) == 0) {

  	$updatequery = "UPDATE users SET drive='$drive', county='$county', career='$career', interests='$interests' WHERE username='$current_username'";
  	mysqli_query($db, $updatequery);
                                           }	
  
}

// UPDATE DATABASE WITH DRIVER ROUTE INFORMATION //

if (isset($_POST['add'])) {
  // receive all input values from the form
  $current_username2 = $_SESSION['username'];
  $driving_from = $_POST['driving_from'];
  $driving_to = $_POST['driving_to'];
 
// if $county = '-- select one --' { array_push($errors, "County is required"); }
// if $career = '-- select one --' { array_push($errors, "Career is required"); }
//  if (empty($interests)) { array_push($errors, "Choose at least one interest"); }
  
  
    if (count($errors) == 0) {

  	$addquery2 = "UPDATE users SET driving_from='$driving_from', driving_to='$driving_to' WHERE username='$current_username2'";
  	mysqli_query($db, $addquery2);
                                   }	
  }




// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
	  $_SESSION['success'] = "You are now logged in";
  	  header("location: index.php?username=$username");
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}


?>


