<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/

	if(isset($_GET))
	{
		print_r($_GET) . "<br/><br/>";
	}

	$name = "Robin";
	$value = 32;
	$expirationTime = time() + (60 * 60 * 24 * 7);

	setcookie($name, $value, $expirationTime);

	if (isset($_COOKIE)) 
	{
		print_r($_COOKIE) . "<br/><br/>";
	}

	session_start();
	$_SESSION['message'] = "Hello";
	echo $_SESSION['message'] . "<br/>";
	
	?>

<a href="9.php?id=1&name=robin&age=32&gender=male">Click Here</a>



</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>