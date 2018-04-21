<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/
		$hash = '$2y$10$';
		$salt = 'iusesomecrazystrings22';
		$hashFormat_and_salt = $hash . $salt;

		$password = "this is a password";
		$result = crypt($password, $hashFormat_and_salt);
		echo $result;
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>