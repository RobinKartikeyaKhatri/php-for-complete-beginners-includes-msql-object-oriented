<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Built-In Array Functions in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    
        $element = array("Apple", "Banana", "Cherry", "Durian", "Apple", "Cherry", "Apple");
        print_r(array_count_values($element));

        echo "<br/><br/>";

        $a = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yello");
        $b = array("e" => "red", "f" => "green", "g" => "blue");

        $result = array_diff($a, $b);
        print_r($result);

        echo "<br/><br/>";

        $a1 = array_fill(3, 4, 'blue');
        $b1 = array_fill(0, 1, 'red');

        print_r($a1);
        echo "<br/>";
        print_r($b1);

        echo "<br/><br/>";

        $a = array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
        print_r(array_keys($a));

        echo "<br/><br/>";

        

    
    ?>
</body>
</html>