<?php
include("db.php");
include("functions.php");
?>
<?php

updateUsers();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="col-sm-6">
        <h1 class="text-center">Update Users</h1>
            <form action="" method="post">
                <label for="username">Username</label>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" id="username">
                    </div>

                <label for="password">Password</label>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                <label for="id">IDs</label>
                    <div class="form-group">
                        <select name="id" class="form-control">
                        
                        <?php showAllData(); ?>
                        
                        </select>
                    </div>
                <input type="submit" value="Update" name="update" class="btn btn-primary">
            </form>
        </div>
    </div>
        

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>