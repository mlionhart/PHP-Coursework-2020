<?php
/* register.php */
session_start();

try {
	require_once('includes/functions.inc.php');
	require_once('includes/mysqli_connect.php');
	// log page usage
	log_page($db,"Register");
} catch(Exception $e) {
	$error = $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/style.css" rel="stylesheet" />
	<title>Register - ClarkBook</title>
</head>
<body>

	<?php require_once("includes/nav.php");

	$success = false;

	if($_SERVER["REQUEST_METHOD"] == "POST"){
			// Required field names
		$required = array('firstname', 'lastname', 'email', 'password');

		// Loop over field names, make sure each one exists and is not empty
		$error = false;
		foreach($required as $field) {
			if (empty($_POST[$field])) {
				$error = true;
			}
		}

		if ($error) {
			echo '<div class="error">All fields are required.</div>';
		} else {
			$first_name = $db->real_escape_string($_POST['firstname']);
			$last_name = $db->real_escape_string($_POST['lastname']);
			$email = $db->real_escape_string($_POST['email']);
			$password = hash('sha512', $_POST['password']);
			$role = $db->real_escape_string($_POST['role']);
			$sql = "INSERT INTO users (first_name,last_name,email,password,role) VALUES ('$first_name' ,'$last_name','$email','$password','$role')";
				// echo $sql;
			$result = $db->query($sql);

			if($db->error){
				echo '<div class="error">' . $db->error . '</div>';
			} else {
				echo '<div class="success">Your registration has been successfully processed.</div>';
				$success = true;
			}
		}
	}

	if (!$success) { ?>
	<h2>Register</h2>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off">
		<label class="reglabel" for="role">User Role:</label>
		<select id="role" name="role">			
			<?php build_select($db,"user_role"); ?>
		</select>
		<br>
		<label class="reglabel" for="firstname">First Name:</label>
		<input class="reginput" type="text" id="firstname" name="firstname" size="20" maxlength="20" value="<?php if(isset($_POST["firstname"])){echo $_POST["firstname"];} ?>">
		<br>
		<label class="reglabel" for="lastname">Last Name:</label>
		<input class="reginput" type="text" id="lastname" autocomplete="off" name="lastname" size="20" maxlength="20" value="<?php if(isset($_POST["lastname"])){echo $_POST["lastname"];} ?>">
		<br>

		<label class="reglabel" for="password">Password:</label>
		<input class="reginput" type="password" id="password" name="password" size="20" maxlength="20" value="<?php if(isset($_POST["password"])){echo $_POST["password"];} ?>">
		<br>

		<label class="reglabel" for="email">Email:</label>
		<input class="reginput" type="email" id="email" name="email" size="40" maxlength="60" value="<?php if(isset($_POST["email"])){echo $_POST["email"];} ?>">
		<br>
		<input class="button1" type="submit" value="Register">
	</form>
	<?php } ?>
	<?php require_once('includes/footer.php') ?>
	<?php $db->close(); ?>