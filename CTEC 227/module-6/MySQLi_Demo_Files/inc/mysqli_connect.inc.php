<?php 

$db = new mysqli('localhost','root','','ctec127');

if ($db->connect_error) {
	$error = $db->connect_error;
}

$db->set_charset('utf8');