<?php

	function MiseFormeFilm($donnee)
	{
		echo '<h1> ' . $donnee['titre'] . '</h1>';
		echo 'de ' . $donnee['realisateur'] . '<br />';
	       	echo 'produit en ' . $donnee['annee'] . ' par ' . $donnee['studio'] . '<br />';	

		require($_SERVER['DOCUMENT_ROOT'] . '/MISE_FORME/min2heure.php');
		min2heure($donnee['duree']);
		echo ' <br />';

		if(!empty(donnee['commentaires']))
		{
			echo '<strong> Comentaires : <strong> <br />';
			echo $commentaires;
			echo '<br />';
		}
		else
		{
			echo '<br />';
		}
	}

