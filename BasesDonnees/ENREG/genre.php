<?php session_start();  ?>
<!DOCTYPE html>
<html>
	<head>
		<title> Récapitulatif de l'enregistrement - genre </title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
	</head>
	<body>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); ?>
	<section>
		<p>
		<h1> Récapitulatif de l'enregistrement des genres</h1> <br />

<?php
	require($_SERVER['DOCUMENT_ROOT'] . '/BasesDonnees/CONTROLLER/genre.php');
	$genre = ControllerGenre($_POST);
	// retranscription des données envoyées sous la forme d'un tableau
	require($_SERVER['DOCUMENT_ROOT'] . '/BasesDonnees/MISE_FORME/tableau.php');
	Tableau_html($genre);


	try{
	// ouverture de la base de donnée
	$db = new PDO("pgsql:dbname=biblio;host=localhost", "louis", "@m19l5tt5");

	// préparation de la requête
	$req = $db->prepare('INSERT INTO genre (nom, abreviation, film, ouvrage, jeux) VALUES (?, ?, ?, ?, ?)');

	// execution de la requête
	$req->execute(array(
		$genre['nom'],
		$genre['abreviation'],
		$genre['film'],
		$genre['ouvrage'],
		$genre['jeux']
	));
	}
	catch(PDOException $e){
		echo 'ERR : ' . $e->getMessage();
	};
?>
	</section>
	</body>
</html>


