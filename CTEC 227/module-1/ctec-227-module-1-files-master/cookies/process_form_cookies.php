<?php

# Request : From Client to Server
# Response: From Server to Client
# Server: Receive Request and Send Response
# Client(browser) : Send Request and Receive Response

# References:
# header - http://www.php.net/manual/en/function.header.php
# setcookie - http://www.php.net/manual/en/function.setcookie.php

# setcookie ($name, $value, $expire)
# seconds * minutes * hours * daysinweek 
# to add one week: 60 * 60 * 24 * 7 = 1 week

# set the cookie using data from the post
# setcookie("firstname", $_POST['firstname'], time() + (60 * 60 * 24 * 7));                          

# remove/unset a cookie
# setcookie("firstname", "", time() - 36000);

# Control what's in the header
# header("X-Powered-By: Brucie");

# Send a 404 response code
#header("HTTP/1.0 404 Not Found");

# tell the browser to expect a PDF file
# header('Content-type: application/pdf');
# header('Content-type: application/ms-excel');
# header('Content-Disposition: attachment; filename='.$filename);

# page redirection
# header("Location: http://clark.edu");
?>

<html>

<head>
	<title>Cookies - Part 1 (process_form_cookies)</title>
</head>

<body>
	<!-- 	The cookie was set. The value is: <?php echo $_COOKIE['firstname']; ?>
 -->
	<pre>
		<?php print_r(headers_list()); ?>
	</pre>
</body>

</html>