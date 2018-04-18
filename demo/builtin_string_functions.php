<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Built-in String Function in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    
        echo strtolower("ROBIN KARTIKEYA KHATRI");

        echo "<br/>";

        echo strtoupper("robin kartikeya khatri");

        echo "<br/>";

        echo str_word_count("Robin Kartikeya Khatri");

        echo "<br/>";

        echo str_shuffle("Robin");

        echo "<br/>";

        $result = strlen("Robin Kartikeya Khatri");
        echo $result;

        echo "<br/>";

        echo str_replace("World", "Peter", "Hello World");

    ?>
</body>
</html>