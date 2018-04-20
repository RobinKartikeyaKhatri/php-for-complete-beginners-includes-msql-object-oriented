<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Checking for Form Submission via POST Superglobal Array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    
        if (isset($_POST['submit'])) 
        {
            $first_name = $_POST['first_name'];
            $last_name  = $_POST['last_name'];

            echo "Your first name is: " . $first_name . " and last name is: " . $last_name;

        }

    ?>

    <form action="form.php" method="post">
        <input type="text" name="first_name" placeholder="First Name">
        <br/><br/>
        <input type="text" name="last_name" placeholder="Last Name">
        <br/><br/>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>