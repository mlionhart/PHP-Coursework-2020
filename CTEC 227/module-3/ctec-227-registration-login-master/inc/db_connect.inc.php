<?php
// db_connect.inc.php
# Create a new connection to the database
// (server name, username, password, database name)
$db = new mysqli('localhost', 'root', '', 'codemonkey');

# If there was an error connecting to the database
if ($db->connect_error) {
    $error = $db->connect_error;
    echo $error;
}

# Set the character encoding of the database connection to UTF-8
$db->set_charset('utf8');
