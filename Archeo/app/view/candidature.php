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

	echo 'Date d\'envoi : ' . date('d/m/Y', strtotime($candidature->date_envoi())) . '<br />';
	echo ' Poste  : ' . $candidature->poste();
	echo ' - ' . $candidature->n_annonce() . '<br />';
	echo ' Support : ' . $candidature->support() . '<br />';
	echo '<br />';

?>
