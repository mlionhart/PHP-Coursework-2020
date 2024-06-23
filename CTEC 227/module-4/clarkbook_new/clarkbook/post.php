<?php
/* post.php */
session_start();
require_once('includes/functions.inc.php');

try {
	require_once('includes/mysqli_connect.php');
	// log page usage
	log_page($db,"Post");
} catch(Exception $e) {
	$error = $e->getMessage();
}

?>
<?php 
$pageTitle = "Post - ClarkBook";
require_once("includes/header.php");
?>

<?php require_once("includes/nav.php");

$success = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
		// Required field names
	$required = array('content');

	// Loop over field names, make sure each one exists and is not empty
	$error = false;
	foreach($required as $field) {
		if (empty($_POST[$field])) {
			$error = true;
		}
	}

	if ($error) {
		echo "All fields are required.";
	} else {
		$status = insert_post($db);

		if($db->error){
			echo $db->error;
		}
	}
}

if (!$success) { ?>
<h2>Post</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="off">
	<label class="reglabel" for="mood">I'm feeling:</label>
	<select id="mood" name="mood">			
		<?php build_select($db,"post_mood"); ?>
	</select>
	<br>
	<textarea class="post" rows="5" cols="50" name="content"></textarea>
	<br><br>
	<input class="button1" type="submit" value="Post">
</form>
<?php } ?>
<?php require_once('includes/footer.php') ?>
<?php $db->close(); ?>