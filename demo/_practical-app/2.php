<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:

		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		  Step4: Make a constant and set it to the value of PHP. and use an echo to print it out

		 */

		 $number1 = 10;
		 $number2 = 20;

		 echo $number1 + $number2;

		 $regularArray = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
		 
		 $associativeArray = array(
			 'number_one' => 10, 
			 'number_two' => 20,
			 'number_three' => 30,
			 'number_four' => 40,
			 'number_five' => 50,
			 'number_six' => 60,
			 'number_seven' => 70,
			 'number_eight' => 80,
			 'number_nine' => 90,
			 'number_ten' => 100
		 );

		 echo "<br/><br/><br/>";

		 var_dump($regularArray);

		 echo "<br/><br/><br/>";

		 print_r($regularArray);

		 echo "<br/><br/>";

		 foreach($regularArray as $values)
		 {
			 echo $values . "<br/>";
		 }

		 echo "<br/><br/>";

		 var_dump($associativeArray);

		 echo "<br/><br/><br/>";

		 print_r($associativeArray);

		 echo "<br/><br/>";

		 foreach ($associativeArray as $key => $values) 
		 {
			 echo $key . " : " . $values . "<br/>";
		 }

		 echo "<br/><br/>";

		 define('NAME', 'Robin Kartikeya Khatri');

		 echo NAME;

		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>