<?php

//autochargement des classes Version PHP 5.3.0
spl_autoload_register(function ($class) {
    require 'modeles/' . $class . '.class.php';
});

//gestion des routes
switch($_GET['d1']){
	case "accueil":
		$vue="listeComptes.php";
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
	default:
		$vue="erreurURL.php";
}

require("vues/page_globale.php");

?>