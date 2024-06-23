<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 7</title>
</head>
<body>
    <?php
    require_once 'inc/ctec_functions.php';
    // if (is_post_request()) {
    //     echo "<p>Yes it is a post";
    // } else {
    //     echo "<p>Nope it\'s not a post";
    // }

    // if (is_get_request()) {
    //     echo "<p>Yes it\'s a get request";
    // }

    // echo '<p>' . h('Mike likes pizza');

    // echo '<p>' . u('http://mike.is.good/index.html?product=wig');

    // echo '<p>' . raw_u('http://mike.is.good/index.html?product=wig');

    // $mike = 'mike@@hart.com';

    // if(has_valid_email_format($mike)) {
    //     echo '<p>Email is valid';
    // } else {
    //     echo '<p>Email is invalid';
    // }

    // $value = "Mike Hart";
    // $required_string = 'Mike';

    // if (has_string($value, $required_string)) {
    //     echo "<p>yes it is there";
    // } else {
    //     echo "<p>no, it is not there";
    // }

    // if folder doesn't exist, create it
    has_folder('mike');

    ?>
</body>
</html>