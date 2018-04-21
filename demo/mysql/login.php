<?php
    include("db.php");
    include("functions.php");
?>
<?php
    createUser();
?>

<?php include("includes/header.php"); ?>

    <div class="container">
        <div class="col-sm-6">
        <h1 class="text-center">Create User</h1>
            <form action="" method="post">
                <label for="username">Username</label>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" id="username">
                    </div>

                <label for="password">Password</label>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password">
                </div>
                <input type="submit" value="Create User" name="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
        

<?php include("includes/footer.php"); ?>