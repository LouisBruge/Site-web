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
	<?php require( __DIR__ . '/../app/src/MODELE/get.php'); ?>

	<?php require(__DIR__ . '/../app/view/operateur.php'); ?>
	<?php require(__DIR__ . '/../app/view/candidature.php'); ?>
	<?php require(__DIR__ . '/../app/view/arrete.php'); ?>
	<?php require(__DIR__ . '/../app/view/contact.php'); ?>
	</section>
       </p>
</main>
</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
