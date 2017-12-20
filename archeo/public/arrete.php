<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> arrete </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
</head>
<body>
        <?php include('/srv/http/menu.php'); //ajout du menu dans le texte ?>
<p>
	<section>
<?php
	use griselangue\core\connexion;
	use griselangue\core\session;

	require __DIR__ . '/../app/src/controller/arrete.php';
	require __DIR__ . '/../app/src/modele/arreteManager.php';
	require __DIR__ . '/../app/src/arreteController.php';

	$db = new arreteController($session);

	// paramètres de connexion
	$manager = $db->listgenerale();
?>
	</section>
</p>
</main>
</body>
</html>
