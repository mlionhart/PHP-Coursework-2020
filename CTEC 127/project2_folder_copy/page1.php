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
<style>
    /* For some reason the style.css page wont let me add anything to alter the look of the page */

    form {
        background-color: cornflowerblue;
        border-style: solid;
        border-width: .1rem;
        border-top-color: #888888;
        border-bottom-color: #5c5c5c;
        border-left-color: #545454;
        border-right-color: #888888;
        padding: 1rem;
    }

    body {
        background-color: cornsilk;
    }

    header {
        background-color: crimson;
        border-style: solid;
        border-width: .25rem;
        border-top-color: #964A00;
        border-bottom-color: #0C1F66;
        border-left-color: #034C5D;
        border-right-color: #966800;
        text-align: center;
    }

    footer {
        background-color: crimson;
        border-style: solid;
        border-width: .25rem;
        border-top-color: #964A00;
        border-bottom-color: #0C1F66;
        border-left-color: #034C5D;
        border-right-color: #966800;
        text-align: center;
    }
</style>

<body>
    <h1>Project #2 Form</h1>
    <header>
        <p>You don't have to fill in each thing but if you dont, you will miss out on the cool bonus stuff!</p>
    </header>
    <form action="page2.php" method="get">
        <fieldset>
            <legend>Bonus Stuff Form</legend>
            <p><label for="gwir">Do you recycle?: </label><input type="text" name="gwir" id="gwir" size="5" maxlength="5"></p><br>
            <label>Choose your Pizza Gladiator!</label><br>
            <select name="pizza" id="gladiator">
                <option value="-">-Choose your fighter!-</option>
                <option value="gc">Garlic Chicken</option>
                <option value="pc">Pineapple & Canadian Bacon</option>
                <option value="p">Pepperoni</option>
                <option value="m">Margherita</option>
                <option value="v">Veggie</option>
                <option value="ml">Meat Lovers</option>
            </select><br>
            <label>What do you think gwir means?</label><br>
            <input type="radio" name="wdim" id="what" value="What" title="confusion">
            <label for="what">What?</label><br>
            <input type="radio" name="wdim" id="why" value="Why" title="confusion">
            <label for="why">Why!</label><br>
            <input type="radio" name="wdim" id="answer" value="Answer" title="confusion">
            <label for="answer">Whatever is funnier to you</label><br>
            <br>
            <label>What do you think so far about this form?</label><br>
            <input type="textarea" name="review" id="review" rows="4" cols="50"><br>
            <label>Check Box Palooza</label><br>
            <input type="checkbox" name="color[]" id="red" value="Red" title="Computer Gimic">
            <label for="red">Red</label><br>
            <input type="checkbox" name="color[]" id="green" value="Green" title="Computer Gimic">
            <label for="green">Green</label><br>
            <input type="checkbox" name="color[]" id="blue" value="Blue" title="Computer Gimic">
            <label for="blue">Blue</label><br>
            <input type="submit">
        </fieldset>
    </form>
    <footer>&copy; Project Form#2 2020</footer>



    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>