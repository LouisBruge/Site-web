<?php

	function MiseFormeOuvrage($donnee)
	{
		echo '<h1> ' . $donnee['titre'] . '</h1>';
		echo 'de ' . $donnee['auteur'] . '<br />';
		if(!empty($donnee['éditeur']))
		{
			echo 'édité par ' . $donnee['éditeur'];
		}
		if(!empty($donnee['ville']))
		{
			echo ' à ' . $donnee['ville'];
		}

		if(!empty($donnee['année']))
		{
			echo ' en ' . $donnee['année'];
			echo '<br />';
		}
		else
		{
			echo '<br />';
		}
		if(!empty($donnee['collection']))
		{
			echo 'Dans la collection ' . $donnee['collection'];
			echo '<br />';
		}
		else
		{
			echo '<br />';
		}

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

