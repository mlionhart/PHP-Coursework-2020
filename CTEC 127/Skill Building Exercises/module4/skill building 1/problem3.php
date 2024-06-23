<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Problem 3</title>
</head>
<body>
    <?php
    // Rewrite problem 2 but this time, do not display the HTML from the function but rather use string concatenation to return the HTML back to the calling statement.

    function displayArray($myArray) {
        $container = '';
        $container .= "<ol>";
        for ($i=0; $i < count($myArray); $i++) { 
            $container .= "<li>$myArray[$i]</li>";
        }
        $container .= "</ol>";
        return $container;
    }

    // Be sure to include the function and a line of PHP that calls the function with the array definition and the parameter.
    $names = ['Mike', 'Dan', 'Ken', 'Sherry', 'Dean', 'Ruth', 'Diane', 'Genie', 'Bud', 'Charles'];
    echo displayArray($names);

    ?>
    
</body>
</html>
