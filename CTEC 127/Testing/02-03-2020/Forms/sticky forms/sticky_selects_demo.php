<!DOCTYPE html>
<html>
<head>
  <title>A Sticky Select Demo</title>
</head>
<body>

<?php
  // if the form has been POSTED we need to grab the currently selected exterior color
  if (isset($_POST['exteriorcolors'])){
    $exteriorcolors = $_POST['exteriorcolors'];
  } else {
    // looks like the form wasn't being posted
    $exteriorcolors = "";
  } // end if

  // if the form has been POSTED we need to grab the currently selected interior color
  if (isset($_POST['interiorcolors'])){
    $interiorcolors = $_POST['interiorcolors'];
  } else {
    // looks like the form wasn't being posted
    $interiorcolors = "";
  } // end if
?>

<h1>CTEC 127 - PHP and SQL 1</h1>
<p>Sticky Select Demo<br><br>by Bruce Elgort</p>

<form name="caroptions" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <label for="exterior">Exterior Colors</label>
  <select name="exteriorcolors" id="exterior">
    <option value="--Select--"<?php if($exteriorcolors == "--Select--") echo ' selected="selected"';?>>--Select--</option>
    <option value="blue"<?php if($exteriorcolors == "blue") echo ' selected="selected"';?>>Blue</option>
    <option value="green"<?php if($exteriorcolors == "green") echo ' selected="selected"';?>>Green</option>
    <option value="yellow"<?php if($exteriorcolors == "yellow") echo ' selected="selected"';?>>Yellow</option>
    <option value="orange"<?php if($exteriorcolors == "orange") echo ' selected="selected"';?>>Orange</option>
  </select>

  <br><br>

  <label for="interior">Interior Colors</label>
  <select name="interiorcolors" id="interior">
    <option value="--Select--"<?php if($interiorcolors == "--Select--") echo ' selected="selected"';?>>--Select--</option>
    <option value="blue"<?php if($interiorcolors == "blue") echo ' selected="selected"';?>>Blue</option>
    <option value="green"<?php if($interiorcolors == "green") echo ' selected="selected"';?>>Green</option>
    <option value="yellow"<?php if($interiorcolors == "yellow") echo ' selected="selected"';?>>Yellow</option>
    <option value="orange"<?php if($interiorcolors == "orange") echo ' selected="selected"';?>>Orange</option>
  </select>
  <br><br>
  <input type="submit"/>
</form>