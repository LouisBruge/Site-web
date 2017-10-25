<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Récap - Arrêtés </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
        <p>
	<section>

        <h1> Récaputulatif pour l'enregistrement des arrêtés </h1><br/>

<?php
	require($_SERVER['DOCUMENT_ROOT'] . '/MISE_FORME/tableau.php');
	Tableau_html($_POST);
	require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/CONTROLLER/arrete.php');
	$donnee = controllerArrete($_POST);
?>

	<br />
		Enregistrement de l'arrêté
	<br />

<?php
	
	require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/FONCTION-SQL/input.php');
	InputArrete($donnee);
	?>
	Fin
	</p>
	</section>
	</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
