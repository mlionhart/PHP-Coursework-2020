<header>
	<div class="topheader">
		<?php
		if(isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
			$isAdmin = "(Administrator)";
			$user_role = '|&nbsp;&nbsp;<a href="admin.php" title="Administrator">Admin</a>';
		} else {
			$user_role = "";
			$isAdmin = "(User)";
		}

		if(isset($_SESSION['firstname'])){
			echo '<div class="userheader"><i class="fa fa-user-circle-o fa-5 icon"></i>&nbsp;<a href="profile.php?id=' . $_SESSION['id'] . '" class="profilelink" title="Profile">' . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . "</a> $isAdmin</div>";
		}
		?>
	</div>

	<nav>
		<?php

		if(isset($_SESSION['loggedin'])) {
			$logtext = '|&nbsp;&nbsp;<a href="logout.php" title="Logout">Logout</a>&nbsp;&nbsp;';
		} else {
			$logtext = '|&nbsp;&nbsp;<a href="login.php" title="Login">Login</a>&nbsp;&nbsp;';
		}

		if(isset($_SESSION['loggedin'])) {
			$post = '|&nbsp;&nbsp;<a href="post.php" title="Post">Post</a>&nbsp;&nbsp;';
		} else {
			$post = '';
		}

		?>	<span class="clarkbook">ClarkBook</span>
		<a href="clarkbook.php" title="ClarkBook Home">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="register.php" title="Register">Register</a>&nbsp;&nbsp;<?php echo $post ?><?php echo $logtext ?><?php echo $user_role ?>
		<img class="logo" src="images/logo.png" alt="ClarkBook Logo" />
	</nav>
</header>