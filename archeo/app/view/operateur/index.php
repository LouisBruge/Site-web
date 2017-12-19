	<table><tr><th> ID </th>
		<th> abreviation </th>
		<th> operateur </th>
		<th> Coordonnées </th> 
		<tr>

<?php
	foreach($listOperateur as $operateur)
	{
		echo '<tr><td><a href="/archeo/public/operateur.php?id=' . $operateur->id() . '"> ' . $operateur->id() . '</td>
			<td>' . $operateur-> abrev() . '</td>
			<td>' . $operateur->operateur() . '</td>
			<td>' . $operateur->ville(). '</td></tr>' ;
	}
?>
	</table>
