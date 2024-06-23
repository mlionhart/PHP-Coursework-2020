<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Problem 2</title>
</head>
<body>
    <?php
    // A function named displayArray() that takes one parameter. The parameter should be a single dimensional array with 10 numbers.
    function displayArray($array) {
        // The function should then take that array and display its contents as an ordered list.
        echo "<ol>";
        for ($i=0; $i < count($array); $i++) { 
            echo "<li>$array[$i]</li>";
        }
        echo "</ol>";
    }

    // Be sure to include the function and a line of PHP that calls the function with the array definition and the parameter.
    $names = ['Mike', 'Dan', 'Ken', 'Sherry', 'Dean', 'Ruth', 'Diane', 'Genie', 'Bud', 'Charles'];
    displayArray($names);
    ?>
    
</body>
</html>
