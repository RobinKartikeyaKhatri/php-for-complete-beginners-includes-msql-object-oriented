<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Logical Operators in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    
        if(4 === 4 && 5 <= 10)
        {
            echo "Number 4 identical to Number 4 AND Number 5 is less than equal to Number 10";
        }
        else
        {
            echo "Number 4 not identical to Number 4 AND Number 5 is not less than equal to Number 10";
        }

        echo "<br/><br/>";

        if(4 === 4 && 5 >= 10)
        {
            echo "Number 4 is identical to Number 4 AND Number 5 is greater than equal to Number 10";
        }
        else
        {
            echo "Number 4 is identical to Number 4 AND Number 5 is not greater than equal to Number 10";
        }

        echo "<br/><br/>";

        if(20 >= 10 || 20 <= 10)
        {
            echo "Number 20 is greater than equal to Number 10 OR Number 20 is less than equal to Number 10";
        }

        echo "<br/><br/>";

        if(20)
        {
            echo "FLASE";
        }
        else
        {
            echo "TRUE";
        }

        echo "<br/><br/>";

        if(!30)
        {
            echo "FALSE";
        }
        else
        {
            echo "TRUE";
        }
    
    ?>
</body>
</html>