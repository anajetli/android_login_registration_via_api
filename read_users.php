<?php


define('HOST', 'localhost');
define('USER', 'atif');
define('PASSWORD', 'naseem');
define('DB', 'trices');


$con = mysqli_connect(HOST, USER, PASSWORD, DB) or die("Unable to Connect");


$query = "SELECT * FROM users";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result)) {
 
	$flag[] = $row;
}
 
print(json_encode($flag));

mysqli_close($con);
?>
