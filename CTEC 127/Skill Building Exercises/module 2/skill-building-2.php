<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/skill-building-1.css">
    <title>Skill Building Exercise 2</title>
</head>
<body>
    <h1>Skill Building Exercise 2</h1>
    <h2>Part 1 - if/else-if/else Statement <span style="font-weight:lighter;color:red;">(Refresh the page to select a different food item)</span></h2>
    <p style="font-size:17px"></p>
    <?php
        $foods = ['Ham Sandwich', 'Turkey Sandwich', 'Veggie Sandwich', 'Pepperoni Pizza'];

        $random = rand(0, 3);

        if ($random == 0) {
            echo "Thanks for selecting a <strong>$foods[0]</strong> from our online menu ordering system. Your sandwich will be ready for pickup in 36 minutes.";
        } else if ($random == 1) {
            echo "Thanks for selecting a <strong>$foods[1]</strong> from our online menu ordering system. Your sandwich will be ready for pickup in 30 minutes.";
        } else if ($random == 2) {
            echo "Thanks for selecting a <strong>$foods[2]</strong> from our online menu ordering system. Your sandwich will be ready for pickup in 22 minutes.";
        } else {
            echo "<strong>I'm sorry but we did not understand your order correctly. Please go back and try again.";
        } 
    ?> <!-- End of part one --> 

    <h2>Part 2 - Switch <span style="font-weight:lighter;color:red;">(Refresh the page to select a different food item)</span></h2>
    <p style="font-size:17px"></p>
    <?php
        $foods = ['Ham Sandwich', 'Turkey Sandwich', 'Veggie Sandwich', 'Pepperoni Pizza'];

        $random = rand(0, 3);

        switch ($random) {
            case 0:
                echo "Thanks for selecting a <strong>$foods[0]</strong> from our online menu ordering system. Your sandwich will be ready for pickup in 36 minutes.";
                break;
            case 1:
                echo "Thanks for selecting a <strong>$foods[1]</strong> from our online menu ordering system. Your sandwich will be ready for pickup in 30 minutes.";
            case 2:
                echo "Thanks for selecting a <strong>$foods[2]</strong> from our online menu ordering system. Your sandwich will be ready for pickup in 22 minutes.";
            default:
                echo "<strong>I'm sorry but we did not understand your order correctly. Please go back and try again.";
                break;
        }
    ?>
</body>
</html>