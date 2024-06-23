<?php // Filename: form.inc.php ?>

<!-- Note the use of sticky fields below -->
<!-- Note the use of the PHP Ternary operator
Scroll down the page
http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary
-->

<?php 
// Button label logic
if (basename($_SERVER['PHP_SELF']) == 'create-record.php') {
    $button_label = "Save New Record";
} elseif (basename($_SERVER['PHP_SELF']) == 'update-record.php') {
    $button_label = "Save Updated Record";
} elseif (basename($_SERVER['PHP_SELF']) == 'advanced-search.php') {
    $button_label = "Search";
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <label class="col-form-label" for="first">First Name </label>
    <input class="form-control" type="text" id="first" name="first" value="<?php echo (isset($first) ? $first: '');?>">
    <br>
    <label class="col-form-label" for="last">Last Name </label>
    <input class="form-control" type="text" id="last" name="last" value="<?php echo (isset($last) ? $last: '');?>">
    <br>
    <label class="col-form-label" for="sid">Student ID </label>
    <input class="form-control" type="text" id="sid" name="sid" value="<?php echo (isset($sid) ? $sid: '');?>">
    <br>
    <label class="col-form-label" for="gpa">GPA </label>
    <input class="form-control" type="text" id="gpa" name="gpa" value="<?php echo (isset($gpa) ? $gpa: '');?>">
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
        <option value="Undeclared"<?php if($degree_program == "Undeclared") echo ' selected="selected"'; ?>>Undeclared</option>
        <option value="Web Development"<?php if($degree_program == "Web Development") echo ' selected="selected"'; ?>>Web Development</option>
        <option value="Computer Science"<?php if($degree_program == "Computer Science") echo ' selected="selected"'; ?>>Computer Science</option>
        <option value="Computer Support"<?php if($degree_program == "Computer Support") echo ' selected="selected"'; ?>>Computer Support</option>
        <option value="Art"<?php if($degree_program == "Art") echo ' selected="selected"'; ?>>Art</option>
        <option value="Music"<?php if($degree_program == "Music") echo ' selected="selected"'; ?>>Music</option>
    </select>
    <br><br>
    <label class="col-form-label" for="graduation_date">Graduation Date: </label>
    <input class="form-control" type="date" id="graduation_date" name="graduation_date" value="<?php echo (isset($graduation_date) ? $graduation_date: '');?>">
    <br>
    <label class="col-form-label" for="email">Email </label>
    <input class="form-control" type="email" id="email" name="email" value="<?php echo (isset($email) ? $email: '');?>">
    <br>
    <label class="col-form-label" for="phone">Phone </label>
    <input class="form-control" type="text" id="phone" name="phone" value="<?php echo (isset($phone) ? $phone: '');?>">
    <br>
    <input type="hidden" name="id" value="<?php echo (isset($id) ? $id : '');?>">
    <br>
    <a href="display-records.php">Cancel</a>&nbsp;&nbsp;
    <button class="btn btn-primary" type="submit"><?php echo $button_label; ?></button>
    <button class="btn btn-light btn-outline-secondary" type="reset">Clear Form</button>
</form>