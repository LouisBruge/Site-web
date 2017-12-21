<?php
// lancement de la session pour le visionnage des bases de données
session_start();
?>

<!DOCTYPE html>
	<html>
		<head>
			<title>	INDEX - LOCALHOST</title>
			<meta charset="utf-8">
			<script src='core/js/jquery-3.2.1.js' /> </script>
			<script src='core/js/script.js' /> </script>
			<link rel="stylesheet" href="design.css" type="text/css" media="screen" />
		</head>
		<body>
			<?php include("menu.php") ; ?>
				<section class="main-test">

                <section class="banner">
				    <h1> Bienvenue sur le site du réseau local de la maison</h1>
	    			<p> 
					    Le site a pour vocation d'améliorer la gestion interne du pc (serveur de musique) ainsi que des différentes bases de données liées à ce dernier (bibliographiques, lithiques et référencement des sites archéologiques et des opérateurs)<br/>
					    <strong> Le site est pour le moment en construction. Sa structure est susceptible d'évoluer à l'avenir</strong>
				    </p>
				<cite> Credit: <a href="https://picjumbo.com/electronics-chip-board-hardware-close-up-2/">picjumbo</a> <cite>
                </section>

				<section class="accesDB">
                <div class="biblio">
				    <h2>Base Bibliographique</h2>
				    <p>
                        <ul>
                            <li><a href="/bibliographie/public/ouvrage.php">Base de Donnée</a><br/></li>
				    	    <li><a href="/bibliographie/public/formulaires.php#monographie">Formulaires d'enregistrement</a><br/></li>
                        </lu>
				    </p>
                </div>


                <div class="jeuxVideo">
				    <h2> Base Vidéoludique </h2>
				    <p>
                        <ul>
					        <li><a href="/bibliographie/public/jeux.php">Base de Donnée</a><br/></li>
					        <li><a href="/bibliographie/public/formulaires.php#jeux_video">Formulaires d'enregistrement</a><br /></li>
                        </ul>
				    </p>
                </div>

                <div class="film">
				    <h2> Base Filmographique </h2>
				    <p>
                        <ul>
					        <li><a href="/bibliographie/public/film.php">Base de Donnée</a><br/></li>
    					    <li><a href="/bibliographie/public/formulaires.php#film">Formulaires d'enregistrement</a><br /></li>
                        </ul>
				    </p>
                </div>
				</section>
                </section>
			</main>
		</body>
			<?php include("footer.php") ; ?>
	</html>
