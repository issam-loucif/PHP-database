<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	<form  method = "GET">
	<a href"#">Cliquez ici</a>
	</form>
	<?php 

	  
	/*Étape 1 - Créez un lien indiquant Cliquez ici et définissez le lien href pour passer certains paramètres et utiliser le super global GET pour le voir*/

	/*Étape 2 - Définissez un cookie qui expire dans une semaine*/
	$cookie_name = "user";
	$cookie_value = "loucif";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 7),"/");
	print_r ($_COOKIE) ."<br>";
	
	/*Étape 3 - Démarrez une session et définissez-la sur la valeur, quelle que soit la valeur souhaitée.*/
	session_start();
	$_SESSION['prenom'] = 'issam';
	$_SESSION['nom'] = ' loucif';
	$_SESSION['age'] = 24;
	echo 'Hello ' . $_SESSION['prenom'] .  $_SESSION['nom'] .' you have ' . $_SESSION['age'];
	  



	?>
</article><!--MAIN CONTENT-->
<?php include "includes/footer.php "?>