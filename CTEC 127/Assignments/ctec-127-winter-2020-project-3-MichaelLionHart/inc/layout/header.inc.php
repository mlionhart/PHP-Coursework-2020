<?php // Filename: header.inc.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet"> -->
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
<?php require_once 'inc/functions/functions.inc.php'; ?>
<?php require_once 'inc/app/config.inc.php';?> 
<?php require_once 'inc/layout/navbar.inc.php';?> 