<?php
/* clarkbook.php */

session_start();
try {
	require_once('includes/functions.inc.php');
	require_once('includes/mysqli_connect.php');

	// log page usage
	log_page($db,"Home");

} catch(Exception $e) {
	$error = $e->getMessage();
}
?>
<?php 
$pageTitle = "Home - ClarkBook";
require_once("includes/header.php");
require_once("includes/nav.php");
?>

<?php 
// Let's show the content!
$sql = "SELECT users.first_name,users.last_name,posts.id,posts.the_date,posts.content,posts.mood FROM posts INNER JOIN users ON users.id=posts.user_id WHERE posts.hidden=0 ORDER BY the_date DESC";

$result = $db->query($sql);
$delete = '';
$hidden = '';

// if there is no data to show let the user know
if ($result->num_rows == 0){
	echo "<p>There are currently no status updates to display.</p>";
} else {
	echo '<h2>Here are the latest status updates</h2>';
}

// show all the posts
while ($row = $result->fetch_assoc()) {
	if (isset($_SESSION['role'])){
		if ($_SESSION['role'] == 'admin'){
			$delete = 'Actions: <a href="delete_post.php?id=' . $row['id'] . '">Delete</a>';	
			$hidden = '&nbsp;<a href="hide_post.php?id=' . $row['id'] . '">Hide</a>';	
		} else {
			$delete = '';
			$hidden = '';
		}
	}

	$mood = strtolower($row['mood']);

	switch ($mood) {
		case 'happy':
			$mood = ' <i class="fa fa-smile-o happy" aria-hidden="true"></i>';
			break;
		case 'sad':
			$mood = ' <i class="fa fa-frown-o sad" aria-hidden="true"></i>';
			break;
		default:
			$mood = "";
			break;
	}

	echo '<div class="displaypost">';

	echo '<i class="fa fa-user-circle-o fa-5 icon"></i>' . " " . $row['first_name'] . " " . $row['last_name'] . " is feeling " . $mood . " <span class=\"displaypostdate\">on " . date('F j, Y',strtotime($row['the_date'])) . " " . date("H:i",strtotime($row['the_date'])) . "&nbsp;&nbsp;$delete $hidden</span>"; 

	echo '<div class="content">' . $row['content'] . "</div>";
	echo "</div>"; 
}
?>
<?php require_once('includes/footer.php') ?>