<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skill Building Exercise 4</title>
</head>
<body>
    <h1 style="text-align:center";>Skill Building Exercise 4</h1>
    <h2>Problem 1</h2>
    <?php
    // for loop
    echo "<p><strong>For Loop:</strong></p>";
    $students = ['Joe', 'Sam', 'Ted', 'Gayle', 'Alie', 'Amy'];
    for ($i=0; $i < count($students); $i++) { 
        echo $students[$i] . "<br>";
    }  
    
    // foreach loop
    echo "<p><strong>Foreach Loop:</strong></p>";
    foreach ($students as $i) {
        echo $i . "<br>";
    }
    ?> <!-- End of Problem 1 -->

    <h2>Problem 2</h2>
    <?php
        $students = [940 => "Sam", 930 => "Tom", 942 => "Reji", 100 => "Bob"];

        // looping through array with for loop
        echo "<p><strong>Looping with for loop:</strong></p>";
        $studentId = array_keys($students);
        $studentName = array_values($students);
        for ($i=0; $i < count($students); $i++) { 
            echo "<p>Student ID: $studentId[$i] - Student Name: $studentName[$i]";
        }

        // looping through array with foreach loop
        echo "<p><strong>Looping with foreach loop:</strong></p>";
        foreach ($students as $studentId => $studentName) {
            echo "<p>Student ID: $studentId - Student Name: $studentName";
        }

    ?>
</body>
</html>