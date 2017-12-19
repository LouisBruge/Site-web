<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Operateur </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
</head>
<body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
<p>
	<section>
<?php
	use griselangue\core\connexion;

	require __DIR__ . '/../app/src/controller/operateur.php';
	require __DIR__ . '/../app/src/modele/operateurManager.php';

	$db = new connexion('archeo', $session);

	// paramètres de connexion
	$manager = new operateurManager($db);


	if (isset($_GET['id']))
	{
	//Transformation de la variable $_GET['id'] en $id
	$id = (int) $_GET['id'];

	// Envoi de la requête
	$operateur = $manager->get($id);
		require( __DIR__ . '/../app/view/operateur/show.php');
	}
	else
	{
		$listOperateur = $manager->getList();
		require( __DIR__ . '/../app/view/operateur/index.php');
	}
?>
	</section>
</p>
</main>
</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
