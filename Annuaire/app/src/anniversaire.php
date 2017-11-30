<?php

function anniversaire_mois()
{
	require($_SERVER['DOCUMENT_ROOT'] . '/Login/ConnectionDB.php');
	$db = ConnectionDB();

	$reponse = $db->query("SELECT id, nom, prenom, naissance, EXTRACT(YEAR FROM age(naissance)) AS age FROM contact WHERE date_part('month', naissance) = date_part('month', current_date);");

	echo '<br />';
	echo '<h2>Anniversaire(s) du mois</h2>';

	echo '<table> <tr> <th> Contact </th> <th> Anniv </th> <th> Age </th> </tr>';

	while($donnee = $reponse->fetch())
	{
		echo '<tr><td><a href="/Annuaire/annuaire.php?id=' . $donnee['id'] . '">' . $donnee['prenom'] . ' ' . $donnee['nom'] . '</a></td>';
        echo '<td> Né le : ' . date('d/m/Y', strtotime($donnee['naissance'])) . '</td>';
        echo '<td>' . $donnee['age'] . ' ans</td></tr>';
	}

	echo '</table>';
	echo '<br />';

	$reponse->closeCursor();
}
