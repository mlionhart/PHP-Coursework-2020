<?php $pageTitle = "Search Records"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
<?php // Filename: config.inc.php
    
// copyright
$app_copyright = '&copy; 2019 - Your Name';
// version
$app_version = 0.1;
// app name
$app_name = "Record Manager";
// database table name
$db_table = "student_v2";
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="display-records.php">CTEC 127</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="display-records.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create-record.php">Create Record</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Resources
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://ctec.clark.edu/CTEC122">CTEC 122 Resources</a>
          <a class="dropdown-item" href="http://php.net">PHP.net</a>
          <a class="dropdown-item" href="https://getbootstrap.com">Bootstrap</a>
        </div>
      </li>
    </ul>
    <form action="search-records.php" method="POST" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> 
<?php // Filename: mysqli_connect.inc.php

# Create a new connection to the database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'ctec';

$db = new mysqli(
	$host,
	$username,
	$password,
	$database
);

# If there was an error connecting to the database
if ($db->connect_error) {
	$error = $db->connect_error;
	echo $error;
} // end if

# Set the character encoding of the database connection to UTF-8
$db->set_charset('utf8');


function display_message(){
    if (isset($_GET['message'])) {
        $message = $_GET['message'];
        echo '<div class="mt-4 alert alert-success" role="alert">';
        echo $message;
        echo '</div>';
    }
}


function display_letter_filters($filter){  
    echo '<span class="mr-3">Filter by <strong>Last Name</strong></span>';
 
    $letters = range('A','Z');

    for($i=0 ; $i < count($letters) ; $i++){ 
        if ($filter == $letters[$i]) {
            $class = 'class="text-light font-weight-bold p-1 mr-3 bg-dark"';
        } else {
            $class = 'class="text-secondary p-1 mr-3 bg-light border rounded"';
        }
        echo "<u><a $class href='?filter=$letters[$i]' title='$letters[$i]'>$letters[$i]</a></u>";
    }
    echo '<a class="text-secondary p-2 mr-2 bg-success text-light border rounded" href="?clearfilter" title="Reset Filter">Reset</a>&nbsp;&nbsp;';
}


function display_record_table($result){
    echo '<div class="table-responsive">';
    echo "<table class=\"table table-striped table-hover table-sm mt-4\">";
    echo '<thead class="thead-dark"><tr><th>Actions</th><th><a href="?sortby=student_id">Student ID</a></th><th><a href="?sortby=first_name">First Name</a></th><th><a href="?sortby=last_name">Last Name</a></th><th><a href="?sortby=email">Email</a></th><th><a href="?sortby=phone">Phone</a></th><th><a href="?sortby=gpa">GPA</a></th><th><a href="?sortby=financial_aid">Financial Aid</a></th><th><a href="?sortby=degree_program">Degree Program</a></th></tr></thead>';
    # $row will be an associative array containing one row of data at a time
    while ($row = $result->fetch_assoc()){
        # display rows and columns of data
        echo '<tr>';
        echo "<td>Update&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"delete-record.php?id={$row['id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
        echo "<td>{$row['student_id']}</td>";
        echo "<td><strong>{$row['first_name']}</strong></td>";
        echo "<td><strong>{$row['last_name']}</strong></td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['phone']}</td>";
        echo "<td>{$row['gpa']}</td>";
        echo "<td>{$row['financial_aid']}</td>";
        echo "<td>{$row['degree_program']}</td>";
        echo '</tr>';
    } // end while
    // closing table tag and div
    echo '</table>';
    echo '</div>';
}


function display_error_bucket($error_bucket){
    echo '<p>The following errors were deteced:</p>';
    echo '<div class="pt-4 alert alert-warning" role="alert">';
        echo '<ul>';
        foreach ($error_bucket as $text){
            echo '<li>' . $text . '</li>';
        }
        echo '</ul>';
    echo '</div>';
    echo '<p>All of these fields are required. Please fill them in.</p>';
}
?>
<?php // Filename: config.inc.php
    
// copyright
$app_copyright = '&copy; 2019 - Your Name';
// version
$app_version = 0.1;
// app name
$app_name = "Record Manager";
// database table name
$db_table = "student_v2";
?>


<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4">
        <?php 
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if(!empty($_POST['search'])){
                    $sql = "SELECT * FROM $db_table WHERE " . '"' . $_POST["search"] . '"' . " IN (student_id, first_name, last_name, email, phone, gpa, financial_aid, degree_program) ORDER BY last_name ASC";
                    // $sql = "SELECT * FROM student WHERE student_id LIKE '%val%' or field2 LIKE '%val%'
                    $result = $db->query($sql);

                    if ($result->num_rows == 0) {
                        echo "<p class=\"display-4 mt-4 text-center\">No results found for \"<strong>{$_POST['search']}</strong>\"</p>";
                        echo '<img class="mx-auto d-block mt-4" src="img/frown.png" alt="A sad face">';
                        echo "<p class=\"display-4 mt-4 text-center\">Please try again.</p>";
                        // echo "<h2 class=\"mt-4\">There are currently no records to display for <strong>last names</strong> starting with <strong>$filter</strong></h2>";
                    } else {
                        echo "<h2 class=\"mt-4 text-center\">$result->num_rows record(s) found for \"" . $_POST['search'] . '"</h2>';
                        display_record_table($result);
                    }
                } else {
                    echo "<p class=\"display-4 mt-4 text-center\">I can't search if you don't give<br>me something to search for.</p>";
                    echo '<img class="mx-auto d-block mt-4" src="img/nosmile.png" alt="A face with no smile">';
                }
            }
        ?>
        </div>
    </div>
</div>

<?php // Filename: footer.inc.php ?>
<div class="row">
    <div class="col-lg-12">
        <p class="text-center mt-4"><?php echo '<span class="font-weight-bold">' . $app_name . ' - Version ' . $app_version . "</span><br>" . $app_copyright;?></p>
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>