<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Update Candidature </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" media="screen" type="text/css" title="Design" href="design.css"/>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
        <p>
	<section>
        <h1> Récapitulatif pour l'enregistrement des candidatures en archéologie </h1><br/>

<?php

	require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/FONCTION-SQL/input.php');
	UpdateReponseCandidature($_POST);
?>
	</section>
	</p>
	</body>
</html>
