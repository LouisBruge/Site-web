<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Operateur </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
</head>
<body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
<p>
	<section>

	<?php
	if (isset($_GET['id']))
	{
		require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/FONCTION-SQL/get.php');

		// affichage des donnes de l'opérateur
		GetOperateur($_GET['id']);

		// affichage des notes historiques
		$historique = 'TRUE';
		GetNotes($_GET['id'], $historique);
		// affichage des contacts par opérateur
		GetContacts($_GET['id']);

		// affichage des arrêtés par opérateur
		GetArretes($_GET['id']);
		
		// affichage des candidatures par opérateur
		GetCandidatures($_GET['id']);

		// affichage des notes
		$historique = 'FALSE';
		GetNotes($_GET['id'], $historique);
	
	

		require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/FORMULAIRE/notes.php'); 
		require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/FORMULAIRE/contact.php'); 
		require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/FORMULAIRE/candidature.php'); 
		require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/FORMULAIRE/arrete.php'); 
	}
	else
	{
		require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/FONCTION-SQL/liste-generale.php');
		ListeOperateur() ;
	}
?>
	</section>
</p>
</body>
</html>
