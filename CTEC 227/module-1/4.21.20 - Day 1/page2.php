<?php 
    session_start();
    if (isset($_SESSION['loggedin'])) {
        if ($_SESSION['loggedin'] == 1) {
            echo "Welcome to our great site, logged in user!";
        } else {
            header('Location: page1.php');
        }
    }