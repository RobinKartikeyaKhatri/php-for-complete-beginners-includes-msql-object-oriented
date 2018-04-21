<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/

	$connection = mysqli_connect("localhost", "root", "", "practice_section_7");

	$query = "SELECT * FROM weeks_name";

	$result = mysqli_query($connection, $query);

	if($result)
	{
		while ($row = mysqli_fetch_array($result)) 
		{
			echo $id = $row['id'] . "<br/>";
			echo $week_name = $row['week_name'] . "<br/>";
		}
	}
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
