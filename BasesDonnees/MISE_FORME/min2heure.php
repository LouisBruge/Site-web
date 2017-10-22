<?php
	// convertisseur de durée de minutes vers heures et minutes
	function min2heure($dureeInitiale)
	{
		$heure = intdiv($dureeInitiale, 60); // division euclidienne pour récupérer l'heure
		$min = $dureeInitiale % 60;

		if($heure > 1 AND $min > 1)
		{
			echo "Durée : " . $heure . " heures et " . $min . " minutes ";
		}
		if($heure > 1 AND $min <= 1)
		{
			echo "Durée : " . $heure . " heures et " . $min . " minute ";
		}
		elseif($heure == 1 AND $min > 1)
		{
			echo "Durée : " . $heure . " heure et " . $min . " minutes ";
		}
		elseif($heure == 1 AND $min <= 1)
		{
			echo "Durée : " . $heure . " heure et " . $min . " minute ";
		}
		elseif($heure == 0 AND $min > 1)
		{
			echo "Durée : " . $min . " minutes ";
		}
		else
		{
			echo "Erreur dans la déclaration de la variable";
		}
			



	}

?>

