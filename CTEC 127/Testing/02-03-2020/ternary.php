<?php 

$var1 = 'keto';

echo $var1 == 'keto' ? 'I like to eat turtles' : 'I do not like turtles';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="">
        First Name <input type="text" value="<?php echo !empty($_POST['first']) ? $_POST['first'] : ''; ?>">
        <input type="submit" value="Submit">
    </form>

    <?php 
        $var2 = 'regina';

        $var3 = $var2 == 'regina' ? "yes she is the criminal" : "Bruce is the criminal";
    ?>
    
</body>
</html>


