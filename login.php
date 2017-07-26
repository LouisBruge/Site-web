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
							echo 'Connexion à la base de donnée : OK';
							$_SESSION['login'] = htmlspecialchars($_POST['login']);
							$_SESSION['password'] = htmlspecialchars($_POST['password']);
							echo '<br /> Bonjour à toi, ' . $_SESSION['login'];
						}
						catch(PDOEXception $e)
						{
							echo 'Echec : ' . $e->getMessage();
						};
						return($db);
				}
				elseif(isset($_SESSION['login']))
				{
?>
	<h1> Page de membre </h1>
	Bienvenue, <?php echo $_SESSION['login']; ?>, au sein du serveur domestique <br />
	Pour se déconnecter, merci de cliquer sur ce <a href="deconnexion.php"> lien </a> <br />
<?php
				}
			?>
		</section>
	</p>
</body>
</html>

