<?php

	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/controller/contact.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/modele/contactManager.php';
	//require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/connectiondb.php';

	// paramètres de connexion
	$db = connectiondb();

	$manager = new contactManager($db);

	// Envoi de la requête
	$contact = new contact($_POST);

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

	// enregistrement du contact 
	$manager->create($contact);


?>
