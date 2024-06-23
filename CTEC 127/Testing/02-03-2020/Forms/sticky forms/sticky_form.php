<!doctype html>
<html lang="en">
<head>
	<!--
		Created by: Bruce Elgort
		Course: CTEC 127
	-->
	<meta charset="UTF-8">
	<title>Sticky Form - CTEC 127</title>
</head>
<body>
<?php 

// If it's a POST request then we have data to process
if($_SERVER['REQUEST_METHOD'] == 'POST'){

	// We have a post, so we can verify fields
	if(!empty($_POST['fullname']) && is_numeric($_POST['age']) && is_numeric($_POST['salary'])) {

		//do stuff as we have the right data

		$fullname = $_POST['fullname'];
		$age = $_POST['age'];
		$salary = $_POST['salary'];

		echo "<h1>Thanks for the information</h1>";

		echo "<p>Fullname: $fullname";
		echo "<p>Age: $age";
		echo "<p>Salary: $salary</p>";

	} else {

		echo "<h1>Whoa! We didn't receive the required info. Dude(tte), please try again.</h1>";

	} // end of if

} // end of if
?>

<!-- Always show the form -->
<!-- Use PHP to fill in the values if they were submitted -->
<!-- Hence the word sticky -->

<h1>Please fill out the form. All fields are required.</h1>
<form method="post" action="sticky_form.php">
	<p>
		<label for="fullname">Full Name</label>
		<input type="text" name="fullname" id="fullname" 
		value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname'];?>">
	</p>
	<p>
		<label for="age">Age</label>
		<input type="text" name="age" id="age" 
		value="<?php if(isset($_POST['age'])) echo $_POST['age'];?>">
	</p>
	<p>
		<label for="salary">Salary</label>
		<input type="text" name="salary" id="salary"
		value="<?php if(isset($_POST['salary'])) echo $_POST['salary'];?>">
	</p>
	<input type="submit" value="Submit">
</form>
	
</body>
</html>