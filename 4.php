<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  
	Étape 1: Définir une fonction et qui renvoie un calcul de 2 nombres*/
	function carre() {
        $num1 = 8;
        $num2 = 7;
        $sum = $num1 + $num2;
        return $sum;
      }
     echo "la somme est ". carre()."<br>";
/*	Étape 2: Créez une fonction qui transmet des paramètres et appelez-la à l'aide de valeurs de paramètres
*/
 
function addNumbers(int $a, int $b) {
	return $a + $b;
  }
  echo addNumbers(2, 2);


?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>