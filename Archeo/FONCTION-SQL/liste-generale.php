<?php

require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/connectiondb.php');


function ListeCandidature()
{
?>
	<table><tr><th> ID </th>
		<th> Date </th>
		<th> Numéro d'annonce </th>
		<th> Opérateur </th>
		<th> Contact </th>
		<th> poste </th>
		<th> réponse </th> 
		<th> Commentaire </th>
		<tr>
<?php
		$conn = connectiondb();

		// téléchargement des données
		$reponse = $conn->query('SELECT c.id AS id, o.nom_operateur AS operateur, c.spontannee AS spontanee, c.poste AS poste, c.n_annonce AS n_annonce, c.date_envoi AS date, c.reponse AS reponse, c.type_rep AS type_rep, upper(co.nom) AS nom, co.prenom AS prenom FROM operateur AS o JOIN candidature AS c ON c.id_operateur = o.id LEFT JOIN contact AS co ON c.id_contact = co.id ORDER BY date;');
		while ($donnee = $reponse->fetch())
		{
			echo '<tr><td> <a href="/Archeo/fiche/candidature.php?id=' . $donnee['id'] .'">' . $donnee['id'] . '</td>
				<td>' . $donnee['date'] . '</td>
				<td>' . $donnee['n_annonce'] . '</td>
				<td>' . $donnee['operateur'] . '</td>
				<td>' . $donnee['prenom'] . ' ' . $donnee['nom'] . '</td>
				<td>' . $donnee['poste'] . '</td>
				<td>' . $donnee['reponse'] . '</td>
				<td>' . $donnee['type_rep'] . '</td></tr>' ;
		}


		echo '</table>';

		// fermeture de la base
		$reponse->closeCursor();
}

function ListeOperateur()
{
?>
	<table><tr><th> ID </th>
		<th> abreviation </th>
		<th> operateur </th>
		<th> Coordonnées </th> 
		<tr>
<?php 
		$conn = connectiondb();

		// téléchargement des données
		$reponse = $conn->query('SELECT id, nom_operateur, upper(abrev) AS abrev, upper(ville) AS ville FROM operateur ORDER BY nom_operateur');

		// mise en forme des données sous la forme de tableau
		while ($donnee = $reponse->fetch())
		{
			echo '<tr><td><a href="/Archeo/fiche/operateur.php?id=' . $donnee['id'] . '"> ' . $donnee['id'] . '</td>
				<td>' . $donnee['abrev'] . '</td>
				<td>' . $donnee['nom_operateur'] . '</td>
				<td>' . $donnee['ville'] . '</td></tr>' ;
		}

		echo '</table>';

		// fermeture de la base
		$reponse->closeCursor();
}
?>

