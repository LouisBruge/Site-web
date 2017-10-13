<?php
// lancement de la session pour le visionnage des bases de données
session_start();
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>	INDEX - LOCALHOST</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="design.css" type="text/css" media="screen" />
		</head>
		<body>
		<header>
			<h1> Home's Server </h1>
		</header>

			<?php include("menu.php") ; ?>
		<main>

			<h1> Bienvenue sur le site du réseau local de la maison</h1>
	    	<p> 
			Le site a pour vocation d'améliorer la gestion interne du pc (serveur de musique) ainsi que des différentes bases de données liées à ce dernier (bibliographiques, lithiques et référencement des sites archéologiques et des opérateurs)<br/>
	<strong> Le site est pour le moment en construction et sa structure est susceptible d'être modifier à l'avenir</strong>
		</p>

		<h2>Base de donnée biblio</h2>
		<p>
			Accés au formulaire d'enregistrement de la base bibliographique : <a href="formulaires.php#monographie"> ici </a><br/>
			Accés à la base bibliographique : <a href="SQL/ouvrage.php"> ici </a><br/>
		</p>

		 <h2> Base de donnée des jeux vidéo </h2>
		<p>
			Accés au formulaire d'enregistrement de la base de donnée des jeux videos : <a href="formulaires.php#jeux_video"> ici </a><br />
			Accés à la base jeux vidéoludique : <a href="SQL/jeux_video.php"> ici </a><br/>
		</p>

		<h2> Base de donnée des films </h2>
		<p>
			Accés au formulaire d'enregistrement de la base filmographique : <a href="formulaires.php#film"> ici </a><br />
			Accés à la base filmographique : <a href="SQL/film.php"> ici </a><br/>
		</p>

		</main>
		</body>
			<?php include("footer.php") ; ?>
	</html>
