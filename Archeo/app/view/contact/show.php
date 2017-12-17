<?php

	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/controller/contact.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/modele/contactManager.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/connectiondb.php';

	// paramètres de connexion
	$db = connectiondb();

	// génération de la liste
	$manager = new contactManager($db);
	
	//Transformation de la variable $_GET['id'] en $id
	$id = (int) $_GET['id'];

	// Envoi de la requête
	$contact = $manager->get($id);

?>

	<h1> <?= $contact->nom() ?> <?= $contact->prenom() ?> </h1>
	<h2> <?= $contact->operateur() ?> </h2>

	<p>
		Poste : <?= $contact->poste() ?> <br />
		<br />
		Mail : <?= $contact->mail() ?> <br />
		Téléphone : <?= $contact->tel() ?> <br />
		Coordonnées : <?= $contact->coordonnes() ?> <br />
	</p>
