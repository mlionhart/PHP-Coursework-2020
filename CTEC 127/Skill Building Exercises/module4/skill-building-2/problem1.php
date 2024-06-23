<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Problem 1</title>
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
    
    // Write a PHP code snippet that populates a SELECT tag with options from the $cars array. A form and submit button are not needed.
    echo "<select>";
    for ($i=0; $i < count($cars); $i++) { 
        echo "<option value=\"$cars[$i]\">$cars[$i]</option>";
    }
    echo "</select>";
    ?>
</body>
</html>