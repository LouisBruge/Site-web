<?php

require __DIR__ . '/../../src/controller/media.php';
require __DIR__ . '/../../src/controller/jeux.php';
require __DIR__ . '/../../src/modele/jeuxManager.php';
require '/srv/http/moduleConnection.php';

$db = new connectionDb('biblio', $_SESSION['login'], $_SESSION['password']);

$db->connection();

$conn = $db::$pdo;



	$manager = new jeuxManager($conn);

	$listjeux = $manager->getList();
?>

	<table><tr><th> ID </th>
			<th> Titre </th>
			<th> Editeur </th>
			<th> Plateforme </th>
			<th> Année </th>
		</tr>

<?php
	foreach($listjeux AS $jeux)
	{	
		echo '<tr>	<td><a href="/BasesDonnees/public/jeux.php?id= ' . $jeux->id() . '"> ' . $jeux->id() . '</td>
			<td>' . $jeux->titre() . '</td>
			<td>' . $jeux->editeur() . '</td>
			<td>' . $jeux->plateforme() . '</td>
			<td>' . $jeux->annee() . '</td></tr>';
	}
?>

	</table>	
