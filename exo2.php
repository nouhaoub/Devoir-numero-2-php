<?php
if (!$fp = fopen("commandes.txt","r"))
 { echo "Echec de l'ouverture du fichier";
  exit;}
else { 
	while(!feof($fp)){
	 $ch=fgets($fp);
	   if( $ssch=strstr($ch,"CLI1001"))
	      { $f=fopen("CLI1001.txt", "r+");
            fputs($f,$ch."\n");
          }
       else($ssch=strstr($ch,"CLI10014"))
	      { $fa=fopen("CLI1004.txt", "r+");
            fputs($fa,$ssch."\n");
          } 
}
fclose($fa);
fclose($f);
fclose($fp);