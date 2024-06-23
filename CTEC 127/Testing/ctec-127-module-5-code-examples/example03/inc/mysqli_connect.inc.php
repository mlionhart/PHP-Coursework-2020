<?php # mysqli_connect.inc.php

# Create a new connection to the database
$host = 'ctec-127.cuqeqos1gudo.us-east-1.rds.amazonaws.com';
$username = 'belgort';
$password = 'XyNRKGta2bpxaexB';
$database = 'ctec';

$db = new mysqli(
	$host,
	$username,
	$password,
	$database
);

# If there was an error connecting to the database
if ($db->connect_error) {
	$error = $db->connect_error;
	echo $error;
} // end if

# Set the character encoding of the database connection to UTF-8
$db->set_charset('utf8');