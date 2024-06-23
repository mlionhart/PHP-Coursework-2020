<?php // Filename: create-record.php
$pageTitle = "Create Record";
?>

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

<div class="container">
	<div class="row mt-5">
		<div class="col-lg-12">
			<h1>Create a New Record</h1>
			<?php // Filename: connect.inc.php

                

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
                

                $error_bucket = [];
                $yes = '';
                $no = '';
                $finaid = '';
                $degree_program = '';


                // http://php.net/manual/en/mysqli.real-escape-string.php

                if($_SERVER['REQUEST_METHOD']=="POST"){
                    // First insure that all required fields are filled in
                    if (empty($_POST['first'])) {
                        array_push($error_bucket,"<p>A first name is required.</p>");
                    } else {
                        # Old way
                        #$first = $_POST['first'];
                        # New way
                        $first = $db->real_escape_string($_POST['first']);
                    }
                    if (empty($_POST['last'])) {
                        array_push($error_bucket,"<p>A last name is required.</p>");
                    } else {
                        #$last = $_POST['last'];
                        $last = $db->real_escape_string($_POST['last']);
                    }
                    if (empty($_POST['id'])) {
                        array_push($error_bucket,"<p>A student ID is required.</p>");
                    } else {
                        #$id = $_POST['id'];
                        $id = $db->real_escape_string($_POST['id']);
                    }
                    // GPA field
                    if (empty($_POST['gpa'])) {
                        array_push($error_bucket,"<p>A GPA is required.</p>");
                    } else {
                        #$email = $_POST['email'];
                        $gpa = $db->real_escape_string($_POST['gpa']);
                    }
                    // Financial aid radio buttons
                    // if (isset($_POST['finaid'])) {
                    //     $finaid = "Yes";
                    //     $yes = 'checked';
                    //     $no = 'checked';
                    //     // $finaid = NULL;
                    //     // get value of radio and make sticky
                    //     // $finaid = '';
                    //     // if($_POST['finaid'] == '1') {
                    //     //     $yes = 'checked';
                    //     //     $no = '';
                    //     // } elseif ($_POST['finaid'] == '0') {
                    //     //     $no = 'checked';
                    //     //     $yes = '';
                    //     // }
                    // } else {
                    //     array_push($error_bucket, "<p>Please select whether you have financial aid</p>");
                    // }
                    // Degree program select
                    if ($_POST['degree_program'] == '-') {
                        array_push($error_bucket, "<p>Please select a degree program</p>");
                    } else {
                        $degree_program = $db->real_escape_string($_POST['degree_program']);
                    }
                    if (empty($_POST['email'])) {
                        array_push($error_bucket,"<p>An email address is required.</p>");
                    } else {
                        #$email = $_POST['email'];
                        $email = $db->real_escape_string($_POST['email']);
                    }
                    if (empty($_POST['phone'])) {
                        array_push($error_bucket,"<p>A phone number is required.</p>");
                    } else {
                        #$phone = $_POST['phone'];
                        $phone = $db->real_escape_string($_POST['phone']);
                    }

                    // If we have no errors than we can try and insert the data
                    if (count($error_bucket) == 0) {
                        // Time for some SQL
                        $sql = "INSERT INTO $db_table (first_name,last_name,student_id,email,phone,gpa,financial_aid,degree_program) ";
                        $sql .= "VALUES ('$first','$last',$id,'$email','$phone','$gpa','$finaid','$degree_program')";

                        // comment in for debug of SQL
                        // echo $sql;

                        $result = $db->query($sql);
                        if (!$result) {
                            echo '<div class="alert alert-danger" role="alert">
                            I am sorry, but I could not save that record for you. ' .  
                            $db->error . '.</div>';
                        } else {
                            echo '<div class="alert alert-success" role="alert">
                            I saved that new record for you!
                        </div>';
                            unset($first);
                            unset($last);
                            unset($id);
                            unset($email);
                            unset($phone);
                            unset($gpa);
                            unset($degree_program);
                            unset($finaid);
                            // unset($yes);
                            // unset($no);
                        }
                    } else {
                        display_error_bucket($error_bucket);
                    }
                }

                ?>

                <!-- Note the use of sticky fields below -->
                <!-- Note the use of the PHP Ternary operator
                Scroll down the page
                http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary
                -->
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <label class="col-form-label" for="first">First Name </label>
                    <input class="form-control" type="text" id="first" name="first" value="<?php echo (isset($first) ? $first: '');?>">
                    <br>
                    <label class="col-form-label" for="last">Last Name </label>
                    <input class="form-control" type="text" id="last" name="last" value="<?php echo (isset($last) ? $last: '');?>"">
                    <br>
                    <label class="col-form-label" for="id">Student ID </label>
                    <input class="form-control" type="text" id="id" name="id" value="<?php echo (isset($id) ? $id: '');?>"">
                    <br>
                    <label class="col-form-label" for="gpa">GPA </label>
                    <input class="form-control" type="text" id="gpa" name="gpa" value="<?php echo (isset($gpa) ? $gpa: '');?>"">
                    <br>
                    <label class="col-form-label">Financial Aid?</label>
                    <br>
                    <input type="radio" id="finaidyes" name="finaid" value="1" <?php echo $yes; ?>>
                    <label class="col-form-label" for="finaidyes"> Yes</label>
                    <br>
                    <input type="radio" id="finaidno" name="finaid" value="0" <?php echo $no; ?>>
                    <label class="col-form-label" for="finaidno"> No</label>
                    <br><br>
                    <label class="col-form-label" for="degree_program">Degree Program </label>
                    <select name="degree_program" id="degree_program" class="custom-select">
                        <option value="-"<?php if($degree_program == "-") echo ' selected="selected"'; ?>> -- Select a Degree Program -- </option>
                        <option value="webdev"<?php if($degree_program == "webdev") echo ' selected="selected"'; ?>>Web Development</option>
                        <option value="compsci"<?php if($degree_program == "compsci") echo ' selected="selected"'; ?>>Computer Science</option>
                        <option value="compsupport"<?php if($degree_program == "compsupport") echo ' selected="selected"'; ?>>Computer Support</option>
                        <option value="art"<?php if($degree_program == "art") echo ' selected="selected"'; ?>>Art</option>
                        <option value="music"<?php if($degree_program == "music") echo ' selected="selected"'; ?>>Music</option>
                    </select>
                    <br><br>
                    <label class="col-form-label" for="email">Email </label>
                    <input class="form-control" type="text" id="email" name="email" value="<?php echo (isset($email) ? $email: '');?>"">
                    <br>
                    <label class="col-form-label" for="phone">Phone </label>
                    <input class="form-control" type="text" id="phone" name="phone" value="<?php echo (isset($phone) ? $phone: '');?>"">
                    <br>
                    <a href="display-records.php">Cancel</a>&nbsp;&nbsp;
                    <button class="btn btn-primary" type="submit">Save Record</button>
                </form>
		</div>
    </div>
</div>
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