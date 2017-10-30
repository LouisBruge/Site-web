<?php

function anniversaire_mois()
{
	require($_SERVER['DOCUMENT_ROOT'] . '/Login/ConnectionDB.php');
	$db = ConnectionDB();

	$reponse = $db->query("SELECT nom, prenom, naissance FROM contact WHERE date_part('month', naissance) = date_part('month', current_date);");

	echo '<br />';
	echo '<h2>Anniversaire(s) du mois</h2>';

	echo '<table> <tr> <th> Contact </th> <th> Anniv </th> </tr>';

	while($donnee = $reponse->fetch())
	{
		echo '<tr><td>' . $donnee['prenom'] . ' ' . $donnee['nom'] . '</td>';
		echo '<td>' . $donnee['naissance'] . '</td></tr>';
	}

	echo '</table>';
	echo '<br />';

	$reponse->closeCursor();
}
