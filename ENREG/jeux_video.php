<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title> Récapitulatif de l'enregistrement - Jeux video</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
	</head>
	<body>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); ?>
	<section>
		<p>
		<h1> Récapitulatif de l'enregistrement dans la base de données jeux vidéoludique</h1> <br />

<?php
	// retranscription des données envoyées sous la forme d'un tableau
	require($_SERVER['DOCUMENT_ROOT'] . '/CONTROLLER/jeux.php');
	$jeux = ControllerJeux($_POST);

	// retranscription des données envoyées sous la forme d'un tableau
	require($_SERVER['DOCUMENT_ROOT'] . '/MISE_FORME/jeux.php');
	MiseFormeJeux($jeux);

	// Appel de la fonction ConnectionDB pour se connecter au serveur postgresql et à la base de donnée
	require($_SERVER['DOCUMENT_ROOT'].'/ConnectionDB.php');
	$db = ConnectionDB();

	// préparation de la requête
	$req = $db->prepare('INSERT INTO jeux (titre, editeur, annee, plateforme, commentaire) VALUES (?, ?, ?, ?, ?)');

	// execution de la requête
	$req->execute(array(
		$jeux['titre'],
		$jeux['editeur'],
		$jeux['annee'],
		$jeux['plateforme'],
		$jeux['commentaire']
	));

	// récupération de la clé primaire de l'enregistrement pour completer les informations secondaires (genres, supports et propriétaire...)
	$type_media = "jeux";
	$titre = $_POST['titre'];
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

