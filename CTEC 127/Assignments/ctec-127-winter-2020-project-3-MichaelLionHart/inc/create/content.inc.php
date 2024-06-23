<?php // Filename: connect.inc.php

require_once __DIR__ . "/../db/mysqli_connect.inc.php";
require_once __DIR__ . "/../functions/functions.inc.php";
require_once __DIR__ . "/../app/config.inc.php";

$error_bucket = [];
$yes = '';
$no = '';
$finaid = '';
$degree_program = 'undeclared';
$graduation_date = '';


// http://php.net/manual/en/mysqli.real-escape-string.php

if($_SERVER['REQUEST_METHOD']=="POST"){
    // First insure that all required fields are filled in
    if (empty($_POST['first'])) {
        array_push($error_bucket,"<p>A first name is required.</p>");
    } else {
        # Old way
        #$first = $_POST['first'];
        # New way
        $first = $db->real_escape_string(strip_tags($_POST['first']));
    }
    if (empty($_POST['last'])) {
        array_push($error_bucket,"<p>A last name is required.</p>");
    } else {
        #$last = $_POST['last'];
        $last = $db->real_escape_string(strip_tags($_POST['last']));
    }
    if (empty($_POST['sid'])) {
        array_push($error_bucket,"<p>A student ID is required.</p>");
    } else {
        #$id = $_POST['id'];
        $sid = $db->real_escape_string(strip_tags($_POST['sid']));
    }
    // GPA field
    if (empty($_POST['gpa'])) {
        array_push($error_bucket,"<p>A GPA is required.</p>");
    } else {
        #$gpa = $_POST['gpa'];
        $gpa = $db->real_escape_string(strip_tags($_POST['gpa']));
    }
    // financial aid logic
    if ($_POST['finaid'] == 1) {
        $finaid = 1;
        $yes = 'checked';
        $no = '';
    } elseif ($_POST['finaid'] == 0) {
        $finaid = 0;
        $no = 'checked';
        $yes = '';
    }
    // degree program logic
    if ($_POST['degree_program'] == 'Undeclared') {
        array_push($error_bucket, "<p>Please select a degree program</p>");
    } else {
        $degree_program = $db->real_escape_string(strip_tags($_POST['degree_program']));
    }
    // graduation date logic
    if (!empty($_POST['graduation_date'])) {
        $graduation_date = $db->real_escape_string(strip_tags($_POST['graduation_date']));
    }
    // email logic
    if (empty($_POST['email'])) {
        array_push($error_bucket,"<p>An email address is required.</p>");
    } else {
        #$email = $_POST['email'];
        $email = $db->real_escape_string(strip_tags($_POST['email']));
    }
    // phone field logic
    if (empty($_POST['phone'])) {
        array_push($error_bucket,"<p>A phone number is required.</p>");
    } else {
        #$phone = $_POST['phone'];
        $phone = $db->real_escape_string(strip_tags($_POST['phone']));
    }

    // If we have no errors than we can try and insert the data
    if (count($error_bucket) == 0) {
        // Time for some SQL
        $sql = "INSERT INTO $db_table (first_name,last_name,student_id,email,phone,gpa,financial_aid,degree_program,graduation_date) ";
        $sql .= "VALUES ('$first','$last',$sid,'$email','$phone',$gpa,$finaid,'$degree_program','$graduation_date')";
        echo $sql;

        // comment in for debug of SQL
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
        //     unset($gpa);
        //     unset($degree_program);
        //     unset($finaid);
            // unset($yes);
            // unset($no);
        }
    } else {
        display_error_bucket($error_bucket);
    }
}

?>
