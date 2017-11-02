<?php
session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title> Canditatures </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
</head>
<body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
	<p>
		<section>
			<?php
				if(isset($_POST['login']) && isset($_POST['password']))
					{
						try
						{
							$login = htmlspecialchars($_POST['login']);
							$passwd = htmlspecialchars($_POST['password']);
							$db = new PDO("pgsql:dbname=biblio;host=localhost", $login, $passwd);
							$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							$_SESSION['login'] = htmlspecialchars($_POST['login']);
							$_SESSION['password'] = htmlspecialchars($_POST['password']);
						}
						catch(PDOEXception $e)
						{
							echo 'Echec : ' . $e->getMessage();
						};
						return($db);
				}
?>
	<h1> Page de membre </h1>
	Bienvenue, <?php echo $_SESSION['login']; ?>, au sein du serveur domestique <br />
	Ce dernier est dédié aux bases de données bibliographiques, vidéoludiques et filmographiques. <br />
	<br />

	<section class="accesDB">
                <div class="biblio">
				    <h2>Base Bibliographique</h2>
				    <p>
                        <ul>
                            <li><a href="/BasesDonnees/SQL/ouvrage.php">Base de Donnée</a><br/></li>
				    	    <li><a href="/BasesDonnees/formulaires.php#monographie">Formulaires d'enregistrement</a><br/></li>
                        </lu>
				    </p>
                </div>


                <div class="jeuxVideo">
				    <h2> Base Vidéoludique </h2>
				    <p>
                        <ul>
					        <li><a href="/BasesDonnees/SQL/jeux_video.php">Base de Donnée</a><br/></li>
					        <li><a href="/BasesDonnees/formulaires.php#jeux_video">Formulaires d'enregistrement</a><br /></li>
                        </ul>
				    </p>
                </div>

                <div class="film">
				    <h2> Base Filmographique </h2>
				    <p>
                        <ul>
					        <li><a href="/BasesDonnees/SQL/film.php">Base de Donnée</a><br/></li>
    					    <li><a href="/BasesDonnees/formulaires.php#film">Formulaires d'enregistrement</a><br /></li>
                        </ul>
				    </p>
                </div>
                </section>
		<section>

	<?php 
		require($_SERVER['DOCUMENT_ROOT'] . '/Annuaire/anniversaire.php');
			anniversaire_mois();
	?>
	Pour se déconnecter, merci de cliquer sur ce <a href="deconnexion.php"> lien </a> <br />
		</section>
	</p>

			</main>
		</body>
			<?php include($_SERVER['DOCUMENT_ROOT']."/footer.php") ; ?>
	</html>
