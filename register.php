<?php
$firstnameERR = $lastnameERR = $usernameERR = $passwordERR = $password2ERR = $emailERR = $catsERR = $termsERR = " ";
$firstname = $lastname = $username = $password = $password2 = $email = $cats = $terms = " ";

$server = "localhost"; $user = "root"; $pass = "owaspbwa"; $dbname = "smertpeepler";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["firstname"])) {
		$firstnameERR =  "*First name is required";
	} else {
		$firstname = $_POST["firstname"];
	}

	if (empty($_POST["lastname"])) {
		$lastnameERR = "*Last name is required";
	} else {
		$lastname = $_POST["lastname"];
	}

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

	if ($_POST["password"] != $_POST["password2"]) {
		$password2ERR = "*Passwords must matchy";
	}

	if (empty($_POST["email"])) {
		$emailERR = "*E-mail is required";
	} else {
		$email = $_POST["email"];
	}

	if ($_POST["cats"] != "yes") {
		$catsERR = "	*Liking cats is required";
	}

	if (isset($_POST["terms"])) {
		$termsERR = "*You are a liar. There are no terms and conditions.";
	}

	if (($firstnameERR == " ")&&($lastnameERR == " ")&&($usernameERR == " ")&&($passwordERR == " ")&&($password2ERR == " ")&&($emailERR == " ")&&($catsERR == " ")&&($termsERR == " ")) {
		$conn = new mysqli($server, $user, $pass, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: ". $conn->connect_error);
		}

		$sql = "INSERT INTO users (firstname, lastname, username, password, email)
		VALUES ('$firstname', '$lastname', '$username', '$password', '$email')";

		if ($conn->query($sql) === TRUE) {
			echo "Account successfully registered!!!";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}
}
?>

<html>
<body>


<h1>Register</h1>

<p> </p>
<a href="home.php">Home</a><br>
<a href="login.php">Login</a><br>
<a href="register.php">Register</a><br>
<br>
<br>

<form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="POST">
	First name:<br>
	<input type="text" name="firstname">
	<span class="error"> <?php echo $firstnameERR;?></span><br>
	Last name:<br>
	<input type="text" name="lastname">
	<span class="error"> <?php echo $lastnameERR;?></span><br>
	Desired username:<br>
	<input type="text" name="username">
	<span class="error"> <?php echo $usernameERR;?></span><br>
	Password:<br>
	<input type="text" name="password">
	<span class="error"> <?php echo $passwordERR;?></span><br>
	Re-type password:<br>
	<input type="text" name="password2">
	<span class="error"> <?php echo $password2ERR;?></span><br>
	E-mail:<br>
	<input type="text" name="email">
	<span class="error"> <?php echo $emailERR;?></span><br><br>
	Do you like cats?<br>
	Yes!<input type="radio" name="cats" value="yes">
	No.<input type="radio" name="cats" value="no">
	<span class="error"> <?php echo $catsERR;?></span><br><br>
	<input type="checkbox" name="terms" value="yes">I have read the terms and conditions.<br>
	<span class="error"> <?php echo $termsERR;?></span><br>
	<input type="submit" value="Register"><br>
	<br>

</form>

</body>
</html>


