<?php

	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/controller/operateur.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/modele/operateurManager.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/connectiondb.php';

	// paramètres de connexion
	$db = connectiondb();

	// Envoi de la requête
	$operateur = new Operateur($_POST);

	echo '<h1>' . $operateur->operateur() . '</h1>';
	echo  $operateur->secteur() . ' - ' . $operateur->statut_juridique() .  ' : ' . $operateur->activite() . '<br />';

	echo 'Date de Creation : ' . $operateur->date_creation() . '<br />' ;

	echo ' <h3> Coordonnées du siege </h3>';
	echo $operateur->service() . '<br />';

	echo $operateur->operateur() . '<br />';

		echo $operateur->batiment() . '<br />';

		echo $operateur->numero_siege() ;

		echo ' ' . $operateur->addresse() . '<br />';
		echo '<br />';
		echo $operateur->complement_addresse() . '<br />';

	echo $operateur->code_postal() . ' ' . $operateur->ville() ;
		echo ' ' . $operateur->code_cedex() . '<br />';

	echo '<br />';

		echo 'Tel : ' . $operateur->telephone();
		echo ' Mail : ' . $operateur->mail();

	echo ' Web : <a href="http://' . $operateur->web() . '">' . $operateur->web() . '</a> <br />';

	$manager = new operateurManager($db);
	$manager->create($operateur);

?>
