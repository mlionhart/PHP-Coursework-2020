<?php // Filename: connect.inc.php

require_once __DIR__ . "/../db/mysqli_connect.inc.php";
require_once __DIR__ . "/../app/config.inc.php";

$error_bucket = [];
$yes = '';
$no = '';
$finaid = '';
$degree_program = 'undeclared';

// http://php.net/manual/en/mysqli.real-escape-string.php

if($_SERVER['REQUEST_METHOD']=="POST"){
    // grab primary key from hidden field
    if (!empty($_POST['id'])) {
        $id = $_POST['id'];
    }
    // First insure that all required fields are filled in
    if (empty($_POST['first'])) {
        array_push($error_bucket,"<p>A first name is required.</p>");
    } else {
        $first = $db->real_escape_string(strip_tags($_POST['first']));
    }
    if (empty($_POST['last'])) {
        array_push($error_bucket,"<p>A last name is required.</p>");
    } else {
        $last = $db->real_escape_string(strip_tags($_POST['last']));
    }
    if (empty($_POST['sid'])) {
        array_push($error_bucket,"<p>A student ID is required.</p>");
    } else {
        $sid = $db->real_escape_string(strip_tags($_POST['sid']));
    }
    // GPA field
    if (empty($_POST['gpa'])) {
        array_push($error_bucket,"<p>A GPA is required.</p>");
    } else {
        #$gpa = $_POST['gpa'];
        $gpa = $db->real_escape_string($_POST['gpa']);
    }
    // degree program logic
    if ($_POST['degree_program'] == 'Undeclared') {
        array_push($error_bucket, "<p>Please select a degree program</p>");
    } else {
        $degree_program = $db->real_escape_string($_POST['degree_program']);
    }
    // financial aid logic
    if ($_POST['finaid'] == 1) {
        $finaid = 1;
        $yes = 'checked';
        $no = NULL;
    } elseif ($_POST['finaid'] == 0) {
        $finaid = 0;
        $no = 'checked';
        $yes = NULL;
    } 
    // graduation date logic
    if (!empty($_POST['graduation_date'])) {
        $graduation_date = $db->real_escape_string(strip_tags($_POST['graduation_date']));
    }
    // email field logic
    if (empty($_POST['email'])) {
        array_push($error_bucket,"<p>An email address is required.</p>");
    } else {
        $email = $db->real_escape_string(strip_tags($_POST['email']));
    }
    // phone field logic
    if (empty($_POST['phone'])) {
        array_push($error_bucket,"<p>A phone number is required.</p>");
    } else {
        $phone = $db->real_escape_string(strip_tags($_POST['phone']));
    }

    // If we have no errors than we can try and insert the data
    if (count($error_bucket) == 0) {
        // Time for some SQL
        $sql = "UPDATE $db_table SET first_name='$first', last_name='$last', student_id=$sid, email='$email',phone='$phone', gpa=$gpa, financial_aid=$finaid, degree_program='$degree_program', graduation_date='$graduation_date' WHERE id=$id";
        // echo $sql;

        $result = $db->query($sql);
        if (!$result) {
            echo '<div class="alert alert-danger" role="alert">
            I am sorry, but I could not save that record for you. ' .  
            $db->error . '.</div>';
        } else {
            header('location: display-records.php?message=The record has been updated successfully');
        //     echo '<div class="alert alert-success" role="alert">
        //     I saved that new record for you!
        //   </div>';
        //     unset($first);
        //     unset($last);
        //     unset($sid);
        //     unset($email);
        //     unset($phone);
        //     unset($id);
        }
    } else {
        display_error_bucket($error_bucket);
    } // end of error bucket
} else {
    // check for record id (primary key)
    $id = $_GET['id'];
    // now we need to query the database and get the data for the record
    // note limit 1
    $sql = "SELECT * FROM $db_table WHERE id=$id LIMIT 1";
    // query database
    $result = $db->query($sql);
    // get the one row of data
    while($row = $result->fetch_assoc()) {
        if ($row['financial_aid'] == 1) {
            $yes = 'checked';
            $no = NULL;
        } elseif ($row['financial_aid'] == 0) {
            $no = 'checked';
            $yes = NULL;
        }
        $first = $row['first_name'];
        $last = $row['last_name'];
        $sid = $row['student_id'];
        $email = $row['email'];
        $phone = $row['phone'];
        $gpa = $row['gpa'];
        $degree_program = $row['degree_program'];
        $graduation_date = $row['graduation_date'];
    }
}