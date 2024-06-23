<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Feedback for Project 1</title>
</head>
<body>
    <?php

        /* ---------- Form One Processing ---------- */

        // check if correct submit button was clicked
        if (isset($_POST['form1'])) {
            // check if name field is filled in
            if (!empty($_POST['name'])) {
                // if so, assign it to a variable
                $name = $_POST['name'];
            } else {
                // if not, nullify variable and echo message to browser
                $name = NULL;
                echo "<p>Please enter a valid name</p>";
            }
    
            // check if address field is filled in
            if (!empty($_POST['address'])) {
                // if so, assign it to a variable
                $address = $_POST['address'];
            } else {
                // if not, nullify variable and echo message to browser
                $address = NULL;
                echo "<p>Please enter a valid address</p>";
            }
            
            // check if city field is filled in
            if (!empty($_POST['city'])) {
                // if so, assign it to a variable
                $city = $_POST['city'];
            } else {
                // if not, nullify variable and echo message to browser
                $city = NULL;
                echo "<p>Please enter a valid city</p>";
            }
    
            // check if zip field is filled in
            if (!empty($_POST['zip']) && is_numeric($_POST['zip'])) {
                // if so, assign it to a variable
                $zip = $_POST['zip'];
            } else {
                // if not, nullify variable and echo message to browser
                $zip = NULL;
                echo "<p>Please enter a valid zip</p>";
            }
        }


        /* ---------- Form Two Processing ---------- */

        // check if correct submit button was clicked
        if (isset($_POST['form2'])) {
            // check if food field is filled in
            if (!empty($_POST['food'])) {
                // if so, assign it to a variable
                $food = $_POST['food'];
            } else {
                // if not, nullify variable and echo message to browser
                $food = NULL;
                echo "<p>Please enter a valid food</p>";
            }
    
            // check if animal field is filled in
            if (!empty($_POST['animal'])) {
                // if so, assign it to a variable
                $animal = $_POST['animal'];
            } else {
                // if not, nullify variable and echo message to browser
                $animal = NULL;
                echo "<p>Please enter a valid animal</p>";
            }
            
            // check if dessert field is filled in
            if (!empty($_POST['dessert'])) {
                // if so, assign it to a variable
                $dessert = $_POST['dessert'];
            } else {
                // if not, nullify variable and echo message to browser
                $dessert = NULL;
                echo "<p>Please enter a valid dessert</p>";
            }
    
            // check if penorpencil field is filled in
            if (isset($_POST['penorpencil'])) {
                // if so, assign it to a variable
                $penorpencil = $_POST['penorpencil'];
            } else {
                // if not, nullify variable and echo message to browser
                $penorpencil = NULL;
                echo "<p>Please select a writing utensil</p>";
            }
        }

        /* ---------- Form Three Processing ---------- */

        // check if correct submit button was clicked
        if (isset($_POST['form3'])) {
            // check if a flavor is selected
            if ($_POST['flavor'] != '-') {
                // if so, assign it to a variable
                $flavor = $_POST['flavor'];
            } else {
                // if not, nullify varible and echo message to browser
                $flavor = NULL;
                echo "<p>Please select a flavor</p>";
            }
        }


    ?>
</body>
</html>