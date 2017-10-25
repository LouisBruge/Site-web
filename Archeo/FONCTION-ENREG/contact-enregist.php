<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Récap - contact </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
        <p>
	<section>
        <h1> Récaputulatif pour l'enregistrement des contacts</h1><br/>

<?php
	echo "Nom : " . $_POST['nom'] . '<br />';
	echo "Prenom : " . $_POST['prenom'] . '<br />';
	echo "ID de l'opérateur : " . $_POST['operateur'] . '<br />';
	echo "Poste : " . $_POST['poste'] . '<br />';
	echo "Mail : " . $_POST['mail'] . '<br />';
	echo "Téléphone : " . $_POST['telephone'] . '<br />';
	echo "Coordonnées: " . $_POST['coordonnees'] . '<br />';


	require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/FONCTION-SQL/input.php');
	InputContact($_POST);

	?>
	</section>
	</p>
	</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
