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

	echo '<stong>     ' . $contact->nom() . ' ' . $contact->prenom() . '</strong><br />';
	if(!empty($contact->poste()))
	{
		echo ' Poste : ' . $contact->poste() . '<br />';
	}
	if(!empty($contact->mail()))
	{
		echo 'Mail : ' . $contact->mail() . '<br />';
	}
	if(!empty($contact->tel()))
	{
		echo 'Téléphone : ' . $contact->tel() . '<br />';
	}
	if(!empty($contact->coordonnes()))
	{
		echo $contact->coordonnes() . '<br />';
	}


?>
