<?php // Filename: mysqli_connect.inc.php

# Create a new connection to the database
$host = 'localhost';
$username = 'root';
$password = '';
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
    
// copyright
$app_copyright = '&copy; 2019 - Your Name';
// version
$app_version = 0.1;
// app name
$app_name = "Record Manager";
// database table name
$db_table = "student_v2";

// check to see if id is in the query string
if(isset($_GET['id'])){
    // build SQL for delete
    $sql = "DELETE FROM $db_table WHERE id={$_GET['id']} LIMIT 1";
    // perform query
    $result = $db->query($sql); 
    // if one row was affected then redirect browser back to display-records.php
    if($db->affected_rows == 1){
        header('location: display-records.php?message=I%20 successfully%20deleted%20that%20record%20for%20you.');
    } else {
        echo '<h1>Dude(tte). Please do not play with our site. GO AWAY!</h1>';
    }
}
?>