<?php
/* admin.php */

session_start();

if (isset($_SESSION['role'])) {
	if ($_SESSION['role'] != 'admin'){
		echo "You are not authorized to view this page.";
		die();
	}
} elseif (!isset($_SESSION['role']) && empty($_SESSION['role'])){
		echo "You are not authorized to view this page.";
		die();
}

try {
	require_once('includes/mysqli_connect.php');
	require_once('includes/functions.inc.php');

	// log page usage
	log_page($db,"Admin");

	$sql = "SELECT * FROM users";
	$result = $db->query($sql);

	$sql2 = "SELECT * FROM posts";
	$result2 = $db->query($sql2);

	$sql3 = "SELECT logs.id,logs.user_id,logs.page_name,logs.date,users.first_name,users.last_name FROM logs INNER JOIN users ON users.id=logs.user_id";
	$result3 = $db->query($sql3);

} catch(Exception $e) {
	$error = $e->getMessage();
}

?>
<?php 
$pageTitle = "Register - ClarkBook";
require_once("includes/header.php");
?>
<?php require_once("includes/nav.php");

$numrows = $result->num_rows;
?>

<h2>Users</h2>

<?php 
if(!$numrows){
	echo "No results were found.";
} else {
	echo $numrows . " record(s) were found" . "<br><br>";
	?>

	<table>
		<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Role</th></tr>
		<tr>
			<?php while ($row = $result->fetch_assoc()) { ?>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['first_name']; ?></td>
			<td><?php echo $row['last_name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['role']; ?></td>
		</tr>
		<?php } ?>
	</table>

	<?php
}
?>

<h2>Posts</h2>
<?php
$numrows2 = $result2->num_rows;

if(!$numrows2){
	echo "No results were found.";
} else {
	echo $numrows2 . " record(s) were found" . "<br><br>";
	?>

	<table>
		<tr><th>ID</th><th>User ID</th><th>Content</th><th>Date</th><th>Hidden</th></tr>
		<tr>
			<?php while ($row = $result2->fetch_assoc()) { ?>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['user_id']; ?></td>
			<td><?php echo $row['the_date']; ?></td>
			<td><?php echo $row['content']; ?></td>
			<td><?php echo $row['hidden']; ?></td>
		</tr>
		<?php } ?>
	</table>

	<?php
}
?>

<h2>Activity Logs</h2>
<?php
$numrows3 = $result3->num_rows;

if(!$numrows3){
	echo "No results were found.";
} else {
	echo $numrows3 . " record(s) were found" . "<br><br>";
	?>

	<table>
		<tr><th>ID</th><th>User ID</th><th>User Name</th><th>Date</th><th>Page Visited</th></tr>
		<tr>
			<?php while ($row = $result3->fetch_assoc()) { ?>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['user_id']; ?></td>
			<td><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></td>
			<td><?php echo $row['date']; ?></td>
			<td><?php echo $row['page_name']; ?></td>
		</tr>
		<?php } ?>
	</table>

	<?php
}

$db->close();
?>

<?php require_once('includes/footer.php') ?>