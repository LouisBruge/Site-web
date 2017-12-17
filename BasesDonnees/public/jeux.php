<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Fiche jeuxs </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
</head>
<body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
<p>
	<section>

	<?php

	if (isset($_GET['id']))
	{
		require( __DIR__ . '/../app/view/jeux/show.php');
	}
	else
	{
		require( __DIR__ . '/../app/view/jeux/index.php');
	}
?>

			</section>
		</p>
	</main>
	</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
