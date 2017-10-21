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
			<?php include("menu.php") ; ?>
				<section class="accesDB">

                <section ="banner">
				    <h1> Bienvenue sur le site du réseau local de la maison</h1>
	    			<p> 
					    Le site a pour vocation d'améliorer la gestion interne du pc (serveur de musique) ainsi que des différentes bases de données liées à ce dernier (bibliographiques, lithiques et référencement des sites archéologiques et des opérateurs)<br/>
					    <strong> Le site est pour le moment en construction. Sa structure est susceptible d'évoluer à l'avenir</strong>
				    </p>
                </section>

                <div class="biblio">
				    <h2>Base de donnée biblio</h2>
				    <p>
				    	<a href="SQL/ouvrage.php">Accés à la base bibliographique</a><br/>
				    	<a href="formulaires.php#monographie">Accés au formulaire d'enregistrement de la base bibliographique</a><br/>
				    </p>
                </div>


                <div class="jeuxVideo">
				    <h2> Base de donnée des jeux vidéo </h2>
				    <p>
					    <a href="SQL/jeux_video.php">Accés à la base jeux vidéoludique</a><br/>
					    <a href="formulaires.php#jeux_video">Accés au formulaire d'enregistrement de la base de donnée des jeux videos</a><br />
				    </p>
                </div>

                <div class="film">
				    <h2> Base de donnée des films </h2>
				    <p>
					    <a href="SQL/film.php">Accés à la base filmographique</a><br/>
					    <a href="formulaires.php#film">Accés au formulaire d'enregistrement de la base filmographique</a><br />
				    </p>
                </div>
				</section>
			</main>
		</body>
			<?php include("footer.php") ; ?>
	</html>
