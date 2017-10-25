<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title> Récapitulatif de l'enregistrement - film </title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
	</head>
	<body>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); ?>
	<section>
		<p>
		<h1> Récapitulatif de l'enregistrement dans la base de données filmographique</h1> <br />

<?php
	// Appel de la fonction ControllerFilm pour vérifier les données transmisses par le formulaire html

	require($_SERVER['DOCUMENT_ROOT'] . '/BasesDonnees/CONTROLLER/film.php');
	$film = ControllerFilm($_POST);

	// retranscription des données envoyées sous la forme d'un tableau
	require($_SERVER['DOCUMENT_ROOT'] . '/BasesDonnees/MISE_FORME/film.php');
	MiseFormeFilm($film);

	// Appel de la fonction ConnectionDB pour se connecter au serveur postgresql et à la base de donnée
	require($_SERVER['DOCUMENT_ROOT'].'/ConnectionDB.php');
	$db = ConnectionDB();

	// préparation de la requête
	$req = $db->prepare('INSERT INTO film (titre, realisateur, studio, annee, duree, commentaire) VALUES (?, ?, ?, ?, ?, ?)');

	// execution de la requête
	$req->execute(array(
		$film['titre'],
		$film['realisateur'],
		$film['studio'],
		$film['annee'],
		$film['duree'],
		$film['commentaire']
	));

	// récupération de la clé primaire de l'enregistrement pour completer les informations secondaires (genres, supports et propriétaire...)
	$type_media = "film";
	$titre = $_POST['titre'];
	require($_SERVER['DOCUMENT_ROOT']. '/BasesDonnees/REQUETES/requete_individuelle.php');
		$id = requete_enreg($db, $titre, $type_media);


	echo "CLEF : " . $id . '<br />';
	$genre = $_POST['genre'];
	$support = $_POST['support'];
	$proprio= $_POST['proprietaire'];
	require('info_complementaires.php');
	enreg_info_compl($db, $id, $type_media, $genre, $support, $proprio); 
?>


	</p>
	</section>
</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>



