<?php 
    // Must come first - before Doctype - this will drop a cookie of the specific session ID
    session_start();

    $_SESSION['loggedin'] = 0;
    // echo $_SESSION['loggedin'];
?>
<!-- Link to page 2 -->
<a href="page2.php">Go To Page 2</a>