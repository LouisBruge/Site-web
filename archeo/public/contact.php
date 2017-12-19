<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> contact </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
</head>
<body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
<p>
	<section>

<?php
	use griselangue\core\connexion;

	//connexion à la base archéologique
	$db = new connexion('archeo', $session);

	require __DIR__ . '/../app/src/controller/contact.php';
	require __DIR__ . '/../app/src/modele/contactManager.php';

	$manager = new contactManager($db);

	if (isset($_GET['id']))
	{
		//Transformation de la variable $_GET['id'] en $id
		$id = (int) $_GET['id'];

		// Envoi de la requête
		$contact = $manager->get($id);

		require( __DIR__ . '/../app/view/contact/show.php');
	}
	else
	{
		$listcontact = $manager->getList();
		require( __DIR__ . '/../app/view/contact/index.php');
	}
?>
	</section>
</p>
</main>
</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
