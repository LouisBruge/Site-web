<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Fiche Films </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
</head>
<body>
        <?php require($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
<p>
	<section>


	<?php
	use griselangue\core\connexion;

	require __DIR__ . '/../app/src/controller/media.php';
	require __DIR__ . '/../app/src/controller/film.php';
	require __DIR__ . '/../app/src/modele/filmManager.php';

	$db = new connexion('biblio', $session);

	$manager = new filmManager($db);

	if (isset($_GET['id']))
	{
		$id = (int) $_GET['id'];
		$film = $manager->get($id);
		require( __DIR__ . '/../app/view/film/show.php');
	}
	else
	{
		$listFilm = $manager->getList();
		require( __DIR__ . '/../app/view/film/index.php');
	}
?>

			</section>
		</p>
	</main>
	</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
