	<table><tr><th> ID </th>
			<th> Titre </th>
			<th> Réalisateur </th>
			<th> Année </th>
		</tr>

<?php
	foreach($listFilm AS $film)
	{	
		echo '<tr>	<td><a href="/bibliographie/public/film.php?id= ' . $film->id() . '"> ' . $film->id() . '</td>
			<td>' . $film->titre() . '</td>
			<td>' . $film->realisateur() . '</td>
			<td>' . $film->annee() . '</td></tr>';
	}
?>

	</table>	
