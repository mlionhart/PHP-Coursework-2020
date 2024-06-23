<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sticky Radio</title>
</head>
<body>
    <?php
        # define two variables
        # If you want to make one of them checked by default set it's value to checked 
        $yes = '';
        $no = '';
        $db_value = 0;

        # if we have a POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            # did the user click on yes
            if ($_POST['like'] == 'yes') {
                $yes = 'checked'; # set $yes to checked
                $db_value = 1;
            } elseif ($_POST['like'] == 'no') { # did the user click on no
                $no = 'checked'; # set $no to checked
                $db_value = 0;
            }
        } 

        # Create a new connection to the database
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'ctec';

        $db = new mysqli($host, $username, $password, $database);

        $db->set_charset('utf8');

        $sql = "INSERT INTO radio_test (radio_value)
        VALUES ($db_value)";

        $db->query($sql);
        
    ?>

    <h1>A Sticky Radio Button</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <fieldset>
            <legend>Do you like pizza?</legend>
            <!-- Note the use of the php code at the end of each input -->
            <label for="yes">
                <input type="radio" name="like" value="yes" id="yes" <?php echo $yes; ?>>
                Yes
            </label>
            <label for="no">
                <input type="radio" name="like" value="no" id="no" <?php echo $no; ?>>
                No
            </label>
        </fieldset>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>