<?php

//autochargement des classes Version PHP 5.3.0
spl_autoload_register(function ($class) {
    require 'modeles/' . $class . '.class.php';
});

//gestion des routes
if($_GET['d1']=="accueil"){
	$vue="listeComptes.php";
}else{
	$vue="erreurURL.php";
}

require("vues/page_globale.php");

?>