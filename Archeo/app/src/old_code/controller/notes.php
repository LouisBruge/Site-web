<?php
function ControllerNote($donnee)
{
	$donnee['operateur'] = ControllerInt($donnee['operateur']);
	$donnee['note'] = ControllerTextNote($donnee['note']);
	$donnee['historique'] = ControllerBoolean($donnee['historique']);

	// Structure de controle de la présence au mininum d'une source 
	if(empty($donnee['source']) AND empty($donnee['web']))
	{
		die('Aucune source enregistrée');
	}
	elseif(isset($donnee['web']) AND empty($donnee['source']))
	{
		$donnee['web'] = ControllerWeb($donnee['web']);
		$donnee['source'] = NULL;
	}
	elseif(isset($donnee['source']) AND empty($donnee['web']))
	{
		$donnee['source'] = ControllerSource($donnee['source']);
		$donnee['web'] = NULL;
	}
	else
	{
		die('Entre les sources, il faut choisir');
	}
	return $donnee;

}

function ControllerInt($donnee)
{
	if(isset($donnee))
	{
		$donnee = (int) $donnee;
		if(is_int($donnee))
		{
			return $donnee;
		}
		else
		{
			die('Erreur de définition de la variable INT');
		}
	}
	else
	{
		die('Variable INT non définie');
	}
			
}

function ControllerBoolean($donnee)
{
	if(isset($donnee))
	{
		$donnee = (bool) $donnee;
		if(is_bool($donnee))
		{
			return $donnee;
		}
		else
		{
			die('Erreur de définition de la variable Boolean');
		}
	}
	else
	{
		die('Variable Boolean non définie');
	}
}

function ControllerTextNote($donnee)
{
	if(isset($donnee))
	{
		return $donnee;
	}
	else
	{
		die('Erreur, le corps de la note est absent ou invalide');
	}
}

function ControllerSource($donnee)
{
	if(isset($donnee) AND preg_match('#^[a-zA-Zà-ÿÀ-Ŷ0-9 ",.-]+$#', $donnee))
	{
		return $donnee;
	}
	elseif(empty($donnee))
	{
		return $donnee = NULL;
	}
	else
	{
		die('Erreur, la source est invalide');
	}
}

function ControllerWeb($donnee)
{
	if(isset($donnee))
	{
		$donnee = htmlspecialchars($donnee);
		return $donnee;
	}
	elseif(empty($donnee))
	{
		return $donnee = NULL;
	}
	else
	{
		die('Erreur, l\'adresse web est invalide');
	}
}
?>
