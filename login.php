<?php
$usernameERR = $passwordERR = "";
$username = $password = "";

$server = "localhost"; $user = "root"; $pass="owaspbwa"; $dbname = "smertpeepler";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["username"])) {
		$usernameERR = "*Username is required";
	} else {
		$username = $_POST["username"];
	}

	if (empty($_POST["password"])) {
		$passwordERR = "*Password is required";
	} else {
		$password = $_POST["password"];
	}
	if (($usernameERR == "")&&($passwordERR == "")) {
//		echo "no errors";	
		$conn = mysql_connect($server, $user, $pass) or die(mysql_error());
		$db = mysql_select_db($dbname, $conn) or die(mysql_error());
//		if ($conn->connect_error) {
//			die("Connection  failed: " . $conn->connect_error);
//		}
//		echo "What the fucl";	
		$query = "SELECT * FROM users WHERE username = '" . $username . "' AND  password = '" . $password . "'";
		echo "Query is $query";		
		$result = mysql_query($query);
//		echo "Result is $result";		
		$row = mysql_fetch_array($result);
		echo "Row is $row";
		if (!empty($row['username']) AND !empty($row['password'])) {
			echo "YAY! YOU DONT TOTALLY SUCK AT LIFE.";
		} else {
			echo "BOO. YOU ARE THE WORST. KILL YOURSELF.";
		}

		$conn->close();
	}
}
	
	
?>

<html>
<body>
<style>
.error {color: red;}
</style>

<h1>Login</h1>

<p></p>

<a href="home.php">Home</a><br>
<a href="login.php">Login</a><br>
<a href="register.php">Register</a><br>
<br>
<br>

<form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="POST">

	Username:<br>
	<input type="text" name="username" value="<?php echo $username;?>">
	<span class="error"> <?php echo $usernameERR;?> </span><br>

	Password:<br>
	<input type="text" name="password" value="<?php echo $password;?>">
	<span class="error"> <?php echo $passwordERR;?> </span><br><br>

	<input type="submit" value="Log In">

</form>

</body>
</html>


