<?php 
    // set cookies
    setcookie('username', 'BettyW', time() + 7200);
    setcookie('firstname', 'Betty', time() + 7200);
    setcookie('lastname', 'White', time() + 7200);

    // set array cookies
    setcookie("cookie[institution]", "Clark", time() + 7200);
    setcookie("cookie[city]", "Vancouver", time() + 7200);
    setcookie("cookie[state]", "WA", time() + 7200);
?>