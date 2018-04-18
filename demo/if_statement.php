<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IF Statment in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    
        $favoriteFood = "Garibaldi";
        $favoriteDrink = "Budwiser Beer";
        $favoriteBoots = "Woodland";

        if($favoriteFood == "Pindi Cholle")
        {
            echo "Robin loves Garibaldi";
        }
        else
        {
            echo "This is not the food Robin likes";
        }

        echo "<br/><br/>";

        if($favoriteDrink == "Budwiser Beer")
        {
            echo "Robin loves Budwiser Beer";
        }
        else
        {
            echo "This is not the drink Robin likes";
        }

        echo "<br/><br/>";

        if($favoriteBoots == "Nike")
        {
            echo "This is not the shoes Robin likes";
        }
        elseif ($favoriteBoots == "Woodland") 
        {
            echo "Robin loves Woodland shoes";
        }
        else
        {
            echo "Robin likes any sports shoes";
        }
    
    ?>
</body>
</html>