<h3>Solde des comptes</h3>

<?php

//création formulaire
$form = new Form('exemple','POST');
//on ajoute les champs souhaités
$form ->add('Submit', 'ok')
      ->value("Sauvegarder");
$form ->bound($_POST);

$reponse=Bdd::getInstance()->prepare("SELECT intitule,SUM(montant) as total FROM operations,comptes WHERE operations.compte=comptes.id GROUP BY compte");
$reponse->execute();

//On parcourt l'objet récupéré sous forme de tableau pour afficher chacun des enregistrements


while ($element = $reponse->fetch(PDO::FETCH_ASSOC))
	foreach ($element as $key => $value) {

			$form	->add('Text', $key)
					->value($value)	
		 	        ->label($key);
	}
}
//affiche le formulaire
echo $form;

$reponse->closeCursor();

?>

