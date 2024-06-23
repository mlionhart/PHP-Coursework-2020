<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 - Read Session Page</title>
</head>
<body>
<?php 
    // isset is used for checking if session variable already exists
    if (isset($_SESSION['views'])) {
        $_SESSION['views'] = $_SESSION['views'];
    }

    if (isset($_SESSION['browser'])) {
        $_SESSION['browser'] = $_SESSION['browser'];
    }

    if (isset($_SESSION['role'])) {
        $_SESSION['role'] = $_SESSION['role'];
    }

    // echo out values
    echo '<p><strong>The number of page views is: ' . '</strong>&nbsp;' . $_SESSION['views'] . '</p>';
    echo '<p><strong>Your current role is: ' . '</strong>&nbsp;' . $_SESSION['role'] . '</p>';
    echo '<p><strong>The version of your browser is: ' . '</strong>&nbsp;' . $_SESSION['browser'] . '</p>';
    ?>

    <a href="create_session.php">Go To Create Session Page</a><br><br>
    <a href="destroy_session.php">Go To Destroy Session Page</a><br><br>
    <a href="destroy_all_session.php">Go To Destroy All Session Page</a>
</body>
</html>