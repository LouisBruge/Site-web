<?php

	function ControllerTitre($donnee)
	{
		if(isset($donnee) AND preg_match('#^[a-zA-Zà-ÿÀ-Ŷ0-9?!" \',.;:_ -]+$#', $donnee))
		{
			return $donnee;
		}
		else
		{
			die('Erreur dans la déclaration du Titre du film');
		}
	}

	function ControllerText($donnee, $type)
	{
		if(isset($donnee) AND preg_match('#^[a-zA-Zà-ÿÀ-Ŷ \',-]+$#', $donnee))
		{
			return $donnee;
		}
		else
		{
			die('Erreur dans la déclaration du/des ' . $type . '(s)');
		}
	}

	function ControllerInt($donnee, $type)
	{
			$donnee = (int) $donnee;
		if(isset($donnee) AND preg_match('#^[0-9]+$#', $donnee))
		{
			$donnee = (int) $donnee;
			return $donnee;
		}
		else
		{
			die('Erreur dans la déclaration de la ' . $type);
		}
	}




?>
