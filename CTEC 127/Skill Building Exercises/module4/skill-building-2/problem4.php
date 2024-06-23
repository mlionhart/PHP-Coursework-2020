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
    // Given the following array:
    $cars = array("Ford", "Chevy", "Mazda", "Honda", "Lexus", "Toyota");

    // Write a function that uses the $cars array passed to it as a parameter to generate the HTML for a set of radio buttons. Do not echo the HTML code out within the function. Simply build a string of HTML that gets returned to the caller and then echos it out.
    function generate_radio_buttons($items) {
        $container = "";
        for ($i=0; $i < count($items); $i++) { 
            $container .= "<input type=\"radio\" id=\"$items[$i]\"><label for=\"$items[$i]\">$items[$i]</label>";
        }
        return $container;
    }

    // Call function using $cars array
    echo generate_radio_buttons($cars);
    ?>
</body>
</html>