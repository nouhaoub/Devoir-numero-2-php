<?php
$b="";
$b=$_POST['psw'];
function email_valid($_POST['nl']){
 if (preg_match('/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/',$_POST[nl]))
    echo "true"; 
 else
    echo "false";
}
function psw_valid($b){
	if(strln($b)<8)
		echo "false";
    else
    {
      if((substr_count( $b,"[0-9]"))<1)
      	echo "false";
      else
      {
      	 if((substr( $b,"[*&%$#@ !?/]"))=0||(substr( $b,"[*&%$#@ !?/]")>1)
            echo "false";
         else
         {
         	if((substr_count( $b,"[A-Z]"))<1)
      	       echo "false";
      	   else
      	   	return "true";
         }



      }




    }
}


email_valid();
psw_valid();


$d=fopen("login.txt", "r+");
while(!feof($d)){
	 $cd=fgets($d);
	 $t=explode("|",$cd);
     if (!email_valid($t[0]))
     	echo "login inexistant";
     else 
     {
     	if(!psw_valid($t[1]))
     		echo "Mot de passe invalid";
     	else
     		echo "Authentification réussie";
     }
     
}
?>