<?php // Filename: search-records.php

$pageTitle = "Search Records";
require_once 'inc/layout/header.inc.php';
require_once 'inc/db/mysqli_connect.inc.php';
require_once 'inc/functions/functions.inc.php';
require_once 'inc/app/config.inc.php';
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-4">
        <?php 
            // if there is a post
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                // if search field has a value
                if(!empty($_POST['search'])){
                    // build sql
                    $sql = "SELECT * FROM $db_table WHERE " . '"' . $_POST["search"] . '"' . " IN (first_name, last_name) ORDER BY last_name ASC";
                    // $sql = "SELECT * FROM student WHERE student_id LIKE '%val%' or field2 LIKE '%val%'";
                    $result = $db->query($sql);
                    // if no records are found
                    if ($result->num_rows == 0) {
                        echo "<p class=\"display-4 mt-4 text-center\">No results found for \"<strong>{$_POST['search']}</strong>\"</p>";
                        echo '<img class="mx-auto d-block mt-4" src="img/frown.png" alt="A sad face">';
                        echo "<p class=\"display-4 mt-4 text-center\">Please try again.</p>";
                        // echo "<h2 class=\"mt-4\">There are currently no records to display for <strong>last names</strong> starting with <strong>$filter</strong></h2>";
                    } else { // if records are found
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

<?php require_once 'inc/layout/footer.inc.php';?>