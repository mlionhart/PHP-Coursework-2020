<?php setcookie('abc123-12','pizza',time()+86400); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTTP Headers</title>
</head>
<body>
	<h1>List of HTTP Headers for this page</h1>
	<h2>Using PHP's getallheaders() function</h2>
	<h3>SENT VIA THE REQUEST</h3>
	<a href="http://php.net/manual/en/function.getallheaders.php" title="getallheaders function">getallheaders() on PHP.net</a>
	<ul>
		<?php 
		foreach (getallheaders() as $key => $value) {
			echo '<li>' . $key . " " . $value . '</li>';
		}
		?>
	</ul>


	<h2>Using PHP's headers_list() function</h2>
	<h3>SENT VIA THE RESPONSE</h3>
	<a href="http://php.net/manual/en/function.headers-list.php" title="headers_list function">headers_list() on PHP.net</a>

	<ul>
		<?php 
		foreach (headers_list() as $key => $value) {
			echo '<li>' . $key . " " . $value . '</li>';
		}
		?>
	</ul>

	<h2>Using PHP's $_SERVER() function</h2>
	<h3>INFO AVAILABLE TO THE SERVER</h3>
	<a href="http://php.net/manual/en/reserved.variables.server.php" title="$_SERVER SUPER global">$_SERVER on PHP.net</a>

	<ul>
		<?php 
		foreach ($_SERVER as $key => $value) {
			echo '<li>' . $key . " " . $value . '</li>';
		}
		?>
	</ul>



</body>
</html>