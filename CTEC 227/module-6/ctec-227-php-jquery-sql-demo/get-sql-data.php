<?php
$db = new mysqli('localhost', 'root', '', 'ctec');
$db->set_charset('utf8');

if (isset($_GET['id'])) {
    $id = $_GET['id']; // get id
    $sql = 'SELECT * FROM student WHERE ID=' . $id;
    $result = $db->query($sql);
    echo json_encode($result->fetch_assoc());
}

$db->close();
