<?php
include("db.php");
include("functions.php");
?>
<?php

deleteUser();

?>
<?php include("includes/header.php"); ?>

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
        

<?php include("includes/footer.php"); ?>