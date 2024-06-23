<?php 
try {
	require_once 'inc/mysqli_connect.inc.php';
	$sql = "SELECT first_name,last_name,student_id,email FROM students";
	$result = $db->query($sql);
} catch (exception $e){
	$error = $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MySQLi Test</title>
</head>
<body>
	<h1>Connecting with MySQL</h1>
	<?php if(isset($error)){
		echo "<p>$error</p>";
	} 

	$numrows = $result->num_rows;

	if (!$numrows){
		echo "<p>No rows were found</p>";
	} else {
		echo "<p>Total results found: " . $numrows;

		// fetch_assoc() associative array
		// fetch_row() indexed array
		// fetch_array() offers a choice of types
		// fetch_all() multidimensional array
		// fetch_object() returns next row as object, can take a class name as parameter and will create an instance of that class
		// 
	?>
	<table>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Student ID</th>
			<th>Email</th>
		</tr>

		<?php 
		// loop through all data
		while($row = $result->fetch_assoc()){?>
		<tr>
			<td><?php echo $row['first_name'];?></td>
			<td><?php echo $row['last_name'];?></td>
			<td><?php echo $row['student_id'];?></td>
			<td><?php echo $row['email'];?></td>
		</tr>
		<?php } ?>
	</table>
	<?php  	
	}
	// close db connection
	$db->close();
	?>
</body>
</html>