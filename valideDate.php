<?php
 echo "<h1>Validation du date </h1>";
 echo "la date saisie est: $_POST[jour]/$_POST[mois]/$_POST[annee]<br>";
 echo "la date saisie est ";
if(checkdate($_POST['mois'], $_POST['jour'], $_POST['annee']))
	echo " :date valide";
else 
	echo "non bissextile: date invalide";

?>