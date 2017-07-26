<?php
function ControllerOperateur($donnee)
{

	echo '<br /> Vérification du statut juridique de la société <br />';

	$donnee['operateur'] = ControllerNom($donnee['operateur']); // controle du nom de l'opérateur
	$donnee['abrev'] = ControllerAbreviation($donnee['abrev']); // controle de l'abréviation
	$donnee['secteur'] = ControllerSecteur($donnee['secteur']); // controle si le statut est défini sur public ou privé
	$donnee['statut_juridique'] = ControllerStatut($donnee['statut_juridique']); // controle du statut juridique
	$donnee['activite'] = ControllerActivite($donnee['activite']) ;
	$donnee['siren'] = ControllerInt($donnee['siren']);

	if(isset($donnee['personnel_min']) AND isset($donnee['personnel_max']) AND $donnee['personnel_min'] <= $donnee['personnel_max']) // controle du personnel
	{
		$donnee['personnel_min'] = ControllerInt($donnee['personnel_min']);
		$donnee['personnel_max'] = ControllerInt($donnee['personnel_max']);
	}
	else
	{
		die(' Le nombre minimal de personnel est supérieur au nombre maximum');
	}

	echo '<br /> Vérification des coordonnées du service ou de l\'entreprise <br />';

	// Controle si le nom du service est défini, et dans ce cas, le controle de la variable est réalisée. Si le nom du service n'est pas défini, c'est le nom de l'opérateur qui est enregistré
	if(isset($donnee['service'])) 
	{
		$donnee['service'] = ControllerNom($donnee['service']);
	}
	elseif(empty($donnee['service']))
	{
		$donnee['service'] = $donnee['operateur'];
	}
	else
	{
		die('Erreur du service');
	}

	// Structure de controle des coordonnées
	$donnee['batiment'] = ControllerAdresse($donnee['batiment']);
	$donnee['numero_siege'] = ControllerNumeroRue($donnee['numero_siege']);
	$donnee['addresse'] = ControllerAdresse($donnee['addresse']);
	$donnee['complement_addresse'] = ControllerAdresse($donnee['complement_addresse']);
	$donnee['boite_postale'] = ControllerBoitePostale($donnee['boite_postale']);
	$donnee['code_postal'] = ControllerInt($donnee['code_postal']);
	$donnee['ville'] = ControllerCollTerritoriale($donnee['ville']);
	$donnee['cedex'] = ControllerCedex($donnee['cedex']);
	$donnee['departement'] = ControllerCollTerritoriale($donnee['departement']);
	$donnee['region'] = ControllerCollTerritoriale($donnee['region']);
	$donnee['mail'] = ControllerMail($donnee['mail']);
	$donnee['web'] = htmlspecialchars($donnee['web']);
	$donnee['telephone'] = ControllerTelephone($donnee['telephone']);
	$donnee['date_creation'] = ControllerInt($donnee['date_creation']);

	return $donnee;
}

function ControllerNom ($donnee)
{
	if(isset($donnee) AND preg_match('#^[a-zA-Zà-ÿÀ-Ŷ0-9 \'-]+$#', $donnee))
	{
		return $donnee;
	}
	else
	{
		die('Erreur du nom de l\'operateur');
	}
}

function ControllerInt ($donnee)
{
	if(isset($donnee))
	{
		$donnee = (int) $donnee;
		return $donnee;
	}
	else
	{
		die(' Erreur dans la déclaration d\'une valeur INT');
	}
}

function ControllerAbreviation($donnee)
{
	if(isset($donnee) AND preg_match('#^[a-zA-Z0-9]+$#', $donnee))
	{
	 	return $donnee;
	}
	else
	{
		die('Erreur dans la déclaration de l\'abréviation');
	}
}

function ControllerSecteur($donnee)
{
	if(isset($donnee) AND preg_match('#^(public|prive)$#', $donnee))
	{
		return $donnee;
	}
	else
	{
		die('Erreur dans la déclaration du secteur');
	}
}

function ControllerStatut($donnee)
{
	if(isset($donnee) AND preg_match('#^[a-zA-Z .]+$#', $donnee))
	{
		return $donnee;
	}
	else
	{
		die('Erreur dans la déclaration du statut');
	}
}

function ControllerActivite($donnee)
{
	if(isset($donnee) AND preg_match('#^[a-zA-Zà-ÿÀ-Ŷ]+$#', $donnee))
	{
		return $donnee;
	}
	else
	{
		die('Erreur dans la déclaration de l\'activité');
	}
}

function ControllerAdresse($donnee)
{
	if(isset($donnee) AND preg_match('#^[a-zA-Zà-ÿÀ-Ŷ0-9 .\'-]+$#', $donnee))
	{
		return $donnee;
	}
	elseif(empty($donnee))
	{
		return $donnee = NULL;
	}
	else
	{
		die('Erreur dans la déclaration de l\'adresse');
	}
}

function ControllerNumeroRue($donnee)
{
	if(isset($donnee) AND preg_match('#[0-9 -]+$#', $donnee))
	{
		return $donnee;
	}
	elseif(empty($donnee))
	{
		return $donnee = NULL;
	}
	else
	{
		die('Erreur dans la déclaration du numéro de rue');
	}
}

function ControllerBoitePostale($donnee)
{
	if(isset($donnee))
	{
		$donnee = (int) $donnee;
		return $donnee;
	}
	elseif(empty($donnee))
	{
		return $donnee = NULL;
	}
	else
	{
		die('Erreur de déclaration de la boite postale');
	}
}

function ControllerCedex($donnee)
{
	if(isset($donnee) AND preg_match('#^CEDEX [0-9]*$#', $donnee))
	{
		return $donnee;
	}
	else
	{
		return $donnee = NULL;
		
	}
}

function ControllerCollTerritoriale($donnee)
{
	if(isset($donnee) AND preg_match('#^[a-zA-Zà-ÿÀ-Ŷ-]+$#', $donnee))
	{
		return $donnee;
	}
	else
	{
		die('Erreur dans la déclaration de la collectivité territoirale');
	}
}

function ControllerMail($donnee)
{
	if(isset($donnee) AND preg_match('#^[0-9a-z._-]+@[0-9a-z_.-]{2,}\.[a-z]{2,4}$#', $donnee))
	{
		return $donnee;
	}
	else
	{
		return $donnee = NULL;
	}
}

function ControllerTelephone($donnee)
{
	if(isset($donnee) AND preg_match('#^(\+[0-9]{2}|0)[0-9]([-. ]?[0-9]{2}){4}$#', $donnee))
	{
		return $donnee;
	}
	else
	{
		return $donnee = NULL;
	}
}


?>
