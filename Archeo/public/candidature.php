<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Candidature </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
</head>
<body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
<p>
	<section>

	<h1> Candidature </h1>

<?php
	if(isset($_GET['id']))
	{
		require( __DIR__ . '/../app/src/MODELE/get.php');
		$valeur = GetCandidatureUnique($_GET['id']); // affichage des informations liées à la candidature et récupération de l'id de l'opérateur
?>

	<h1> Opérateur </h1>

<?php
		GetOperateur($valeur['operateur']);
?>

	<h1> Contact </h1>
<?php
		GetContactsUnique($valeur['contact']);

		require(__DIR__ . '/../app/view/candidature-update.php');
	}
	else
	{
		require(__DIR__ . '/../app/src/MODELE/liste-generale.php');
		ListeCandidature() ;
	}
?>
	<a href=#debut>Retourn vers le début</a>

	</section>
</p>
</main>
</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
