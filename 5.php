<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


  
	/*Étape 1: utilisez une fonction mathématique prédéfinie ici et faites-en écho*/
	echo(max(2,4,6,8,10) . "<br>");
	/*Étape 2: utilisez une fonction de chaîne prédéfinie ici et faites-en écho*/
	$str = addcslashes("loucif issam","i");
	echo($str). "<br>";
	/*Étape 3: Utilisez une fonction Array prédéfinie ici et faites-en écho */
	$fname=array("Peter","Ben","Joe");
	$age=array("35","37","43");
	
	$c=array_combine($fname,$age);
	print_r($c);



	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>