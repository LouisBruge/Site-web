<?php

	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/controller/candidature.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/modele/candidatureManager.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/connectiondb.php';

	// paramètres de connexion
	$db = connectiondb();

	// génération de la liste
	$manager = new candidatureManager($db);
	
	//Transformation de la variable $_GET['id'] en $id
	$id = (int) $_GET['id'];

	// Envoi de la requête
	$candidature = $manager->get($id);

?>

	<h1> <?= $candidature->poste(); ?> chez <a href="/Archeo/public/operateur?id='<?= $candidature->operateur(); ?>'"> <?= $candidature->operateur(); ?></a> </h1>
	
	<p>
	Date d'envoi de la candidature : <?=  date('d/m/Y', strtotime($candidature->date_envoi())) ?> par <?= $candidature->support() ?> <br />

	envoyer à <?= $candidature->contact() ?> <br /><br />

	Numéro d'annonce : <?= $candidature->n_annonce() ?>
	</p>

