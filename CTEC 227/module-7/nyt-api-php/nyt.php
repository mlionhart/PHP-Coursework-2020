<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>NYT API via PHP (Server Side)</title>
  <link href="css/nyt.css" rel="stylesheet" />
</head>

<body>
  <?php require "inc/functions.inc.php"; ?>
  <div id="wrapper">
    <section>
      <header>
        <a href="#" title="New York Times Top Headlines">
          <h1>Top New York Times Headlines</h1>
        </a>
        <p>NYT API via PHP (Server Side)</p>
        <p>Brought to you by the students of CTEC 227</p>
      </header>
    </section>

    <!-- Call the API -->
    <?php getStories(); ?>

  </div> <!-- end wrapper -->
  <footer>
    <p>Copyright &copy; 2015 by Bruce Elgort</p>
  </footer>

</body>

</html>