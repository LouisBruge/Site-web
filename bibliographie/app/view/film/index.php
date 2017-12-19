<?php

require __DIR__ . '/../../src/controller/media.php';
require __DIR__ . '/../../src/controller/film.php';
require __DIR__ . '/../../src/modele/filmManager.php';
require '/srv/http/moduleConnection.php';

$db = new connectionDb('biblio', $_SESSION['login'], $_SESSION['password']);

$db->connection();

$conn = $db::$pdo;



	$manager = new filmManager($conn);

	$listFilm = $manager->getList();
?>

	<table><tr><th> ID </th>
			<th> Titre </th>
			<th> Réalisateur </th>
			<th> Année </th>
		</tr>

<?php
	foreach($listFilm AS $film)
	{	
		echo '<tr>	<td><a href="/BasesDonnees/public/film.php?id= ' . $film->id() . '"> ' . $film->id() . '</td>
			<td>' . $film->titre() . '</td>
			<td>' . $film->realisateur() . '</td>
			<td>' . $film->annee() . '</td></tr>';
	}
?>

	</table>	
