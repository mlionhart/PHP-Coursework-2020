<?php require 'inc/functions.inc.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="welcome.css">
    <title>Welcome</title>
</head>
<body>
    <header>
        <nav>
            <?php #include 'inc/nav.html';
                echo build_nav("cody special");
            ?>            
        </nav>
    </header>
    <main></main>
    <footer>
        <nav>
            <?php #include 'inc/nav.html';
                echo build_nav("kyle");
            ?>
        </nav>
    </footer>
</body>
</html>