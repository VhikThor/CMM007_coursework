<?php
// Initialize the session
session_start();

/* // Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
	header("location: home.php");
	exit;
} */

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$admin_name = $dmin_psw = "";
$admin_name_err = $admin_psw_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Check if username is empty
	if (empty(trim($_POST["admin_name"]))) {
		$admin_name_err = "Please enter your username.";
	} else {
		$admin_name = trim($_POST['admin_name']);
	}

	// Check if password is empty
	if (empty(trim($_POST["admin_psw"]))) {
		$admin_psw_err = "Please enter your password.";
	} else {
		$admin_psw = trim($_POST["admin_psw"]);
	}

	// Validate credentials
	if (empty($admin_name_err) && empty($admin_psw_err)) {
		// Prepare a select statement
		$sql = "SELECT id,admin_name, admin_psw,createdate FROM adminlogin WHERE admin_name = ?";

		if ($stmt = mysqli_prepare($connection, $sql)) {
			// Bind variables to the prepared statement as parameters
			mysqli_stmt_bind_param($stmt, "s", $param_admin_name);

			// Set parameters
			$param_admin_name = $admin_name;

			// Attempt to execute the prepared statement
			if (mysqli_stmt_execute($stmt)) {
				// Store result
				mysqli_stmt_store_result($stmt);

				// Check if username exists, if yes then verify password
				if (mysqli_stmt_num_rows($stmt) == 1) {
					// Bind result variables
					mysqli_stmt_bind_result($stmt, $id, $admin_name, $hashed_password, $createdate);
					if (mysqli_stmt_fetch($stmt)) {
						if (password_verify($admin_psw, $hashed_password)) {
							// Password is correct, so start a new session
							session_start();

							// Store data in session variables
							$_SESSION["loggedin"] = true;
							$_SESSION["id"] = $id;
							$_SESSION["admin_name"] = $admin_name;

							// Redirect user to welcome page
							header("location: admin_home.php");
						} else {
							// Display an error message if password is not valid
							$admin_psw_err = "The password you entered was not valid.";
						}
					}
				} else {
					// Display an error message if username doesn't exist
					$admin_name_err = "No account found with that username.";
				}
			} else {
				echo "Oops! Something went wrong. Please try again later.";
			}

			// Close statement
			mysqli_stmt_close($stmt);
		}
	}

	// Close connection
	mysqli_close($connection);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin | Log in</title>

	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

	<!-- custom css file link  -->
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<!--    header section  -->
	<section class="header">
		<a href="#" class="logo">2201692</a>
		<nav class="navbar">
			<a href="../dashboard.php">home</a>

			<div class="dropdown">
				<button class="dropbtn"> Sign up
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="admin/admin_signup.php">Admin</a>
					<a href="../user/signup.php">Users</a>
				</div>
			</div>
		</nav>

		<div id="menu-btn" class="fas fa-bars"></div>
	</section>
	<!--  header section end  -->

	<!--=======content================================-->
	<section class="home">
		<div class="slide" style="background:url(../images/bg4.jpg) no-repeat">
			<div class="card">
				<h2>log in</h2>
				<h3 style="font-size: 2rem;">Admin</h3>


				<div class="content">
					<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method="POST">
						<div class="inputBox">
							<span><i class="fa fa-user"></i></span>
							<input type="text" placeholder="enter your username " name="admin_name">
							<p style="color: red;"><?php echo $admin_name_err; ?></p>
						</div>
						<div class="inputBox">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" placeholder="enter your password" name="admin_psw">
							<p style="color: red;"><?php echo $admin_psw_err; ?></p>
						</div>
						<p>Don't have an account? <a href="admin_signup.php" style="color:var(--main-color);">
								<strong>Sign up now</strong></a>.</p>
						<input type="submit" name="login" class="btn" value="login">
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- footer section starts -->
	<section class="footer">
		<div class="box-container">
			<div class="credit_f">
				created by <span>2201692</span>
			</div>
		</div>
	</section>
	<!-- footer section ends -->

	<!-- custom js file link -->
	<script src="../js/script.js"></script>
</body>

</html>