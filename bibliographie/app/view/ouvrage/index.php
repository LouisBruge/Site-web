	<table><tr><th> ID </th>
			<th> Auteur(s) </th>
			<th> Titre </th>
			<th> Editeur </th>
			<th> Année </th>
		</tr>

<?php
	foreach($listouvrage AS $ouvrage)
	{	
		echo '<tr>	<td><a href="/bibliographie/public/ouvrage.php?id= ' . $ouvrage->id() . '"> ' . $ouvrage->id() . '</td>
			<td>' . $ouvrage->auteur() . '</td>
			<td>' . $ouvrage->titre() . '</td>
			<td>' . $ouvrage->editeur() . '</td>
			<td>' . $ouvrage->annee() . '</td></tr>';
	}
?>

	</table>	
