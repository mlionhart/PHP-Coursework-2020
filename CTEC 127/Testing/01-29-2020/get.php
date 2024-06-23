<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Get me some!</title>
</head>
<body>
    <?php

        if (isset($_GET['customer'])) {
            $customer = $_GET['customer'];
        } else {
            $customer = 'prospective customer!';
        }

        if (isset($_GET['product'])) {
            $product = $_GET['product'];
        } else {
            $product = '';
        }
    ?>

    <p>Hello, <?php echo $customer; ?> &nbsp;Welcome to our great site!</p>

    <?php 

        switch ($variable) {
            case 'value':
                # code...
                break;
            
            default:
                # code...
                break;
        }

        switch ($product) {
            case 'frog':
                echo "<img src=\"https://image.shutterstock.com/image-vector/cute-frog-cartoon-260nw-366900380.jpg\">";
                break;
            case 'kyle':
                echo "<img src=\"https://vignette.wikia.nocookie.net/southpark/images/9/95/Kyle-broflovski.png/revision/latest?cb=20190411033301\">";
                break;
            case 'penguin':
                echo "<img src=\"https://assets.bwbx.io/images/users/iqjWHBFdfxIU/iKIWgaiJUtss/v2/1000x-1.jpg\">";
                break;
        }
    ?>
</body>
</html>