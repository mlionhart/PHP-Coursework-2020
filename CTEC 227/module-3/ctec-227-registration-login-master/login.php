<?php
// login.php

// start session
session_start();
$pageTitle = 'Login';
require 'inc/header.inc.php';
require_once 'inc/db_connect.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $db->real_escape_string($_POST['email']);
    $password = hash('sha512', $db->real_escape_string($_POST['password']));

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    //  echo $sql;

    $result = $db->query($sql);
    if ($result->num_rows == 1) {

        $_SESSION['loggedin'] = 1;
        $_SESSION['email'] = $email;

        $row = $result->fetch_assoc();
        $_SESSION['first_name'] = $row['first_name'];

        header('location: home.php');
    } else {
        echo '<p>Please try again or go away</p>';
    }
}

?>

<!-- example - if user logged in, show image upload form -->
<?php
    // if(isset($_SESSION['username'])) {
    //     include 'upload_form.php';
    // }
?>

<form action="login.php" method="POST">
    <label for="email">Email</label>
    <br><br>
    <input type="email" name="email" id="email" placeholder="Email" required>
    <br><br>
    <label for="password">Password</label>
    <span id="showPassword" onclick="showPassword();">Show Password</span>
    <br><br>
    <input type="password" name="password" id="password" placeholder="Password" required>
    <br><br>
    <input type="submit" value="Login">
</form>

<script src="js/script.js"></script>

<?php require 'inc/footer.inc.php'; ?>