<?php
session_start();
?>
<?php


$username = "";
$email    = "";
$address ="";
$number ="";
$userbio ="";
$errors = array(); 

// connecting  to the database
$db = mysqli_connect('localhost', 'root', '', 'reg');


if (isset($_POST['reg_user'])) {
 
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $number = mysqli_real_escape_string($db, $_POST['number']);
  $userbio = mysqli_real_escape_string($db, $_POST['userbio']);
 
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($address)) { array_push($errors, "address is required"); }
  if (empty($number)) { array_push($errors, "nuber is required"); }
  

  
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  

		 
  if ( !preg_match ("/^[a-zA-Z\s]+$/",$username)){ array_push($errors, "Username is invalid (only alphabets allowed)"); }
  // if ( !preg_match ("/^([1]-)?[0-9]{3}-[0-9]{3}-[0-9]{4}$/i", $_POST["number"]) && ! preg_match("/^([1]-)?[0-9]{3}.[0-9]{3}.[0-9]{4}$/i", $_POST["number"]) &&  ! preg_match("/^([1]-)?\([0-9]{3}\) [0-9]{3}-[0-9]{4}$/i", $_POST["number"]) && ! preg_match("/^[0-9]{10}/i",$_POST["number"])){ array_push($errors, "phone number is invalid"); }
   if (! preg_match ("/^[0-9\d]+[- ]?[a-zA-Z\s]+ [- ]?[a-z][0-9][a-z][- ]?[0-9][a-z][0-9]$/i", $_POST["address"])) {
	   array_push($errors, "address should have a street number, street name and a valid postal code  "); }
	
  if (count($errors) == 0) {
  	

  	$query = "INSERT INTO users (username, email, address, number,userbio) 
  			  VALUES('$username', '$email', '$address','$number','$userbio')";
  	mysqli_query($db, $query);
	  

	
  	
	
  	$_SESSION['success'] = "sucess";   
  	header('location: listusers.php');
  }
}
?>
