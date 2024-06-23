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

    // function 1 - returns whether request method is a post or not
    if (is_post_request()) {
        echo "<p>Function 1:  Yes it is a post";
    } else {
        echo "<p>Function 1:  Nope it's not a post";
    }

    // Function 2 - returns whether request method is a get or not
    if (is_get_request()) {
        echo "<p>Function 2:  Yes it's a get request";    }

    // function 3 - converts certain characters into html entities
    echo '<p>' . h("Function 3:  Mike likes pizza & brownies. This function is not working!!!");

    // function 4 - url encodes a string - useful for passing query parameters
    echo '<p>Function 4: ' . u('http://mike.is.good/index.html?product=wig');

    // function 5 - url-encodes according to RFC 3986 (encodes spaces as a percent instead of a plus sign)
    echo '<p>Function 5: ' . raw_u('http://mike.is.good/index.html?product=wig');

    // function 6 - determines if value is completely blank (not even 0, which empty() allows)
    $pocket = "pocket";
    if (is_blank($pocket)) {
        echo "<p>Function 6: yes, the value is blank";
    } else {
        echo "<p>Function 6: No, the value is not blank";
    }

    // function 7 - determines if value is present (opposite of is_blank())
    $emptyString = "";
    if (has_presence($emptyString)) {
        echo '<p>Function 7: Yes, there is a value present';
    } else {
        echo '<p>Function 7: No, there is no value present';
    }

    // function 8 - determines if value (the first parameter) has a length greater than a specified number (the second parameter)
    $string1 = 'value';
    $minimumLength = 4;
    if (has_length_greater_than($string1, $minimumLength)) {
        echo "<p>Function 8: Yes, the string is longer than {$minimumLength} characters long";
    } else {
        echo "<p>Function 8: No, the string is not longer that {$minimumLength} characters long";
    }

    // function 9 - determines if value (the first parameter) has a length less than a specified number (the second parameter)
    $string2 = 'Mike likes the color red';
    $maximumLength = 6;
    if (has_length_less_than($string2, $maximumLength)) {
        echo "<p>Function 9: Yes, the string is shorter than {$maximumLength} characters long";
    } else {
        echo "<p>Function 9: No, the string is not shorter that {$maximumLength} characters long";
    }

    // function 10 - determines if value (the first parameter) has a length exactly the same as the specified number (the second parameter)
    $string3 = "Hello, Bruce. I hope you are doing well, and not burned out";
    $stringLength = 59;
    if (has_length_exactly($string3, $stringLength)) {
        echo "<p>Function 10: Yes, the string " . '"' . $string3 . '"' .  " has a length exactly {$stringLength} characters long";
    } else {
        echo "<p>Function 10: No, the string " . '"' . $string3 . '"' .  " does not have a length exactly {$stringLength} characters long";
    }

    // function 11 - combines the last three functions into one
    if (has_length($string3, ['min' => 58, 'max' => 560])) {
        echo "<p>Function 11: Yes the string has a length greater than 58 characters and less than 560 characters";
    };

    // function 12 - checks array for value
    $value = 3;
    $set = [1,2,3,4,5];
    if (has_inclusion_of($value, $set)) {
        echo "<p>Function 12: Yes, {$value} is included in the array";
    }

    // function 13 - checks if value is NOT in the array
    if (has_exclusion_of($value, $set)) {
        echo "<p>Function 13: Yes, {$value} is included in the array";
    } else {
        echo "<p>Function 13: No, {$value} is excluded from the array";
    }

    // function 14 - Validates inclusion of certain characters
    $value = "Mike Hart";
    $required_string = 'Mike';

    if (has_string($value, $required_string)) {
        echo "<p>Function 14: yes it is there";
    } else {
        echo "<p>Function 14: no, it is not there";
    }

    // function 15 - validates correct format for email addresses
    $mike = 'mike@@hart.com';
    if(has_valid_email_format($mike)) {
        echo '<p>Function 15:  Email is valid';
    } else {
        echo '<p>Function 15:  Email is invalid';
    }


    // Function 16 - displays errors
    echo display_errors(
        ["First name must be filled in", 
        "Last name must be filled in",
        "City must be filled in",
        "State must be filled in",
        "This was a good exercise, Bruce, and good practice. Hope you're having a good day." ]
    );

    ?>
</body>
</html>