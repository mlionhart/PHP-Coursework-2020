<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="piggy.css">
    <title>Pig Latin Converter</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <label for="sentene">Enter a sentence</label>
    <br>
    <input type="text" name="sentence" id="sentence">
    <br>
    <input type="submit" value="Translate Sentence">

</form>
<?php 
    if (isset($_GET['sentence']) && !empty($_GET['sentence'])) {        
        $sentence = $_GET['sentence'];
        $sentence = explode(" ", $sentence);

        // var_dump($sentence);
        $pigLatin = '';
    
        for ($i=0; $i < count($sentence); $i++) { 
            $firstLetter = $sentence[$i][0];
            $restOfWord = substr($sentence[$i], 1, strlen($sentence[$i]));
            // echo '<br>' . $restOfWord . $firstLetter . 'ay' . '<br>';
            $pigLatin .= ' ' . $restOfWord . $firstLetter . 'ay';
        }
        echo $pigLatin;        
    }  else {
        echo 'Hey dummy, type something in!!!';
    }
    // Pig Latin
    // Iay ikelay izzapay

   
?>

</body>
</html>
