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
        <?php include($_SERVER['DOCUMENT_ROOT'].'/archeo/app/view/operateur/_form.php');?>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/archeo/app/view/candidature/_form.php');?>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/archeo/app/view/contact/_form.php');?>
	</section>
       </p>
</main>
</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
