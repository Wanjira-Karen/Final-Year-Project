<?php
session_start();
if (isset($_SESSION["user"])) {
	header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="./assets/css/signup.css">
</head>

<body>
	<div class="container">
		<?php
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$fullname = $_POST['fullname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirmpassword = $_POST['confirmpassword'];
			$institution = $_POST['institution'];
			$phone_no = $_POST['phone_no'];

			$passwordhash = password_hash($password, PASSWORD_DEFAULT);

			$errors = array();

			if (empty($fullname) or empty($email) or empty($password) or empty($confirmpassword) or empty($institution) or empty($phone_no)) (
				array_push($errors, "All fields are required")
			);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				array_push($errors, "Email is not valid");
			}
			if (strlen($password) < 8) {
				array_push($errors, "Password must be atleast 8 characters long");
			}
			if ($password !== $confirmpassword) {
				array_push($errors, "Password does not match");
			}
			require_once "db-config.php";
			$sql = "SELECT * FROM controllers WHERE email = '$email'";
			$result = mysqli_query($conn, $sql);
			$rowCount = mysqli_num_rows($result);

			if (!$result) {
				// Query execution failed
				die('Error: ' . mysqli_error($conn));
			}

			if (mysqli_num_rows($result) > 0) {
				array_push($errors, "Email already exists");
			}
			if (count($errors) > 0) {
				foreach ($errors as $error) {
					echo "<div class = 'alert alert-danger'>$error</div>";
				}
			} else {

				$sql = "INSERT INTO controllers (fullname, email, password, institution, phone_no) VALUES (?,?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
				$prepareStmt = mysqli_stmt_prepare($stmt, $sql);
				if ($prepareStmt) {
					mysqli_stmt_bind_param($stmt, "sssss", $fullname, $email, $passwordhash, $institution, $phone_no);
					mysqli_stmt_execute($stmt);
					echo "<div class = 'alert alert-success'>You are registered successfully</div>";
				} else {
					die("Something went wrong");
				}
			}
		}
		?>
		<style>
			/* CSS to center the heading */
			h3 {
				text-align: center;
				color: grey;
			}
		</style>
		<h3>Register Here</h3><br>
		<form action="signup.php" method="POST">
			<div class="class-group">
				<input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Full Name" required><br>
			</div>
			<div class="class-group">
				<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" required><br>
			</div>
			<div class="class-group">
				<input type="institution" class="form-control" name="institution" id="institution" placeholder="Enter your Institution Name" required><br>
			</div>
			<div class="class-group">
				<input type="phone_no" class="form-control" name="phone_no" id="phone_no" placeholder="Enter your Phone Number" required><br>
			</div>
			<div class="class-group">
				<input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required><br>
			</div>
			<div class="class-group">
				<input type="text" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required><br>
			</div>
			<div class="form-btn">
				<input type="submit" class="btn btn-primary" value="Register" name="Submit"><br><br>
			</div>

		</form>
		<div>
			<p>Already registered?<a href="./login.php">Log In</a></p>
		</div>
	</div>
	</div>
</body>

</html>