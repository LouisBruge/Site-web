<?php
session_start(); 
use griselangue\core\autoloader;
use griselangue\core\connexion;
use griselangue\core\session;

require __DIR__ . '/../core/autoloader.php';

autoLoader::register();

?>

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
						$user = new session($_POST['login'], $_POST['password']);
						$db = new connexion('biblio', $user);
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
