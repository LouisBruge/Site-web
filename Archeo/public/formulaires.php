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
        <?php include($_SERVER['DOCUMENT_ROOT'].'/Archeo/app/view/form/operateur.php');?>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/Archeo/app/view/form/candidature.php');?>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/Archeo/app/view/form/contact.php');?>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/Archeo/app/view/form/arrete.php');?>
	</section>
       </p>
</main>
</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
