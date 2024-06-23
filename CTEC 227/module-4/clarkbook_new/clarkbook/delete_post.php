<?php
session_start();

require_once('includes/functions.inc.php');

if (!isset($_GET['id'])) {
	echo "The required parameters were not supplied.";
	die();
}

if(isset($_SESSION['role'])){
	if($_SESSION['role'] != 'admin'){
		echo "You are not authorized to use this page.";
		die();
	}
}

try {
	require_once('includes/mysqli_connect.php');
} catch(Exception $e) {
	$error = $e->getMessage();
}

?>
<?php 
$pageTitle = "Login - ClarkBook";
require_once("includes/header.php");
?>
<?php delete_post($db); ?>