<?php
$server="localhost";
$user="root";
$pass="owaspbwa";
$dbname="smertpeepler";

$conn=new mysqli($server, $user, $pass, $dbname);
if ($conn->connect_error) {
	die("Stop doing it wrong: " . $conn->connect-error);
}

$sql="CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
username VARCHAR(30) NOT NULL UNIQUE,
password VARCHAR (50) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
	echo "YAY!";
} else {
	echo "BAD!!! Don't do that: " . $conn->error;
}

$conn->close();
?>
