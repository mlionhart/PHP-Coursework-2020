<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Processing Checkboxes</title>
</head>
<body>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<p>Which magazines would you like to receive?</p>
	<input type="checkbox" name="magazines[]" value="Hunting" id="hunting"/><label for="hunting">Hunting</label>
	<br>
	<input type="checkbox" name="magazines[]" value="Woodworking" id="woodworking"/><label for="woodworking">Woordworking</label>
	<br>
	<input type="checkbox" name="magazines[]" value="Model Trains" id="trains"/><label for="trains">Model Trains</label>
	<br><br>	
	<input type="submit">
</form>	
<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isset($_POST['magazines'])) {
		// var_dump($_POST['magazines']);
		echo "<p>The magazines you selected are:</p>";
		echo "<ol>";
		foreach ($_POST['magazines'] as $value) {
			echo "<li>" . $value . "</li>";
		}
		echo "</ol>";
	}
} else {
	echo "<p>The request method is: " . $_SERVER['REQUEST_METHOD'] . "</p>";
}

?>
</body>
</html>
