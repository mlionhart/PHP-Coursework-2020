<!doctype html>
<html lang="en">
<head>
	<!--
		Created by: Bruce Elgort
		Course: CTEC 127
	-->
	<meta charset="UTF-8">
    <link rel="stylesheet" href="single_page_form.css">
	<title>All In One Form - CTEC 127</title>
</head>
<body>
<?php

// Make sure that you have a POST request.
// POST is the method to used to process this form.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // We have a post, so we can now verify field value

    if (!empty($_POST['fullname']) && is_numeric($_POST['age']) && is_numeric($_POST['salary'])) {

        // Do stuff as we have the right data

        $fullname = $_POST['fullname'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];

        echo "<h1>Thanks for the information</h1>";
        echo "<p>Fullname: $fullname</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Salary: $salary</p>";

    } else {

        echo "<h1>Ah shucks, you need to give me the RIGHT information</h1>";
        echo "<p><a href=\"single_page_form.php\">Give it another try, OK?</a></p>";

    }

} else {

// Show form
// Note the line below. The PHP script gets closed
?>

<!-- This is the HTML Form -->
<h1>Please fill out the form. All fields are required.</h1>
<form method="post" action="single_page_form.php">
    <p>
    <label for="fullname">Full Name:</label>
    <input type="text" name="fullname" id="fullname" value="">
    </p>
    <p>
    <label for="age">Age:</label>
    <input type="text" name="age" id="age" value="">
    </p>
    <p>
    <label for="salary">Salary:</label>
    <input type="text" name="salary" id="salary" value="">
    </p>
    <input type="submit" value="Submit">
</form>

<!-- Note the line below. The PHP script is reopened -->
<?php
}
?>

</body>
</html>