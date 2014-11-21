<?
/*
** structure de la page de présentation principale
*/
require_once("head.php");?>

<div class="container">
	<div class="row">
		<?
		require_once("logo.php");
		require_once("notifications.php");
		require_once("connexion.php");
		?>
	</div>

	<?
	require_once("menu.php");
	require_once("header.php");
	require_once("section.php");
echo '</div>';

require_once("footer.php");

?>
