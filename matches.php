<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
}

.title {
    color: grey;
    font-size: 18px;
}

button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #333;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

a {
    text-decoration: none;
    font-size: 22px;
    color: black;
}

button:hover, a:hover {
    opacity: 0.7;

}
</style>
</head>
<body>


<div class="topnav">
  
  <a href="register.php?logout='1'">Log Out</a>
  <a>Settings</a>
  <a href="profile.php">Profile</a>
  <a href="add.php">Add Journey/Commute</a>
  <a href="search.php">Search</a>
  <a href="index.php" style="float:left">Social Ride</a>

</div>

<?php
if (isset($_POST['search'])) {
  // receive all input values from the search form
  $current_username3 = $_SESSION['username'];
  $driving_from = $_POST['driving_from'];
  $driving_to = $_POST['driving_to'];
  $age_from = $_POST['age_from'];
  $age_to = $_POST['age_to'];
  $gender = $_POST['gender'];
  
    if ($gender == 'any') {
	$searchquery = "SELECT * FROM users where username!='$current_username3' AND drive='yes' AND driving_from='$driving_from' AND driving_to='$driving_to' AND age < '$age_to' and age > '$age_from'";
	}
	else {
    $searchquery = "SELECT * FROM users where username!='$current_username3' AND drive='yes' AND driving_from='$driving_from' AND driving_to='$driving_to' AND gender='$gender' AND age < '$age_to' and age > '$age_from'";
  	}
	
	//$searchquery = "SELECT * FROM users";
	$result = $db->query($searchquery);
	
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
      <!--	  echo "Name: " . $row["firstname"]. " " . $row["surname"]. "<br>";  -->
  <br>
  <br>  
  <div class="card">
  <img src="profile.png" alt="Profile" height="200px" style="width:100%"><br>
  <h1><?php echo $row["firstname"]. " " . $row["surname"]; ?></h1><br>
  <p class="title">Travelling from <?php echo " " . $row['driving_from']. " to " . $row['driving_to'];?>  </p><br>
  <p>Age: <?php echo " " . $row['age']; ?></p><br>
  <p>Career: <?php echo " " . $row['career']; ?></p><br>
  <p>Interests: <?php echo " " . $row['interests']; ?></p><br>
  <a href="#"><i class="fa fa-twitter"></i></a> 
  <a href="#"><i class="fa fa-linkedin"></i></a> 
  <a href="#"><i class="fa fa-facebook"></i></a> <br>
  <p><button>Message <?php echo " " . $row['firstname']; ?></button></p>
</div>
	  
	  <?php
    }
} else {
    echo "0 results";
}
	
  }
  ?>




</body>
</html>