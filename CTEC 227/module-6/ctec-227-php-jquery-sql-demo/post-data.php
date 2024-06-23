<?php
$db = new mysqli('localhost', 'root', '', 'ctec_students');
$db->set_charset('utf8');

$student_id = $_POST['student_id'];
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "INSERT INTO students (student_id,first_name,last_name,phone,email) VALUES ($student_id,'$first','$last','$phone','$email')";

$result = $db->query($sql);

if ($result) {
    echo json_encode(['status' => 'ok']);
} else {
    echo json_encode(['status' => 'bad']);
}
