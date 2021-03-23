<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*Étape 1: Créez une condition facultatif avec if, elseif et else pour enfin afficher la chaîne en disant, "I love greenchip :p"*/
$l = 3;

if ($l == "1") {
  echo "I don't care";
} elseif ($l == "2") {
  echo "I like devlopement";
} else {
  echo "I love greenchip ";
}
/*Étape 2: Créez un forloop qui affiche 10 nombres*/
for ($x = 0; $x <= 10; $x+=1) {
	echo "The number is: $x <br>";
  }
/*Étape 3: Créez une instruction switch qui teste à nouveau une condition avec 5 cas */

$Fname = "issam";

switch ($Fname) {
  case "issam":
    echo "loucif";
    break;
  case "oumaima":
    echo "hamadi";
    break;
  case "med amin":
    echo "chaaban";
    break;
}
	
?>




</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>