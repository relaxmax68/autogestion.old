<?php

//autochargement des classes Version PHP 5.3.0
spl_autoload_register(function ($class) {
    require 'modeles/' . $class . '.class.php';
});
session_start();
$application = &$_SESSION['application'];
if (!is_object($application))$application = new Application();
$parametre = &$_SESSION['parametre'];
if (!is_object($parametre))$parametre = new Parametre();

//gestion des routes

if(isset($_GET['d1'])){
	//si la requete est une action
	if($_GET['d1']=="action"){
		switch($_GET['d2']){
			case "connexion":
				$action="connexion.php";
				break;
			case "inscription":
				$action="inscription.php";
				break;			
			case "retour":
				$action="retour.php";
				break;
			default:
				$action="erreurURL.php";
		}
		require("actions/".$action);
	}else{
	//sinon c'est une vue qui est demandée
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
			case "parametres";
				$vue="parametres.php";
				break;				
			default:
				$vue="erreurURL.php";
		}
	}
}


require("vues/page_globale.php");

?>