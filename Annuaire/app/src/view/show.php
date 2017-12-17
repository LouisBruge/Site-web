<?php

	require __DIR__ . '/../contactManager.php';
	require __DIR__ .  '/../contact.php';

	require '/srv/http/moduleConnection.php';

	$db = new connectionDb('biblio', 'louis', '@m19l5tt5'); 

	$db->connection();

	$manager = new contactManager($db::$pdo);

	$id = (int) $_GET['id'];

	$contact = $manager->get($id);
?>

<p>
	Nom : <?= $contact->nom(); ?> <br />
	Prenom : <?= $contact->prenom(); ?> <br />
	Naissance : <?= $contact->naissance(); ?> <br />
</p>



