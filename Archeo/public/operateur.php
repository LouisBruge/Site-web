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
		require( __DIR__ . '/../app/src/MODELE/get.php');

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
	
	

		require( __DIR__ . '/../app/view/notes.php'); 
		require( __DIR__ . '/../app/view/contact.php'); 
		require( __DIR__ . '/../app/view/candidature.php'); 
		require( __DIR__ . '/../app/view/arrete.php'); 
	}
	else
	{
		require( __DIR__ . '/../app/src/MODELE/liste-generale.php');
		ListeOperateur() ;
	}
?>
	</section>
</p>
</main>
</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
