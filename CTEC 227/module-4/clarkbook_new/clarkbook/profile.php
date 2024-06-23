<?php
/* profile.php */

session_start();
try {
	require_once('includes/mysqli_connect.php');
	require_once('includes/functions.inc.php');
	log_page($db,"Profile");
} catch(Exception $e) {
	$error = $e->getMessage();
}

$id = $_SESSION['id'];

if ($_SERVER['REQUEST_METHOD'] != "POST") {
	// first query the database and get info for the user id supplied in URL
	$sql = "SELECT * FROM users WHERE id=" . $_GET['id'];

	$result = $db->query($sql);

	$row = $result->fetch_assoc();

	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$email = $row['email'];
	$role = $row['role'];
}
?>
<?php 
$pageTitle = "Profile - ClarkBook";
require_once("includes/header.php");
?>

<?php require_once("includes/nav.php");

$success = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
		// Required field names
	$required = array('firstname', 'lastname', 'email');

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

		$sql = "UPDATE users SET first_name='" . $_POST['firstname'] . 
		"',last_name='" . $_POST['lastname'] . 
		"',email='" . $_POST['email'] .
		"',role='" . $_POST['role'] .
		"' WHERE id=" . $id;


		$result = $db->query($sql);

		if($db->error){
			echo '<div class="error">' . $db->error . '</div>';
		} else {
				// reset the session variables
			$_SESSION['firstname'] = $_POST['firstname'];
			$_SESSION['lastname'] = $_POST['lastname'];
			$_SESSION['role'] = $_POST['role'];
			echo '<div class="success">Your ClarkBook Profile has been updated.</div>';
			$success = true;
		}
	}
}

$db->close();

if (!$success) { ?>
<h1>Profile</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off">
	<label class="reglabel" for="role">User Role:</label>
	<select id="role" name="role">
		<option value="user" <?php if($role == 'user'){echo "selected";} ?>>User</option>
		<option value="admin" <?php if($role == 'admin'){echo "selected";} ?>>Administrator</option>
	</select>
	<br>
	<label class="reglabel" for="firstname">First Name:</label>
	<input class="reginput" type="text" id="firstname" name="firstname" size="20" maxlength="20" value="<?php echo $first_name; ?>">
	<br>
	<label class="reglabel" for="lastname">Last Name:</label>
	<input class="reginput" type="text" id="lastname" autocomplete="off" name="lastname" size="20" maxlength="20" value="<?php echo $last_name; ?>">
	<br>

	<label class="reglabel" for="email">Email:</label>
	<input class="reginput" type="email" id="email" name="email" size="40" maxlength="60" value="<?php echo $email; ?>">
	<br>
	<input class="button1" type="submit">
</form>
<?php } ?>
<?php require_once('includes/footer.php') ?>