<?php
$server="localhost";
$user="root";
$pass="owaspbwa";
$dbname="smertpeepler";

if ($_POST["Create_Database"] == "Create Database"){
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
}


if ($_POST["Create_Users_Table"] == "Create Users Table"){
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
}


if ($_POST["Create_Session_Table"] == "Create Session Table"){

	$conn=new mysqli($server, $user, $pass, $dbname);
	if ($conn->connect_error) {
		die("What are you doing???: " . $conn->connect-error);
	}

	$sql="CREATE TABLE session (
	userid VARCHAR(20) NOT NULL,
	sessionid VARCHAR(20) NOT NULL
	)";

	if ($conn->query($sql) === TRUE) {
		echo "YAY!";
	} else {
		echo "Quit it. You're breaking things: " . $conn->error;
	}

	$conn->close();
}

?>

<html>
<body>


<form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="POST">
<input type="submit" name="Create_Database" value="Create Database"><br><br>
<input type="submit" name="Create_Users_Table" value="Create Users Table"><br><br>
<input type="submit" name="Create_Session_Table" value="Create Session Table"><br><br>
</form>


</body>
</html>
