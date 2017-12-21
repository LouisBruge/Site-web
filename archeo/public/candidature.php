<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> candidature </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
</head>
<body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
<p>
	<section>

<?php
	use griselangue\core\connexion;

	require __DIR__ . '/../app/src/controller/candidature.php';
	require __DIR__ . '/../app/src/modele/candidatureManager.php';

	$db = new connexion('archeo', $session);

	// paramètres de connexion
	$manager = new candidatureManager($db);

	if ($_SERVER['REQUEST_METHOD'] === "POST")
	{
		$candidature = new candidature($_POST);
		require( __DIR__ . '/../app/view/candidature/show.php');

		$manager->create($candidature);

	}
	elseif (isset($_GET['id']))
	{
		//Transformation de la variable $_GET['id'] en $id
		$id = (int) $_GET['id'];

		// Envoi de la requête
		$candidature = $manager->get($id);
		require( __DIR__ . '/../app/view/candidature/show.php');
	}
	else
	{
		$listCandidature = $manager->getList();
		require( __DIR__ . '/../app/view/candidature/index.php');
	}
?>
	</section>
</p>
</main>
</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
