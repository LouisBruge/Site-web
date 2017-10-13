<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Formulaires </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
        <p>
	<section>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/FONCTION-SQL/get.php'); ?>

	<?php require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/FORMULAIRE/operateur.php'); ?>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/FORMULAIRE/candidature.php'); ?>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/FORMULAIRE/arrete.php'); ?>
	<?php require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/FORMULAIRE/contact.php'); ?>
	</section>
       </p>
</main>
</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
