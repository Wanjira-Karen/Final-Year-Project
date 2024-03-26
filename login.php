<?php
session_start();
if (isset($_SESSION["user"])) {
	header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log In</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/signup.css">
</head>

<body>
	<style>
		h3 {
			text-align: center;
			color: grey;
		}
	</style>
	<div class=container>
		<?php
		if ($_SERVER['REQUEST_METHOD'] == "POST") {

			$email = $_POST["email"];
			$password = $_POST["password"];

			require_once "./db-config.php";
			$sql = "SELECT * FROM controllers WHERE email = '$email'";
			$result = mysqli_query($conn, $sql);
			$user = mysqli_fetch_array($result, MYSQLI_ASSOC);

			if ($user) {
				if (password_verify($password, $user["password"])) {
					session_start();
					$_SESSION["user"] = "yes";
					$_SESSION["controllerId"] = $user["id"]; // Set the controllerId session variable
					header("Location: ./dashboard.php");
					die();
				} else {
					echo "<div class='alert alert-danger'>Password does not match</div>";
				}
			} else {
				echo "<div class='alert alert-danger'>Email does not exist</div>";
			}
		}
		?>
		<h3>Log in</h3><br>
		<form action="./login.php" method="POST">
			<div class=class-group>
				<input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email Address" required><br>
			</div>
			<div class=class-group>
				<input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required><br>
			</div>
			<div class="form-button">
				<input type="submit" value="Login" name="Login" class="btn btn-primary"><br><br>
			</div>
		</form>
		<div>
			<p>Not registered yet?<a href="./signup.php">Register Here</a></p>
		</div>
	</div>
</body>

</html>