<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skill Building Exercise 3</title>
</head>
<body>
    <h1 style="text-align:center";>Skill Building Exercise 3</h1>
    <h2>Problem 1</h2>
    <?php
        $a = 1;
        $b = 42;
        $c = 99;

        if ($a == 1) { // check if $a == 1
            echo "It's a 1 for sure";
        } else { // if not
            if ($c == 99) { // check if $c == 99
                if ($b == 42) { // if so, check if $b == 42
                    echo "The answer to everything"; // if so, print message to screen
                }
            }
        }
    ?> <!-- End of Problem 1 -->

    <h2>Problem 2</h2>
    <?php
        $a = 0;
        $b = "";
        $c = NULL;

        // check if $d is set
        if (isset($d)) {
            echo $d;
        } else {
            echo "<p><strong>Test One: </strong>The variable is not set";
        }

        // check to see if $b is empty
        if (!empty($b)) {
            echo $b;
        } else {
            echo "<p><strong>Test Two: </strong>The variable is empty";
        }

        // Check to see if $c is null
        if (!is_null($c)) {
            echo $c;
        } else {
            echo "<p><strong>Test Three: </strong>The variable is NULL";
        }

    ?> <!-- End of problem 2 -->

</body>
</html>