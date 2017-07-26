<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Récap - candidature</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" media="screen" type="text/css" title="Design" href="design.css"/>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
        <p>
	<section>
        <h1> Récapitulatif pour l'enregistrement des candidatures en archéologie </h1><br/>

<?php

	echo "ID de l'operateur : " . $_POST['operateur'] . '<br />';
	echo "Candidature spontannée ? : " . $_POST['spontannee'] . '<br />';
	echo "Poste : " . $_POST['poste'] . '<br />';
	echo "Support : " . $_POST['support'] . '<br />';
	echo "ID contact : " . $_POST['id_contact'] . '<br />';
	echo "Date d'envoi : " . $_POST['date_envoi'] . '<br />';
	echo "Numéro d'annonce : " . $_POST['n_annonce'] . '<br />';

	require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/FONCTION-SQL/input.php');
	InputCandidature($_POST);
?>
	</section>
	</p>
	</body>
</html>
