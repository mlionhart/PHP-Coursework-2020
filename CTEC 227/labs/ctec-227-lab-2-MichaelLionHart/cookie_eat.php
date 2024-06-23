<?php 
    // echo cookies
    echo '<strong>The cookie was set, the value is:</strong>  ' . $_COOKIE['username'] . '<br>';
    echo '<strong>The cookie was set, the value is:</strong>  ' . $_COOKIE['firstname'] . '<br>';
    echo '<strong>The cookie was set, the value is:</strong>  ' . $_COOKIE['lastname'] . '<br><br>';

    // echo array cookies
    if (isset($_COOKIE['cookie'])) {
        foreach ($_COOKIE['cookie'] as $key => $val) {
            echo '<strong>' . $key . '</strong>' . ' is ' . $val . '<br>';
        }
    }
?>