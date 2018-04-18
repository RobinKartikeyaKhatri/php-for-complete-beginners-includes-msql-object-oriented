<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Switch Satement in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    
        $favoriteFood = "Garibaldi";

        switch ($favoriteFood) 
        {
            case 'Pizza':
                echo "Pizza is not my favorite food. <br/>";
            break;

            case 'Pasta':
                echo "Pasta is not my favorite food. <br/>";
            break;

            case 'Samosa':
                echo "Samosa is not my favorite food. <br/>";
            break;

            case 'Dosa':
                echo "Dosa is not my favorite food. <br/>";
            break;

            case 'Idly':
                echo "Idly is not my favorite food. <br/>";
            break;

            case 'Garibaldi':
                echo "You guess the spot Yes Garibaldi :) is my favorite food.<br/>";
            break;
            
            default:
                echo "None of above is my favorite food. YAKKKK :(";
            break;
        }
    
    ?>
</body>
</html>