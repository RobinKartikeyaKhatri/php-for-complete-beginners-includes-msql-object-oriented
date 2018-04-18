<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DoWhile Loop in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    
        $number = 10;

        do 
        {
            echo $number . "<br/>";
        } 
        while ($number > 100);
        $number++;
    
    ?>
</body>
</html>