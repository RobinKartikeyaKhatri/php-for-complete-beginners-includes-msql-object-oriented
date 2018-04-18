<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

	Step 2: Make a forloop  that displays 10 numbers

	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	$favoriteProgrammingLanguage = "PHP";

	if($favoriteProgrammingLanguage == "Java")
	{
		echo "I don't love Java that much serously ;)";
	}
	elseif($favoriteProgrammingLanguage == "C++")
	{
		echo "I hate C++ :(";
	}
	else
	{
		echo "I love PHP";
	}

	echo "<br/><br/>";

	for ($number = 1; $number <= 10; $number++) 
	{ 
		echo $number . "<br/>";
	}

	echo "<br/><br/>";

	$placeInClass = 100;

	switch ($placeInClass) 
	{
		case 1:
			echo "He got 1st place in class";
		break;

		case 2:
			echo "He got 2nd place in class";
		break;

		case 3:
			echo "He got 3rd place in class";
		break;

		case 4:
			echo "He got 4th place in class";
		break;

		case 5:
			echo "He got 5th place in class";
		break;
		
		default:
			echo "He's failed! :(";
		break;
	}

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>