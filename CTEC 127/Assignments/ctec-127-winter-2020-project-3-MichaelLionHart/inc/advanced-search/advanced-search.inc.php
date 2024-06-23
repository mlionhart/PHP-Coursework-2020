<?php 
$error_bucket = [];
$yes = '';
$no = '';
$finaid = '';
$degree_program = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
   // array to hold sql data
   $sql_data = [];

   // if field has a value, assign that value to a variable
   $first = (!empty($_POST['first'])) ? $db->real_escape_string($_POST['first']) : '';
   // if variable is has a value, push that value onto the $sql_data array
   (!empty($first)) ? array_push($sql_data, "first_name LIKE '%$first%' ") : null;
   
   $last = (!empty($_POST['last'])) ? $db->real_escape_string($_POST['last']) : '';
   (!empty($last)) ? array_push($sql_data, "last_name LIKE '%$last%' ") : null;

   $sid = (!empty($_POST['sid'])) ? $db->real_escape_string($_POST['sid']) : '';
   (!empty($sid)) ? array_push($sql_data, "student_id LIKE '%$sid%' ") : null;

   $email = (!empty($_POST['email'])) ? $db->real_escape_string($_POST['email']) : '';
   (!empty($email)) ? array_push($sql_data, "email LIKE '%$email%' ") : null;

   $phone = (!empty($_POST['phone'])) ? $db->real_escape_string($_POST['phone']) : '';
   (!empty($phone)) ? array_push($sql_data, "phone LIKE '%$phone%' ") : null;

   $gpa = (!empty($_POST['gpa'])) ? $db->real_escape_string($_POST['gpa']) : '';
   (!empty($gpa)) ? array_push($sql_data, "gpa LIKE '%$gpa%' ") : null;

   $degree_program = $db->real_escape_string($_POST['degree_program']);
   array_push($sql_data, "degree_program = '$degree_program'");

   $graduation_date = (!empty($_POST['graduation_date'])) ? $_POST['graduation_date'] : '';
   (!empty($graduation_date)) ? array_push($sql_data, "graduation_date LIKE '$graduation_date' ") : null;

   if (isset($_POST['finaid'])) {
      if ($_POST['finaid'] == 1) {
         array_push($sql_data, "financial_aid = 1");
         $finaid = 1;
         $yes = 'checked';
      } else {
         array_push($sql_data, "financial_aid = 0");
         $finaid = 0;
         $no = 'checked';
      }
   }
   // build sql using implode, which converts the built array into a string separated by the word "and"
   $sql = "SELECT * FROM $db_table WHERE " . implode(" and ", $sql_data);

   // echo $sql
}
