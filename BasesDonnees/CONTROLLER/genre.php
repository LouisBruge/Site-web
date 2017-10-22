<?php

	function ControllerGenre($donnee)
	{
		$donnee['nom'] = ControllerNom($donnee['nom']);
		$donnee['abreviation'] = ControllerAbrev($donnee['abreviation']);
		$donnee['film'] = ControllerBoolean($donnee['film'], 'film');
		$donnee['ouvrage'] = ControllerBoolean($donnee['ouvrage'], 'ouvrage');
		$donnee['jeux'] = ControllerBoolean($donnee['jeux'], 'jeux');

		return $donnee;
	}


	function ControllerNom($donnee)
	{
		if(isset($donnee) AND preg_match('#^[a-zA-Z -]+$#', $donnee))
		{
			return $donnee;
		}
		else
		{
			die('Erreur dans la déclaration du nom');
		}
	}

	function ControllerAbrev($donnee)
	{
		if(isset($donnee) AND preg_match('#^[a-zA-Z -]{1,20}$#', $donnee))
		{
			return $donnee;
		}
		else
		{
			die('Erreur dans la déclaration du nom');
		}
	}
	function ControllerBoolean($donnee, $type)
	{
		if(isset($donnee) AND preg_match('#^(TRUE|FALSE)$#', $donnee))
		{
			$donnee = (bool) $donnee;
			return $donnee;
		}
		else
		{
			die('Erreur dans la déclaration du type booléean du ' . $type);
		}
	}
?>

