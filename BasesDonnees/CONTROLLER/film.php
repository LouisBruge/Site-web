<?php

	function ControllerFilm($donnee)
	{
		require($_SERVER['DOCUMENT_ROOT'] . '/CONTROLLER/generique.php');
		$donnee['titre'] = ControllerTitre($donnee['titre']);
		$donnee['realisateur'] = ControllerText($donnee['realisateur'], 'réalisateur');
		$donnee['studio'] = ControllerText($donnee['studio'], 'studio');
		$donnee['annee'] = ControllerInt($donnee['annee'], 'date');
		$donnee['duree'] = ControllerInt($donnee['duree'], 'durée');
		$donnee['commentaire'] = htmlspecialchars($donnee['commentaire']);

		return $donnee;

	}
?>



