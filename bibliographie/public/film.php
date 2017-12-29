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

	// requête pour les proprios
	require __DIR__ . '/../app/src/modele/proprietaireManager.php';
	require __DIR__ . '/../app/src/controller/proprietaire.php';

	// requête pour les genres 
	require __DIR__ . '/../app/src/modele/genreManager.php';
	require __DIR__ . '/../app/src/controller/genre.php';

	$db = new connexion('biblio', $session);

	$manager = new filmManager($db);

	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		$film = new film($_POST);
		require( __DIR__ . '/../app/view/film/show.php');
		$manager->create($film);

	}

	elseif (isset($_GET['id']))
	{
		$id = (int) $_GET['id'];
		$film = $manager->get($id);
		require( __DIR__ . '/../app/view/film/show.php');

		$managerproprio = new proprietaireManager($db);
		$listproprietaires = $managerproprio->getListByMedia('film', $id);
		require( __DIR__ . '/../app/view/proprietaire/_list.php');


		$managergenre= new genreManager($db);
		$listgenre= $managergenre->getListBymediaAndId('film', $id);
		require( __DIR__ . '/../app/view/genre/_list.php');

		// requête pour les supports 
		require __DIR__ . '/../app/src/modele/supportManager.php';
		require __DIR__ . '/../app/src/controller/support.php';

		$managersupport= new supportManager($db);
		$listsupport= $managersupport->getListByMedia('film', $id);
		require( __DIR__ . '/../app/view/support/_list.php');

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
