<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Post Request in PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php
    
        if(isset($_POST['submit']))
        {
            $name       = $_POST['name'];
            $last_name  = $_POST['last_name'];
            $password   = $_POST['password'];

            print_r($_POST);
        }
    
    ?>

    <form action="post.php" method="post">
        <input type="text" name="name" placeholder="first name">
        <br/><br/>
        <input type="text" name="last_name" placeholder="last name">
        <br/><br/>
        <input type="password" name="password" placeholder="password">
        <br/><br/>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>