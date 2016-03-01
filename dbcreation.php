<?php
$server="localhost";
$user="root";
$pass="owaspbwa";

$conn=mysqli_connect($sever, $user, $pass);
if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql="CREATE DATABASE smertpeepler";
if(mysqli_query($conn, $sql)) {
	echo "Database done did be creat";
} else {
	echo "What? You did it wrong: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
