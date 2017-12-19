	<table><tr><th> ID </th>
		<th> Date </th>
		<th> Numéro d'annonce </th>
		<th> Opérateur </th>
		<th> poste </th>
		<tr>

<?php

	foreach($listCandidature as $candidature)
	{
		echo '<tr><td> <a href="/archeo/public/candidature.php?id=' . $candidature->id() .'">' . $candidature->id() . '</td>
				<td>' . date('d/m/y', strtotime($candidature->date_envoi())) . '</td> 
				<td>' . $candidature->n_annonce() . '</td>
				<td>' . $candidature->operateur() . '</td>
				<td>' . $candidature->poste() . '</td>
				</tr>' ;
	}


?>
	</table>
