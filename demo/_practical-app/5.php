<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

echo ceil(4.3) . "<br/>";    // 5

echo strtolower("ROBIN KARTIKEYA KHATRI");

echo "<br/>";

$element = array("Apple", "Banana", "Cherry", "Durian", "Apple", "Cherry", "Apple");
print_r(array_count_values($element));

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>