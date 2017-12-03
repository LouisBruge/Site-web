<?php

	function MiseFormeJeux($donnee)
	{
		echo '<h1> ' . $donnee['titre'] . '</h1>';
		echo 'Éditeur : ' . $donnee['editeur'] . '<br />';
		echo 'Plateforme : ' . $donnee['plateforme'] . '<br />';
		if(!empty($donnee['commentaire']))
		{
			echo '<strong> Commentaire </strong> <br />';
			echo $donnee['commentaire'];
			echo '<br />';
		}
		else
		{
			echo '<br />';
		}
	}
?>
