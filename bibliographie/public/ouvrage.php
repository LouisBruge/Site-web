<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Fiche ouvrages </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
</head>
<body>
        <?php require($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
<p>
	<section>

	<?php
	require __DIR__ . '/../app/src/controller/media.php';
	require __DIR__ . '/../app/src/controller/ouvrage.php';
	require __DIR__ . '/../app/src/modele/ouvrageManager.php';


	// requête pour les proprios
	require __DIR__ . '/../app/src/modele/proprietaireManager.php';
	require __DIR__ . '/../app/src/controller/proprietaire.php';

	use griselangue\core\connexion;
	$db = new connexion('biblio', $session);
	$manager = new ouvrageManager($db);


	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		$ouvrage= new ouvrage($_POST);
		require( __DIR__ . '/../app/view/ouvrage/show.php');
		$manager->create($ouvrage);
	}
	elseif (isset($_GET['id']))
	{
		$id = (int) $_GET['id'];
		$ouvrage = $manager->get($id);
		require( __DIR__ . '/../app/view/ouvrage/show.php');

		$managerproprio = new proprietaireManager($db);
		$listproprietaires = $managerproprio->getListByMedia('ouvrage', $id);
		require( __DIR__ . '/../app/view/proprietaire/_list.php');

	}
	else
	{
		$listouvrage = $manager->getList();
		require( __DIR__ . '/../app/view/ouvrage/index.php');
	}
?>

			</section>
		</p>
	</main>
	</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
