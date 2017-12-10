<?php

function verificationContact($donnee)
{
	$data['nom'] = checkMot($donnee['nom']);
	$data['prenom'] = checkMot($donnee['prenom']);
	$data['naissance'] = checkDates($donnee['naissance']);
	$data['mort'] = checkDates($donnee['mort']);
	$data['batiment'] = checkBatiment($donnee['batiment']);
	$data['numero_rue'] = checkNumeroRue($donnee['numero_rue']);
	$data['rue'] = checkRue($donnee['rue']);
	$data['complement'] = checkComplement($donnee['complement']);
	$data['code_postal'] = checkCodePostal($donnee['code_postal']);
	$data['ville'] = checkVille($donnee['ville']);
	$data['cedex'] = checkCedex($donnee['cedex']);
	$data['mail'] = checkMail($donnee['mail']);
	$data['fixe'] = checkTel($donnee['fixe']);
	$data['mobile'] = checkTel($donnee['mobile']);

	return $data;
}

function checkMot($donnee)
{
	do
	{
	if(preg_match('#^[a-zA-Zà-ÿÀ-Ÿ -]+$#', $donnee))
	{
		return $donnee;
	}
	else
	{
		echo 'Erreur dans la déclaration de la variable nom <br />'; 
		break;
	}
	}
	while (false);
}

function checkDates($donnee)
{
	if(isset($donnee) AND preg_match('#^(19|20)[0-9]{2}-[0-1][0-9]-[0-3][0-9]$#', $donnee))
		{
			return $donnee;
		}
		else
		{
			return $donnee = NULL;
		}
}

function checkNumeroRue($donnee)
{
	if(isset($donnee) AND preg_match('#^[0-9]+$#', $donnee))
	{
		return $donnee;
	}
	else
	{
		return $donnee = NULL;
	}
}

function checkCodePostal($donnee)
{
	$donnee = (int) $donnee;
	if(isset($donnee) AND is_int($donnee))
	{
		return $donnee;
	}
	else
	{
		return $donnee = NULL;
	}
}

function checkRue($donnee)
{
	if(isset($donnee) AND preg_match('#^[a-zà-ÿA-ZÀ-Ÿ0-9. -]+$#', $donnee))
	{
		return $donnee;
	}
	else 
	{
		return $donnee = NULL;
	}
}

function checkBatiment($donnee)
{
	if(isset($donnee) AND preg_match('#^[a-zà-ÿA-ZÀ-Ÿ0-9. -]+$#', $donnee))
	{
		return $donnee;
	}
	else 
	{
		return $donnee = NULL;
	}
}


function checkComplement($donnee)
{
	if(isset($donnee) AND preg_match('#^[a-zà-ÿA-ZÀ-Ÿ0-9. -]+$#', $donnee))
	{
		return $donnee;
	}
	else 
	{
		return $donnee = NULL;
	}
}

function checkMail($donnee)
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

function checkTel($donnee)
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

function checkVille($donnee)
{
	if(isset($donnee) AND preg_match('#^[a-zA-Zà-ÿÀ-Ÿ -]+$#', $donnee))
	{
		return $donnee;
	}
	else
	{
		return $donnee = NULL;
	}
}


function checkCedex($donnee)
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
?>
