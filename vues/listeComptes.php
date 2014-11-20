<div class="col-lg-12">
  <h3>Affichage de la base de données</h3>

<?php 

$reponse=Bdd::getInstance()->prepare("SELECT * FROM comptes");
$reponse->execute();

//On parcourt l'objet récupéré sous forme de tableau pour afficher chacun des enregistrements
echo '<pre>';
while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
{
    echo '<pre>';
    echo '<p>'.print_r($donnees).'</p>';
    echo '</pre>';
}


$reponse->closeCursor();

?>
</div>