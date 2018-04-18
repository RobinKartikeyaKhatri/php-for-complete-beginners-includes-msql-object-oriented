<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Built-In Math Functions in PHP </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    
        // Some of buit-in PHP Math functions

        // ceil — Round fractions up
        echo ceil(4.3) . "<br/>";    // 5
        echo ceil(9.999) . "<br/>";  // 10
        echo ceil(-3.14) . "<br/>";  // -3

        echo "<br/><br/>";

        // exp — Calculates the exponent of e
        echo exp(12) . "<br/>";
        echo exp(5.7) . "<br/>";

        echo "<br/><br/>";

        // floor — Round fractions down
        echo floor(4.3) . "<br/>";   // 4
        echo floor(9.999) . "<br/>"; // 9
        echo floor(-3.14) . "<br/>"; // -4

        echo "<br/><br/>";

        // max — Find highest value
        $number = array(2, 55, 32, 11, 23, 9, 98, 3);
        echo max($number);

        echo "<br/><br/>";

        // min — Find lowest value
        $number2 = array(2, 55, 32, 11, 23, 9, 98, 3);
        echo min($number2);

        echo "<br/><br/>";

        // pow — Exponential expression
        echo pow(3,3);

        echo "<br/><br/>";

        // rand — Generate a random integer
        echo rand(1, 10);

        echo "<br/><br/>";

        // round — Rounds a float
        echo round(3.4) . "<br/>";         // 3
        echo round(3.5) . "<br/>";         // 4
        echo round(3.6) . "<br/>";         // 4

        echo "<br/><br/>";

        // sqrt — Square root
        echo sqrt(144);

    ?>
</body>
</html>