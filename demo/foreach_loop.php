<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Foreach Loop in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    
        $normalArray = array("Apple", "Boy", "Cat", "Dog");

        $associativeArray = array(
            "A for" => "Apple",
            "B for" => "Boy",
            "C for" => "Cat",
            "D for" => "Dog"
        );

        foreach ($normalArray as $value) 
        {
            echo $value . "\t";
        }

        echo "<br/><br/>";
        
        foreach ($associativeArray as $key => $values) 
        {
            echo $key . " : " . $values . "\t";
        }
    
    ?>
</body>
</html>