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
    /* ----------- Problem 3 Answers ------------ */
    
    // I'm not sure what you mean by including code snippets.  
    
    // These answers were straight from my week 1 notes - not from Google:

    // isset() checks to see if a variable is declared and not NULL.

    // empty() checks to see if variable is empty (examples of empty are: "", array(), and 0) 

    /* ----------- End of Problem 3 Answers ------------ */

    // Given the following array:
    $cars = array("Ford", "Chevy", "Mazda", "Honda", "Lexus", "Toyota");

    // Rewrite Problem 1 by passing the $cars variable to a function named displayCarsNew($items). The function should build a string that is returned which contains all of the HTML which is then to be echoed. DO NOT echo the HTML out within the function.
    function displayCarsNew($items) {
        $container = "";
        $container .= "<select>";
        for ($i=0; $i < count($items); $i++) { 
            $container .= "<option value=\"$items[$i]\">$items[$i]</option>";
        }
        $container .= "</select>";
        return $container;
    }

    // Include a statement that calls the function with the $cars variable.
    echo displayCarsNew($cars);
    ?>
</body>
</html>