<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Problem 4</title>
</head>
<body>
    <?php
    // A function named reversIt() that takes a string as a parameter and then reverses the string. The string should then be returned to the calling statement. There is a PHP function that can reverse a string for you. You will need to use this function in your function.
    function reverseIt($myString) {
        echo strrev($myString);
    }

    reverseIt("Mike is not going to procrastinate anymore!!!");
    ?>
    
</body>
</html>
