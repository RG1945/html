<!DOCTYPE html>
<html>
    <head>
        <title>Ceci est une page de test avec des balises PHP</title>
        <!-- A web page consists of two parts: the header and the body -->
       <meta charset="ansi" />
    </head>
    <body>
       <?php
	   // Ci-dessous, la fonction qui calcule le volume du c�ne
	   function VolumeCone($rayon, $hauteur)
	   {
	      $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume
	      return $volume; // indique la valeur � renvoyer, ici le volume
	   }

	   $volume = VolumeCone(3, 1);
	   echo 'Le volume d\'un c�ne de rayon 3 et de hauteur 1 est de ' . $volume;
	?>
    </body>
</html>
