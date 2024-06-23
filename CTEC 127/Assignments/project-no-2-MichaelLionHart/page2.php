<?php 
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
    } else {
        $name = NULL;
    }

    if (isset($_GET['bg'])) {
        $bg = $_GET['bg'];
    }

    if (isset($_GET['fontsize'])) {
        $fontsize = $_GET['fontsize'];
    }

    if (isset($_GET['radius'])) {
        $radius = $_GET['radius'];
    }

    if (isset($_GET['fontcolor'])) {
        $fontcolor = $_GET['fontcolor'];
    }

    if (isset($_GET['header'])) {
        $header = $_GET['header'];
    }
    
    if (isset($_GET['padding'])) {
        $padding = $_GET['padding'];
    }

    if (isset($_GET['image'])) {
        $image = $_GET['image'];
    } else {
        $image = NULL;
    }

?>
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
<body class="<?php echo $bg . " " . $fontsize . " " . $fontcolor; ?>">
    <!-- inject header from outside file -->
    <?php require 'includes/header.inc.php'; ?>

    <main class="<?php echo $radius . " " . $padding; ?>">
        <h2>Welcome to CTEC 127 Project 2, here are your instructions:</h2>
        <ul class="normal-list">
            <li><strong><u>bg:</u></strong> changes the background color of the page, and can be set to blue, green, red, orange, cyan, yellow or violet</li>
            <li><strong><u>fontsize:</u></strong> changes the font size, and it can be set to large, xlarge, and xxlarge.</li>
            <li><strong><u>radius:</u></strong> changes the border radius. The options are smallradius, mediumradius, and largeradius. </li>
            <li><strong><u>fontcolor:</u></strong> changes the font color , and can be set to green, red or brown</li>
            <li><strong><u>header:</u></strong> determines whether the header is shown or not. It can be set to either show or hide.</li>
            <li><strong><u>padding:</u></strong> Determines how much padding there there is in this box. It can be set to none, moderate, or toomuch.</li>
        </ul>
    </main>
    <?php if ($image == 'display') {echo '<img src="img/tiger.jpg" alt="picture of a tiger">';} ?>

    <!-- inject footer from outside file -->
    <?php require 'includes/footer.inc.php'; ?>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>