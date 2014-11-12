<?php

//autochargement des classes Version PHP 5.3.0
spl_autoload_register(function ($class) {
    require 'modeles/' . $class . '.class.php';
});

//gestion des routes
if($_GET['d1']=="accueil")
{
	require_once("vues/page_globale.php");
}else
{
	echo "<h1>bug du controleur</h1>";
	echo "<pre>".print_r($_GET)."</pre>";
}


?>