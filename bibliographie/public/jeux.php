<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Fiche jeuxs </title>
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
	require __DIR__ . '/../app/src/controller/jeux.php';
	require __DIR__ . '/../app/src/modele/jeuxManager.php';

	$db = new connexion('biblio', $session);
	$manager = new jeuxManager($db);


	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		$jeux = new jeux($_POST);
		require( __DIR__ . '/../app/view/jeux/show.php');
		$manager->create($jeux);
	}
	elseif (isset($_GET['id']))
	{
		$id = (int) $_GET['id'];
		$jeux = $manager->get($id);
		require( __DIR__ . '/../app/view/jeux/show.php');
	}
	else
	{
		$listjeux = $manager->getList();
		require( __DIR__ . '/../app/view/jeux/index.php');
	}
?>

			</section>
		</p>
	</main>
	</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
