<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/project.css">
    <title>Mod 4 Exercise 3</title>
</head>
<body>
    <?php include "includes/inc_vars.php"; ?>
    <img src="images/banner.png" alt="Banner Image">
    <?php 
    // check for vars
    $errors_flag = False;
    $errors_count = 0;
    $people_count = 0;
    $errors = "";
    
    // If people variable is included in the URL
    if (isset($_GET['people'])) {
        // If the variable meets the constraints
        if ($_GET['people'] > 0 && $_GET['people'] <=10) {
            // Set a variable to use in the code to display the people
            $people_count = $_GET['people'];
        // else it’s not correct
        } else {
            /* Use the compound assignment operator to include an error
            Set a flag to let the for loop know that we can’t process the people array since we have an error */
            $errors .= "<p><strong>Error:</strong> Please include the number of people to display from 1-10.</p>";
            $errors_flag = True;
            // Increment the variable keeping track of the number of errors
            $errors_count++;
        }
    }
    // Else the parameter wasn’t part of the URL
    else {
        /* Use the compound assignment operator to include an error
        Set a flag to let the for loop know that we can’t process the people array since we have an error */
        $errors .= "<p><strong>Error! People parameter not found!</strong> A parameter to display the number of people to display";
        $errors_flag = True;
        // Increment the variable keeping track of the number of errors
        $errors_count++;
    } // End If

    // If avatars variable is included in the URL
    if (isset($_GET['avatars'])) {
        // If the variable meets the constraints
        if ($_GET['avatars'] == "y" || $_GET['avatars'] == ('n')) {
            // Set a variable to use in the code to display the people
            $avatars_display = $_GET['avatars'];
        // else it’s not correct
        } else {
            /* Use the compound assignment operator to include an error
            Set a flag to let the for loop know that we can’t process the people array since we have an error */
            $errors .= "<p><strong>Error!  Avatars parameter not found! </strong> Please include a value of yes (y) or no (n).</p>";
            $errors_flag = True;
            // Increment the variable keeping track of the number of errors
            $errors_count++;
        }
    }
    // Else the parameter wasn’t part of the URL
    else {
        /* Use the compound assignment operator to include an error
        Set a flag to let the for loop know that we can’t process the people array since we have an error */
        $errors .= "<p><strong>Error!  Avatars parameter not found! </strong> Please include a value of yes (y) or no (n).</p>";
        $errors_flag = True;
        // Increment the variable keeping track of the number of errors
        $errors_count++;
    } // End If

    // If bios variable is included in the URL
    if (isset($_GET['bios'])) {
        // If the variable meets the constraints
        if ($_GET['bios'] == "y" || $_GET['bios'] == ('n')) {
            // Set a variable to use in the code to display the people
            $bios_display = $_GET['bios'];
        // else it’s not correct
        } else {
            /* Use the compound assignment operator to include an error
            Set a flag to let the for loop know that we can’t process the people array since we have an error */
            $errors .= "<p><strong>Error!  Bios parameter not found! </strong> Please include a value of yes (y) or no (n).</p>";
            $errors_flag = True;
            // Increment the variable keeping track of the number of errors
            $errors_count++;
        }
    }
    // Else the parameter wasn’t part of the URL
    else {
        /* Use the compound assignment operator to include an error
        Set a flag to let the for loop know that we can’t process the people array since we have an error */
        $errors .= "<p><strong>Error!  Bios parameter not found! </strong> Please include a value of yes (y) or no (n).</p>";
        $errors_flag = True;
        // Increment the variable keeping track of the number of errors
        $errors_count++;
    } // End If

    if ($errors_flag) {
        echo "<div id=\"errors\">";
        echo "<h2>There are $errors_count error(s)</h2>";
        echo $errors . "</div>";
    }

    echo "<div id=\"wrapper\">";
    echo "<div class=\"people\">";

    // Display all if there are no errors
    if (!$errors_flag) {
        for ($i=0; $i < $people_count; $i++) { 
            echo "<div class\"row\">";
            echo "<div>";
            if ($avatars_display == 'y') {
                echo "<div class=\"avatars\" src=\"images/" . $avatars[$i] . "\" alt=\"avatar\" />";
            }

            echo "<br><strong>" . $people[$i] . "</strong>";

            if ($bios_display == 'y') {
                $positiontitle = strpos($bios[$i], " /");
                $positiontitle = substr($bios[$i], 0, $positiontitle);
                echo "<br>" . $positiontitle;

                $position = strrchr($bios[$i], " /");
                echo "<br>" . strchr($position, " ");
            }

            echo "</div>";
            echo "</div>";
        } // end for

    } // end if

    echo "</div>"; // end of people div
    echo "</div>"; // end of wrapper div


    
    ?>
</body>
</html>