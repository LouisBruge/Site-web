<?php

	function ControllerJeux($donnee)
	{
		require($_SERVER['DOCUMENT_ROOT'] . '/BasesDonnees/CONTROLLER/generique.php');
		$donnee['titre'] = ControllerTitre($donnee['titre']);
		$donnee['editeur'] = ControllerText($donnee['editeur'], 'éditeur');
		$donnee['plateforme'] = ControllerPlateforme($donnee['plateforme']);
		$donnee['annee'] = ControllerInt($donnee['annee'], 'date');
		$donnee['commentaire'] = htmlspecialchars($donnee['commentaire']);

		return $donnee;

	}

	function ControllerPlateforme($donnee)
	{
		if(isset($donnee) AND preg_match('#^[a-zA-Z0-9 ]+$#', $donnee))
		{
			return $donnee;
		}
		else
		{
			die('Erreur dans la déclaration de la plateforme');
		}
	}
?>
