<?php
/* login.php */
session_start();

try {
	require_once('includes/mysqli_connect.php');
	require_once('includes/functions.inc.php');
	log_page($db,"Login");
} catch(Exception $e) {
	$error = $e->getMessage();
}

function login($db){
	$email = $db->real_escape_string($_POST['email']);
	$password = hash('sha512', $_POST['password']);

	$sql = "SELECT * FROM users WHERE email='" . $_POST["email"] . "'" . " AND password=" . "'" . $password . "' LIMIT 1";
	
	$result = $db->query($sql);

	if ($result->num_rows == 1){
		// return true;
		$row = $result->fetch_assoc();
		$_SESSION['firstname'] = $row['first_name'];
		$_SESSION['lastname'] = $row['last_name'];
		$_SESSION['id'] = $row['id'];
		$_SESSION['loggedin'] = 1;
		$_SESSION['role'] = $row['role'];
		header("location: clarkbook.php");
	} else {
		return false;
	}
}

?>

<?php 
$pageTitle = "Login - ClarkBook";
require_once("includes/header.php");
?>

<?php require_once("includes/nav.php");

$success = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
			// Required field names
	$required = array('email','password');

		// Loop over field names, make sure each one exists and is not empty
	$error = false;
	foreach($required as $field) {
		if (empty($_POST[$field])) {
			$error = true;
		}
	}

	if ($error) {
		echo "All fields are required.";
	} else {
		$status = login($db);

		if ($status){
			echo "<br>You are now logged in!";
			$success = true;
		} else {
			echo "<br>Could not log you in. Please try again.";
		}
	}
}

$db->close();

if (!$success) { ?>
<h1>ClarkBook</h1>
<h2>Login</h2>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off">

	<label class="reglabel" for="email">Email:</label>
	<input class="reginput" type="email" id="email" name="email" size="40" maxlength="60" value="<?php if(isset($_POST["email"])){echo $_POST["email"];} ?>">
	<br>

	<label class="reglabel" for="password">Password:</label>
	<input class="reginput" type="password" id="password" name="password" size="20" maxlength="20" value="<?php if(isset($_POST["password"])){echo $_POST["password"];} ?>">
	<br>

	<input class="button1" type="submit" value="Login">
</form>
<?php } ?>

<?php require_once('includes/footer.php') ?>