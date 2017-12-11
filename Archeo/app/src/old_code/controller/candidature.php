<?php

function controllerCandidature($donnee)
{
	$donnee['operateur'] = controllerInt($donnee['operateur']);
	$donnee['id_contact'] = controllerInt($donnee['id_contact']);
	$donnee['poste'] = controllerPoste($donnee['poste']);
	$donnee['support'] = controllerSupport($donnee['support']);
	$donnee['date_envoi'] = controllerDate($donnee['date_envoi']);
	$donnee['spontannee'] = controllerBoolean($donnee['spontannee']);
	$donnee['n_annonce'] = controllerNumeroAnnonce($donnee['n_annonce']);
}

function controllerReponseCandidature($donnee)
{
	$donnee['id'] = controllerInt($donnee['id']);
	$donnee['reponse'] = htmlspecialchars($donnee['reponse']);
	$donnee['booleanreponse'] = controllerBoolean($donnee['booleanreponse']);
}

function controllerInt($donnee)
{
	$donnee = (int) $donnee;
	if(isset($donnee) AND is_int($donnee))
	{
		return $donnee;
	}
	else
	{
		die("Variable int non définie ou mal définie");
	}
}

function controllerBoolean($donnee)
{
	$donnee = (bool) $donnee;
	if(isset($donnee) AND is_bool($donnee))
	{
		return $donnee;
	}
	else
	{
		die("Variable boolean non définie ou mal définie");	
	}
}

function controllerDate($donnee)
{
	if(isset($donnee) AND preg_match('#^20[0-9]{2}-[0-1][0-9]-[0-3][0-9]$#', $donnee))
	{
		return $donnee;
	}
	else
	{
		die("Variable date non définie ou mal définie");
	}
}

function controllerNumeroAnnonce($donnee)
{
	if(isset($donnee) AND preg_match('#^[A-Z0-9]+$#', $donnee))
	{
		return $donnee;
	}
	elseif(empty($donnee))
	{
		return $donnee = NULL;
	}
	else
	{
		die("Erreur dans la déclaration de la variable Numéro d'annonce");
	}
}

function controllerSupport($donnee)
{
	if(isset($donnee) AND preg_match('#^[a-z _]+$#', $donnee))
	{
		return $donnee;
	}
	else
	{
		die("Variable Support non définie ou mal définie");
	}
}

function controllerPoste($donnee)
{
	if(isset($donnee) AND preg_match('#^[a-zA-Zà-ÿÀ-Ŷ0-9 ,\'-]+$#', $donnee))
	{
		return $donnee;
	}
	else
	{
		die("Variable Poste non définie ou mal définie");
	}
}

