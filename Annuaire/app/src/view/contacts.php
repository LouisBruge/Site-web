<?php
	require($_SERVER['DOCUMENT_ROOT'] . '/Login/ConnectionDB.php');

	require __DIR__ . '/../contactManager.php';
	require __DIR__ .  '/../contact.php';


	$db = ConnectionDB(); 


	$manager = new contactManager($db);

	$contacts = $manager->getList();

	//print_r($contacts);

	foreach ($contacts as $contact)
	{
		echo '<p> ' . $contact->id() . ' : <strong>' . $contact->nom() . '</strong> ' . $contact->prenom() . '<p><br />';
	}


?>
