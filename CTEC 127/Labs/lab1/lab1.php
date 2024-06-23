<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Lab No. 1</title>
</head>
<body>
<?php 
/*
INSTRUCTIONS:
=============
1) Create the follow variables and assign them the values asked for

$firstName - a string with your first name
$lastName - a string with your last name
$degreeProgram - a string with your degree program at Clark
$skills - an array containing a list of 5 of your web development skills
$courses - an array containing a list of 5 courses that you have taken at clark. Including the course number and the title
$gender - Set this variable to either the string male or female

2) Using echo, emmit an h1 tag along with the $firstName and $lastName variables

3) Using echo, emmit an h4 tag along with the $degreeProgram variable

4) Using the $gender variable, use an if statement to selected one of images in the img folder, display it using echo. The graphic file names are male_head.jpg and female_head.jpg respectively. Make to sure to include the alt attribute and a value.

5) Using echo, emmit an h2 tag along with the words "Courses I Have Taken"

6) Using PHP and the $courses variable, emmit an unordered list containing the course you have taken using a for loop

7) Using echo, emmit an h2 tag along with the words "Web Development Skills"

8) Using PHP and the $skills variable, emmit an unordered list containing the course you have taken using a foreach loop

9) Make sure that HTML your PHP code produces is valid using the HTML Validation Services http://validator.w3.org

10) ZIP up the lab-1 folder and submit it on Canvas
*/

// YOUR CODE GOES BELOW HERE

// $firstName - a string with your first name
$firstName = "Mike";

// $lastName - a string with your last name
$lastName = "Hart";

// $degreeProgram - a string with your degree program at Clark
$degreeProgram = "Web Development";

// $skills - an array containing a list of 5 of your web development skills
$skills = ['HTML', 'CSS', 'JavaScript', 'JQuery', 'UX Design'];

// $courses - an array containing a list of 5 courses that you have taken at clark. Including the course number and the title
$courses = ['CTEC 122 - HTML Fundamentals', 'CTEC 126 - Javascript', 'CTEC 160 - WordPress', 'DMA 101 - Photoshop Raster Graphics', 'CTEC 135 - Software Development w/ C#'];

// $gender - Set this variable to either the string male or female
$gender = 'Male';

// 2) Using echo, emmit an h1 tag along with the $firstName and $lastName variables
echo "<h1>$firstName $lastName</h1>";

// 3) Using echo, emmit an h4 tag along with the $degreeProgram variable
echo "<h4>$degreeProgram</h4>";

// 4) Using the $gender variable, use an if statement to selected one of images in the img folder, display it using echo. The graphic file names are male_head.jpg and female_head.jpg respectively. Make to sure to include the alt attribute and a value.
if ($gender == 'Male') {
    echo "<img src=\"img/male_head.jpg\" alt=\"picture of male head\">";
} else {
    echo "<img src=\"img/female_head.jpg\" alt=\"picture of female head\">";
}

// 5) Using echo, emmit an h2 tag along with the words "Courses I Have Taken"
echo "<h2>Courses I Have Taken</h2>";

// 6) Using PHP and the $courses variable, emmit an unordered list containing the course you have taken using a for loop
echo "<ul>";
for ($i=0; $i < count($courses); $i++) { 
    echo "<li>$courses[$i]</li>";
}
echo "</ul>";

// 7) Using echo, emmit an h2 tag along with the words "Web Development Skills"
echo "<h2>Web Development Skills</h2>";

// 8) Using PHP and the $skills variable, emmit an unordered list containing the course you have taken using a foreach loop
echo "<ul>";
foreach ($skills as $i) {
    echo "<li>$i</li>";
}
echo "</ul>";
// YOUR CODE ENDS HERE
?>


<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>