<?php 
/* logout.php */
session_start();

require_once('includes/mysqli_connect.php');
require_once('includes/functions.inc.php');

// log page usage
log_page($db,"Logout");


if(isset($_SESSION['loggedin'])){
	session_unset("loggedin");
	session_unset('fristname');
	session_unset('lastname');
	session_unset('role');
	session_unset('id');
	session_destroy();
}

?>

<?php 
$pageTitle = "Logged Out - ClarkBook";
require_once("includes/header.php");
?>


<?php require_once('includes/nav.php'); ?>
<h1>ClarkBook</h1>
<div class="success">You have been logged out from ClarkBook</div>
<?php require_once('includes/footer.php') ?>