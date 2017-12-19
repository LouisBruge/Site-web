	<table><tr><th> ID </th>
			<th> Titre </th>
			<th> Editeur </th>
			<th> Plateforme </th>
			<th> Année </th>
		</tr>

<?php
	foreach($listjeux AS $jeux)
	{	
		echo '<tr>	<td><a href="/bibliographie/public/jeux.php?id= ' . $jeux->id() . '"> ' . $jeux->id() . '</td>
			<td>' . $jeux->titre() . '</td>
			<td>' . $jeux->editeur() . '</td>
			<td>' . $jeux->plateforme() . '</td>
			<td>' . $jeux->annee() . '</td></tr>';
	}
?>

	</table>	
