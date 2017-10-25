<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title> Récap - operateur </title>
		<meta charset="utf-8" />
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css" />
	</head>

	<body>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); ?>
	
		<p>
		<section>
			<h1> Récapitulatif pour l'enregistement des opérateurs en archéologique</h1> <br/>

			<?php
				require($_SERVER['DOCUMENT_ROOT'] . '/BasesDonnees/MISE_FORME/tableau.php');
				require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/CONTROLLER/operateur.php');
				$donnee = ControllerOperateur($_POST);

				echo 'Fin de la vérification des données';
				Tableau_html($donnee);
				require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/FONCTION-SQL/input.php');
				InputOperateur($donnee);
			?>
	
		<br />
		<a href="/FORMULAIRES/operateur.php"> Retour vers le formulaire </a>
		</p>
		</section>
	</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>


