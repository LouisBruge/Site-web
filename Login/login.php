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
				}
?>
	<h1> Page de membre </h1>
	Bienvenue, <?php echo $_SESSION['login']; ?>, au sein du serveur domestique <br />
	Ce dernier est dédié aux bases de données bibliographiques, vidéoludiques et filmographiques. <br />
	<br />
	Pour se déconnecter, merci de cliquer sur ce <a href="deconnexion.php"> lien </a> <br />
		</section>
	</p>

			</main>
		</body>
			<?php include($_SERVER['DOCUMENT_ROOT']."/footer.php") ; ?>
	</html>
