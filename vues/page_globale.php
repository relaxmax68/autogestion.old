<?php 
/*
** structure de la page de présentation principale
*/
require_once("head.php");

echo '<div class="container">';

// affichage de la barre de connexion supérieure :
if(!empty($_SESSION['connex_active'])) {
  barreConnexion($_SESSION['connex_active']);
}

require_once("header.php");
require_once("section.php");
echo '</div>';

require_once("footer.php");

?>
