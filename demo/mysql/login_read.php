<?php include("db.php"); ?>
<?php include("functions.php"); ?>

<?php include("includes/header.php"); ?>

    <div class="container">
        <div class="col-sm-6">
        <h1 class="text-center">Show Users</h1>
        <pre>
            <?php readUser(); ?>
        </pre>
    </div>
    </div>
        

<?php include("includes/footer.php"); ?>