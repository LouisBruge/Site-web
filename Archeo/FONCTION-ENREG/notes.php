<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Récap - Notes </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
        <p>
	<section>

        <h1> Récaputulatif pour l'enregistrement des notes </h1><br/>

<?php
	require($_SERVER['DOCUMENT_ROOT'] . '/MISE_FORME/tableau.php');
	Tableau_html($_POST);
?>

	<br />
		Enregistrement de l'arrêté
	<br />

<?php
	
	require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/CONTROLLER/notes.php');
	$note = ControllerNote($_POST);
	require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/FONCTION-SQL/input.php');
	InputNotes($note);
	?>
	Fin
	</p>
	</section>
	</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
