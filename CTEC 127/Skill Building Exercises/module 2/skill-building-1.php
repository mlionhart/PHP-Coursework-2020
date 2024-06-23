<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/skill-building-1.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Skill Building Exercise 1</title>
</head>
<body>
    <h1>Skill Building Exercise 1</h1>
    <h2>Problem 1</h2> <!-- Problem 1 -->
    <form action="POST">
        <label for="powerlevel">Select Your Power Level: &nbsp;</label>
        <select name="powerlevel" id="powerlevel" style="">
            <?php
                for ($i=2; $i <= 100 ; $i++) { 
                    echo "<option>$i</option>";
                }
            ?>
        </select>
    </form>

    <div id="content"></div> <!-- end of problem 1 -->

    <h2>Problem 2</h2> <!-- Problem 2 -->
    <?php
        $letterArray = range('a', 'z');
        $i = $letterArray[0];
        while ($i != 'q') {
            echo $i++;
        }
        echo "<p>Thanks, I needed that break.";
    ?> <!-- End of Problem 2 -->

    <h2>Problem 3</h2> <!-- Problem 3 -->
    <?php
        echo "<table class='table table-bordered'><tr>";
        for ($i = 1; $i <= 7; $i++) {
            for ($j = 1; $j <= 7; $j++) {                
               echo "<td>" . $i * $j . "</td>";
            }
            echo "</tr><tr>";
        }
        echo "</table>";
    ?> <!-- End of Problem 3 -->

   <script src="js/skill-building-1.js"></script>

   <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>