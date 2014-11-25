<?php

//autochargement des classes Version PHP 5.3.0
spl_autoload_register(function ($class) {
    require 'modeles/' . $class . '.class.php';
});
session_start();

//gestion des routes
$root="http://".$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

if($_GET['d1']=="action"){
	switch($_GET['d2']){
		case "connexion":
			$actions="connexion.php";
			break;
		default:
			$action="erreurURL.php";
	}

	require("actions/".$action);

}else{
	switch($_GET['d1']){
		case "accueil":
			$vue="accueil.php";
			break;
		case "comptes":
			$vue="comptes.php";
			break;
		case "synthese":
			$vue="synthese.php";
			break;
		case "saisie":
			$vue="saisie.php";
			break;
		case "testBootstrap";
			$vue="bootstrap.php";
			break;
		default:
			$vue="erreurURL.php";
	}
}

require("vues/page_globale.php");

?>