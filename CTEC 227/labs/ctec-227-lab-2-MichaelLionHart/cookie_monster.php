<?php 
    // delete cookies
    setcookie("username", "", time() - 36000);
    setcookie("firstname", "", time() - 36000);
    setcookie("lastname", "", time() - 36000);

    // delete array cookies
    setcookie('cookie[institution]', "", time() - 36000);
    setcookie('cookie[city]', "", time() - 36000);
    setcookie('cookie[state]', "", time() - 36000);
?>