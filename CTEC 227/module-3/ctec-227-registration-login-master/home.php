<?php
// home.php
// start session
session_start();
// set page title defined in inc/header.inc.php 
$pageTitle = 'Home';
// include header
require 'inc/header.inc.php';
?>

<a href="register.php">Register</a>
<a href="login.php" id="login">Login</a>
<a href="" id="logout">Logout</a>

<h1>Welcome to our great site <?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : 'New User!' ?></h1>
<div id="message"></div>
<!-- <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

<!-- defer tells browser to load js after page is loaded -->
<script defer src="js/script.js"></script>

<!-- load footer -->
<?php require 'inc/footer.inc.php' ?>