<?php

	function ControllerOuvrage($donnee)
	{
		require($_SERVER['DOCUMENT_ROOT'] . '/CONTROLLER/generique.php');
		$donnee['titre'] = ControllerTitre($donnee['titre']);
		$donnee['auteur'] = ControllerText($donnee['auteur'], 'auteur');
		$donnee['editeur'] = ControllerText($donnee['editeur'], 'éditeur');
	       	$donnee['ville'] = ControllerVille($donnee['ville']);
		$donnee['collection'] = ControllerCollection($donnee['collection']);
		$donnee['annee'] = ControllerInt($donnee['annee'], 'date');
		$donnee['commentaire'] = htmlspecialchars($donnee['commentaire']);

		return $donnee;

	}

	function ControllerVille($donnee)
	{
		if(isset($donnee) AND preg_match('#^[a-zA-Zà-ÿÀ-Ŷ-]+$#', $donnee))
		{
			return $donnee;
		}
		elseif(empty($donnee))
		{
			return $donnee = NULL;
		}
		else
		{
			die('Erreur dans la déclaration de la ville');
		}
	}

	function ControllerCollection($donnee)
	{
		if(isset($donnee) AND preg_match('#^[a-zA-Zà-ÿÀ-Ŷ,.;:!\' -]+$#', $donnee))
		{
			return $donnee;
		}
		elseif(empty($donnee))
		{
			return $donnee = NULL;
		}
		else
		{
			die('Erreur dans la déclaration de la collection');
		}
	}

?>
