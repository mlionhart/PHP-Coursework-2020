<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Practice Project</title>
</head>
<body>
    <?php 
        // PHP Variables
        $student = "Michael Hart";
        $course = "CTEC 127 - PHP and SQL 1";
        $outcomes = ["Utilize different contextual information to determine and track application state, and set proper logical choices based on determinant information.", "Understand the basics of database design and manipulation in use with PHP and build a dynamic web-based application.", 
        "Reference and research resources for information and solutions regarding PHP.", "Demonstrate command of the PHP syntax and core programming elements."];
        $days = ['Monday from 10:30AM - 12:50PM','Wednesday from 10:30AM - 12:50PM'];
        $building = "Scarpelli Hall";
        $room = "125";
    ?>

    <div class="container bg-secondary pt-4">
        <div class="jumbotron mt-4">
            <h1 class="mb-4">Welcome, <?php echo $student . " to " . $course; ?></h1>
            <hr class="my-4">
            <h2>Course Description</h2>
            <p>This course is an introduction to the server-side programming language PHP and its use in creating dynamic web applications, providing students with a functional knowledge of database design, SQL statements, dynamic web applications, and the methods implemented in PHP for manipulating MySQL databases. Prerequisite: A grade of "C" or better in CTEC 112, CTEC 121 or CSE 121 and a grade of "C" or better in CTEC 122.</p>
        </div> <!-- End of Jumbotron -->

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 bg-warning p-4">
                <h2>Course Outcomes</h2>
                <ul>
                <?php 
                    foreach ($outcomes as $outcome) {
                        echo "<li>" . $outcome . "</li>"; // echoing each item in $outcomes array to the screen in the form of a list item
                    }
                ?>
                </ul>
            </div> <!-- end of column -->
            <div class="col-sm-12 col-md-12 col-lg-6 bg-success p-4">
                <h2>Days Class Meets On</h2>
                <ul>
                <?php 
                    foreach ($days as $day) {
                        echo "<li>" . $day . "</li>"; // echoing each item in the $days array to the screen in the form of a list item
                    }
                ?>
                </ul>
                <p>
                <?php 
                    echo 'The class is located in ' . $building . ', Room ' . $room . '.'; 
                ?> 
                </p>               
            </div>            
        </div> <!-- end of row -->
        <div class="row mb-4 mt-4 text-white">
                <div class="col-12">
                <h2>Meet Your Instructor - Bruce Elgort</h2>
                </div>
           </div>
        <div class="row pb-4 text-white">
           <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3">
                <img src="https://pbs.twimg.com/profile_images/1012000737289629698/Jx1uL9qf_400x400.jpg" alt="Bruce Elgort - College Instructor" width="200" class="rounded-circle mx-auto d-block">
            </div>
            <div class="col-sm-12 col-md-8 col-lg-9 col-xl-9 p-4">
                <p>You’ll find this technology professor – an award-winning instructor at Clark College – working hard to inspire and challenge his students with meaningful web development and programming experiences. With a skinny vanilla latte (no foam) in hand, Bruce loves to tinker and test the boundaries of existing and emerging technologies, to then guide hungry minds through memorable, educational journeys to showcase with passion the ever-evolving innovations of society. An industry leader, Bruce is known for co-developing Elguji’s IdeaJam software, and is recognized by IBM as an ‘IBM Champion’ for being an innovative thought leader in cloud technologies.</p>
            </div>
        </div>
    </div>



<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>