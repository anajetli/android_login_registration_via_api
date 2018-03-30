<?php


define('HOST', 'localhost');
define('USER', 'atif');
define('PASSWORD', 'naseem');
define('DB', 'trices');


$con = mysqli_connect(HOST, USER, PASSWORD, DB) or die("Unable to Connect");
$userName = $_GET['user_name'];
$userID = $_GET['user_id'];
$userPassword = $_GET['user_password'];

if($userName == '' || $userID == '' || $userPassword == ''){
	echo 'User Name, ID or Password can not be empty';
}else{
	$query = "select * from users where email = '$userID'";
	$recordExists = mysqli_fetch_array(mysqli_query($con, $query));
	if(isset($recordExists)){
		echo 'User already exists';
	}else{
		$query = "INSERT INTO users (name, email, password) VALUES ('$userName', '$userID', '$userPassword')";
		if(mysqli_query($con, $query)){
			echo 'User registered successfully';
		}else{
			echo 'oops! please try again!';
		}
	}


	mysqli_close($con);
}



?>