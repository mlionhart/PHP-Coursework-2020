<?php 
// Nust make variable null to avoid an error on page 1
$name = NULL; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 1</title>
</head>
<body>
    <!-- inject header from outside file -->
    <?php require 'includes/header.inc.php'; ?>
    <main>
        <form action="page2.php" method="get">
            <h1>Fill out the form to generate a custom page</h1>
            <p><label for="name"><strong>Please enter you name:</strong> <input type="text" name="name" id="name" class="form-control"></label></p>
            <fieldset>
                <legend>Select a Background color for the page</legend>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="bg" id="blue" value="blue"><label for="blue" class="custom-control-label"> Blue</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="bg" id="green" value="green"><label for="green" class="custom-control-label"> Green</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="bg" id="red" value="red"><label for="red" class="custom-control-label">Red</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="bg" id="orange" value="orange"><label for="orange" class="custom-control-label">Orange</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="bg" id="yellow" value="yellow"><label for="yellow" class="custom-control-label">Yellow</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="bg" id="violet" value="violet"><label for="violet" class="custom-control-label">Violet</label>
                    </div>
                    <p class="pmargin"><strong>(bg</strong> changes the background color of the page. E.g. if you choose blue, the url would be   <a href="page2.php?bg=blue">http://page2.php?bg=blue</a>)</p>
            </fieldset>

            <fieldset>
                <legend>Select a Font Size for the page</legend>
                    <div class="custom-control custom-radio">
                        <input type="radio" name="fontsize" id="large" class="custom-control-input" value="large"><label for="large" class="custom-control-label"> Large</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" name="fontsize" id="xlarge" class="custom-control-input" value="xlarge"><label for="xlarge" class="custom-control-label"> Xlarge</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" name="fontsize" id="xxlarge" class="custom-control-input" value="xxlarge"><label for="xxlarge" class="custom-control-label"> XXlarge</label>
                    </div>
                    <p class="pmargin"><strong>(fontsize</strong> changes the font size of the page. E.g. if you choose large, the url would be   <a href="page2.php?fontsize=large">http://page2.php?fontsize=large</a>)</p>
            </fieldset>

            <fieldset>
                <legend>Select a Border Radius Setting for the main box</legend>
                    <div class="custom-control custom-radio">
                        <input type="radio" name="radius" id="smallradius" value="smallradius" class="custom-control-input"><label for="smallradius" class="custom-control-label"> Small</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" name="radius" id="xlargeradius" value="mediumradius" class="custom-control-input"><label for="xlargeradius" class="custom-control-label"> Medium</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" name="radius" id="xxlargeradius" value="largeradius" class="custom-control-input"><label for="xxlargeradius" class="custom-control-label"> Large</label>
                    </div>
                    <p class="pmargin"><strong>(radius</strong> changes the border radius of the main box. E.g. if you choose largeradius, the url would be   <a href="page2.php?radius=largeradius">http://page2.php?radius=largeradius</a>)</p>
            </fieldset>

            <fieldset>
                <legend>Select a Font Color for the Page</legend>
                    <div class="custom-control custom-radio">
                        <input type="radio" name="fontcolor" id="greenfont" value="greenfont" class="custom-control-input"><label for="greenfont" class="custom-control-label"> Green</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" name="fontcolor" id="redfont" value="redfont" class="custom-control-input"><label for="redfont" class="custom-control-label"> Red</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" name="fontcolor" id="brownfont" value="brownfont" class="custom-control-input"><label for="brownfont" class="custom-control-label"> Brown</label>
                    </div>
                    <p class="pmargin"><strong>(fontcolor</strong> changes the font color of the page. E.g. if you choose green, the url would be <a href="page2.php?fontcolor=greenfont">http://page2.php?fontcolor=greenfont</a>)</p>
            </fieldset>

            <fieldset>
                <legend>Select the Padding for the Page</legend>
                    <div class="custom-control custom-radio">
                        <input type="radio" name="padding" id="none" value="none" class="custom-control-input"><label for="none" class="custom-control-label"> None</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" name="padding" id="moderate" value="moderate" class="custom-control-input"><label for="moderate" class="custom-control-label"> Moderate</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" name="padding" id="toomuch" value="toomuch" class="custom-control-input"><label for="toomuch" class="custom-control-label"> Too Much</label>
                    </div>
                    <p class="pmargin"><strong>(padding</strong> changes the padding of the page. E.g. if you choose toomuch, the url would be <a href="page2.php?padding=toomuch">http://page2.php?padding=toomuch</a>)</p>
            </fieldset>

            <fieldset>
                <legend>Display or Hide the Header</legend>
                    <div class="custom-control custom-radio">
                        <input type="radio" name="header" id="show" value="show" class="custom-control-input"><label for="show" class="custom-control-label"> Show</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" name="header" id="hide" value="hide" class="custom-control-input"><label for="hide" class="custom-control-label"> Hide</label>
                    </div>
                    <p class="pmargin"><strong>(header</strong> Determines whether the page should have a header or not. E.g. if you choose hide, the url would be <a href="page2.php?header=hide">http://page2.php?header=hide</a>)</p>
            </fieldset>

            <fieldset>
                <legend>Display or Hide Image?</legend>
                    <div class="custom-control custom-radio">
                        <input type="radio" name="image" id="display" value="display" class="custom-control-input"><label for="display" class="custom-control-label"> Show</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" name="image" id="nodisplay" value="nodisplay" class="custom-control-input"><label for="nodisplay" class="custom-control-label"> Hide</label>
                    </div>
                    <p class="pmargin"><strong>(header</strong> Determines whether the page should display an image or not. E.g. if you choose display, the url would be <a href="page2.php?image=display">http://page2.php?image=display</a>)</p>
            </fieldset>
            <input type="submit" value="Generate My Custom Page" class="btn btn-danger">
        </form> <!-- end of form -->
    </main> <!-- end of main -->

    <!-- inject footer from outside file -->
    <?php require 'includes/footer.inc.php'; ?>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>