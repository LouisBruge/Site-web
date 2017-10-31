<?php

function miseFormeContact($donnee)
{
	echo '<h1> ' . $donnee['prenom'] . ' ' . $donnee['nom'] . '</h1>';
	echo '<h2> État civil </h2>';
	echo '<p> Date de naissance : ' . date('d/m/Y', strtotime($donnee['naissance'])) ; // convertie la date de mois-jour-année en JJ/DD/YYYY, plus lisible en Français
	if (!empty($donnee['mort']))
	{
		echo 'Date de mort : ' . date('d/m/Y', strtotime($donnee['mort'])) . '<br />';
	}
	else
	{
		echo ' (' . $donnee['age'] . ' ans) ';
		echo '<br />';
	}	
	echo '<br />';
	echo '<h2> Coordonnées </h2>';
	if (!empty($donnee['batiment']))
	{
		echo $donnee['batiment'] . '<br />';
	}
	if (!empty($donnee['numero_rue']) AND !empty($donnee['rue']))
	{
		echo  $donnee['numero_rue'] . ', ' . $donnee['rue'] ;
		echo '<br />';
}
if (!empty($donnee['complement']))
	{
		echo ' ' . $donnee['complement'] . ' ';
		echo '<br />';
	}
	if(!empty($donnee['code_postal']))
	{
		echo $donnee['code_postal'] . ' ';
	}
	if(!empty($donnee['ville']))
	{
		echo  $donnee['ville'];
	}
	if (!empty($donnee['cedex']))
	{
		echo ' ' . $donnee['cedex'] . ' ';
	}

	echo '<br />';
	echo '<br />';
	if(!empty($donnee['fixe']))
	{
		echo ' Téléphone fixe : ' . $donnee['fixe'];
	}
	if(!empty($donnee['mobile']))
	{
	echo ' Téléphone mobile : ' . $donnee['mobile'];
	}
	if(!empty($donnee['mail']))
	{
		echo ' mail : ' . $donnee['mail'];
	}
	echo '</p>';
}


