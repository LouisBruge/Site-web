<?php

require __DIR__ . '/../../src/controller/media.php';
require __DIR__ . '/../../src/controller/ouvrage.php';
require __DIR__ . '/../../src/modele/ouvrageManager.php';
require '/srv/http/moduleConnection.php';

$db = new connectionDb('biblio', $_SESSION['login'], $_SESSION['password']);

$db->connection();

$conn = $db::$pdo;



	$manager = new ouvrageManager($conn);

	$listouvrage = $manager->getList();
?>

	<table><tr><th> ID </th>
			<th> Auteur(s) </th>
			<th> Titre </th>
			<th> Editeur </th>
			<th> Année </th>
		</tr>

<?php
	foreach($listouvrage AS $ouvrage)
	{	
		echo '<tr>	<td><a href="/BasesDonnees/public/ouvrage.php?id= ' . $ouvrage->id() . '"> ' . $ouvrage->id() . '</td>
			<td>' . $ouvrage->auteur() . '</td>
			<td>' . $ouvrage->titre() . '</td>
			<td>' . $ouvrage->editeur() . '</td>
			<td>' . $ouvrage->annee() . '</td></tr>';
	}
?>

	</table>	
