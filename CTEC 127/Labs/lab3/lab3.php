<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/lab3.css">
    <title>Lab 3</title>
</head>
<body>
    <?php 
        $errors = "";        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['name'])) {
                $name = $_POST['name'];
            } else {
                $errors .= "<p><strong>Please enter a name</strong></p>";
            }

            if (!empty($_POST['favfood'])) {
                $favFood = $_POST['favfood'];
            } else {
                $errors .= "<p><strong>Please enter your favorite food</strong></p>";
            }

            if (!empty($_POST['income']) && is_numeric($_POST['income'])) {
                $income = $_POST['income'];
            } else {
                $errors .= "<p><strong>Please enter a valid income</strong></p>";
            }

            if (!empty($_POST['comments'])) {
                $comments = $_POST['comments'];
            } else {
                $errors .= "<p><strong>Please enter some comments</strong></p>";
            }
        }
    ?>

    <h1>Please Fill Out Every Field</h1>
    <form method="post" action="lab3.php">
        <p>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" 
            value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>">
        </p>
        <p>
            <label for="favfood">Favorite Food:</label>
            <input type="text" name="favfood" id="favfood"
            value="<?php if(isset($_POST['favfood'])) echo $_POST['favfood'];?>">
        </p>
        <p>
            <label for="income">Income:</label>
            <input type="text" name="income" id="income"
            value="<?php if(isset($_POST['income'])) echo $_POST['income'];?>">
        </p>
        <p>
            <label for="comments">Comments:</label>
            <textarea name="comments" id="comments" cols="30" rows="10"><?php if(isset($_POST['comments'])) echo $_POST['comments']; ?></textarea>
        </p>
    <input type="submit" value="Submit" class="btn btn-danger">
    <?php 
        echo "<div id=\"errorbox\">";
        echo $errors;
        echo "</div>";
    ?>
</form>
</body>
</html>