<?
if(isset($_SESSION['connexion'])&&($_SESSION['connexion']==1)){
	echo "connecté";
}else{
 	echo <<<PACO
  	<table style='margin:auto; background:#EEEEEE; padding:8px'>
  	<tr><td><a style='text-align:center;' href='action/connexion/'>Me connecter</a></td></tr>
  	<tr><td><a style='text-align:center;' href='inscription.php'>M'inscrire</a></td></tr>
  	</table>
PACO;
}

?>
