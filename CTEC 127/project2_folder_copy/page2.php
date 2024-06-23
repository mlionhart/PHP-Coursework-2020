<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 2</title>
</head>
<style>
    /* For some reason the style.css page wont let me add anything to alter the look of the page */

    body {
        background-color: cornsilk;
    }

    header {
        background-color: crimson;
        border-style: solid;
        border-width: .25rem;
        border-top-color: #964A00;
        border-bottom-color: #0C1F66;
        border-left-color: #034C5D;
        border-right-color: #966800;
        text-align: center;
    }

    footer {
        background-color: crimson;
        border-style: solid;
        border-width: .25rem;
        border-top-color: #964A00;
        border-bottom-color: #0C1F66;
        border-left-color: #034C5D;
        border-right-color: #966800;
        text-align: center;
    }
</style>
<header>
    <p>BONUS STUFF!!!!!!!!1!</p>
</header>

<body>
    <?php
    if (isset($_GET['gwir'])) {
        echo "<img src='img/recycle.jpg' alt='recycle sign'>";
    }

    if (isset($_GET['pizza'])) {
        echo "<img src='img/pizza_gladiator.jpg' alt='eat love pizza, and a roman helmet'>";
    }

    if (isset($_GET['wdim'])) {
        echo "<img src='img/whatdoesitmean.jpg' alt='old man infront of laptop holding a mug looking at viewer'>";
    }

    if (isset($_GET['review'])) {
        echo "<img src='img/shrug.jpg' alt='an old man shrugging and looking at the viewer'>";
    }

    if (isset($_GET['color'])) {
        if ($_GET['color'] == 'Red') {
            echo "<img src='img/red.jpg' alt='the color red'>";
        } elseif ($_GET['color'] == 'Green') {
            echo "<img src='img/green.jpg' alt='the color green'>";
        } else {
            echo "<img src='img/blue.jpg' alt='the color blue'>";
        }
    } 

    // echo "<img src='img/green.jpg' alt='the color green'>";
    ?>



    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
<footer>&copy; Project Form#2 2020</footer>

</html>