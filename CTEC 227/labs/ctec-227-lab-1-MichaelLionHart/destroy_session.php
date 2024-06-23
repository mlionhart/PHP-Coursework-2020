<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 - Destroy Session Page</title>
</head>
<body>
<?php 
    // // isset is used for checking if session variable already exists
    // if (isset($_SESSION['views'])) {
    //     $_SESSION['views'] = $_SESSION['views'];
    // }

    // if (isset($_SESSION['browser'])) {
    //     $_SESSION['browser'] = $_SESSION['browser'];
    // }

    // if (isset($_SESSION['role'])) {
    //     $_SESSION['role'] = $_SESSION['role'];
    // }
    // ?>

    <?php 
        unset($_SESSION['views']);
        unset($_SESSION['browser']);
        unset($_SESSION['role']);
    ?>

    <a href="create_session.php">Go To Create Session Page</a><br><br>
    <a href="read_session.php">Go To Read Session Page</a><br><br>
    <a href="destroy_all_session.php">Go To Destroy All Session Page</a>
</body>
</html>