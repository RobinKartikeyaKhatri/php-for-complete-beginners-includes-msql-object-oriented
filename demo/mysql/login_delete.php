<?php
include("db.php");
include("functions.php");
?>
<?php

deleteUser();

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
        <h1 class="text-center">Delete Users</h1>
            <form action="" method="post">
                <label for="id">IDs</label>
                    <div class="form-group">
                        <select name="id" class="form-control">
                        
                        <?php showAllData(); ?>
                        
                        </select>
                    </div>
                <input type="submit" value="Delete" name="delete" class="btn btn-danger">
            </form>
        </div>
    </div>
        

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>