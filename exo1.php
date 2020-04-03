<?php

function transf_chaine($ca,$ch){
	$tab=explode($ca, $ch);
	echo "la chaine se compose de:<br>";
        for($i=0;$i<4;$i++)
   	  	 { print_r($tab[$i]);
   	  	 	echo " | ";}
} 
?>