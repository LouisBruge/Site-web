<?php session_start(); ?>
<!DOCTYPE>
<html>
	<head>
		<title> Récapitulatif de l'enregistrement - Ouvrages </title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
	</head>
	<body>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); ?>
	<section>
		<p>
		<h1> Récapitulatif de l'enregistrement dans la base de données monographique </h1> <br />

<?php

	// Controle des données transmises par le formulaire Html
	require($_SERVER['DOCUMENT_ROOT'] . '/CONTROLLER/ouvrage.php');
	$ouvrage = ControllerOuvrage($_POST);

	// retranscription des données envoyées sous la forme d'un tableau
	require($_SERVER['DOCUMENT_ROOT'] . '/MISE_FORME/ouvrage.php');
	MiseFormeOuvrage($ouvrage);

	// Appel de la fonction ConnectionDB pour se connecter au serveur postgresql et à la base de donnée
	require($_SERVER['DOCUMENT_ROOT'].'/ConnectionDB.php');
	$db = ConnectionDB();

	try
	{
	// préparation de la requête
	$req = $db->prepare('INSERT INTO ouvrage (auteur, titre, editeur, date, ville_edition, collection, commentaire) VALUES (?, ?, ?, ?, ?, ?, ?)');

	// execution de la requête
	$req->execute(array(
		$ouvrage['auteur'],
		$ouvrage['titre'],
		$ouvrage['editeur'],
		$ouvrage['date'],
		$ouvrage['ville'],
		$ouvrage['collection'],
		$ouvrage['commentaire']
	));
	}
	catch (PDOException $e)
	{
		echo 'Err : ' . $e->getMessage();
	};

	$type_media = "ouvrage";
	$titre = $_POST['titre'];
	// récupération de la clé primaire de l'enregistrement pour completer les informations secondaires (genres, supports et propriétaire...)
	require($_SERVER['DOCUMENT_ROOT']. '/REQUETES/requete_individuelle.php');
		$id = requete_enreg($db, $titre, $type_media);

	echo "CLEF : " . $id . '<br />';
	$genre = $_POST['genre'];
	$support = $_POST['support'];
	$proprio= $_POST['proprietaire'];
	require('info_complementaires.php');
	enreg_info_compl($db, $id, $type_media, $genre, $support, $proprio); 
?>

	</section>
</body>
</html>

