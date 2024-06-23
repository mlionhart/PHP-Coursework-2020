<?php
$db = new mysqli('localhost', 'root', '', 'ctec');
$db->set_charset('utf8');

$sql = 'SELECT * FROM student_v2';
$result = $db->query($sql);

echo json_encode($result->fetch_all(MYSQLI_ASSOC));

$db->close();
