<html>
<head>
</head>
<body>
	<h1>Bienvenue</h1>
	<h4>Saisir votre login et le mot de passe</h4>
	<form method="post" action="authentification.php">
		<table>
		   <tr>
               <td><label for="nomlog">login</label></td>
               <td><input type="text" name="nl" id="nl"></td>
           </tr> 
           <tr> 
               <td><label for="psw">Password</label></td>
               <td><input type="Password" name="psw" id="psw"></td>
           </tr>
            <tr>
           	   <td><input type="submit" value="envoyer"></td>
           	</tr>
        </table>
	</form>
<?php 
   include "authentification.php";
 ?>
</body>
</html>
