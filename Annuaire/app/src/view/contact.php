<?php
	require($_SERVER['DOCUMENT_ROOT'] . '/Login/ConnectionDB.php');

	require __DIR__ . '/../contactManager.php';
	require __DIR__ .  '/../contact.php';


	$db = ConnectionDB();


	$manager = new contactManager($db);

	$contact = $manager->get(5);

	echo "<p> Nom : " . $contact->nom() . "<br />";
	echo "<p> Prénom : " . $contact->prenom() . "<br />";
	echo "<p> Naissance : " . $contact->naissance() . "<br />";



?>
