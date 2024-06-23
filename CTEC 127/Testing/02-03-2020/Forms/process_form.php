<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Feedback</title>
</head>
<body>
	<?php 
		// check to see if field is not empty
	if (!empty($_POST['name'])) {
		// if it's not empty then set variable
		$name = $_POST['name'];
	} else {
		// was not filled in
		$name = NULL;
		echo "<p>The name is a required input.</p>";
	}

	if (!empty($_POST['street'])) {
		// if it's not empty then set variable
		$street = $_POST['street'];
	} else {
		// was not filled in
		$street = NULL;
		echo "<p>The street is a required input.</p>";
	}

	if (!empty($_POST['comments'])) {
		// if it's not empty then set variable
		$comments = $_POST['comments'];
	} else {
		// was not filled in
		$comments = NULL;
		echo "<p>No comments were entered. Please enter some.</p>";
	}

	// check for gender radio button
	if (isset($_POST['gender'])) {
		$gender = $_POST['gender'];
	} else {
		$gender = NULL;
		echo "<p>Please select a gender.</p>";
	}

	// check for state select
	if ($_POST['state'] != '-') {
		// if it's not '-' then set variable
		$state = $_POST['state'];
	} else {
		$state = NULL;
		echo "<p>Please select a state.</p>";
	}

	// Display values
	if ($name && $street && $gender && $comments && $state) {
		echo "<h1>Here's the info you entered</h1>";
		echo "<p>The name entered was: $name</p>";
		echo "<p>The street entered was: $street</p>";
		echo "<p>The gender you selected was $gender</p>";
		echo "<p>The comments you entered are $comments</p>";
		echo "<p>The state you entered was $state</p>";
	}
	?>
</body>
</html>