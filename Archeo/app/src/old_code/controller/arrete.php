<?php

function controllerArrete($donnee)
{
	$operateur = controllerInt($donnee['operateur']);
	$annee = controllerDate($donnee['annee']);
	$diagnostic = controllerBoolean($donnee['neolithique']);
	$fouille = controllerBoolean($donnee['fouille']);
	$paleolithique = controllerBoolean($donnee['paleolithique']);
	$neolithique = controllerBoolean($donnee['neolithique']);
	$protohistoire = controllerBoolean($donnee['protohistoire']);
	$romain = controllerBoolean($donnee['romain']);
	$medieval = controllerBoolean($donnee['medieval']);
	$moderne = controllerBoolean($donnee['moderne']);
	$contemporain = controllerBoolean($donnee['contemporain']);
	return $donnee;
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

?>
