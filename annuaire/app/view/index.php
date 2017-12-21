	<table id="contacts">
	 <tr> 	<th> ID </th>
		 <th> Contacts </th>
		 <th> Date de Naissance </th></tr>

<?php
	foreach ($contacts as $contact)
	{
		echo '<tr>	<td><a href="/annuaire/public/annuaire.php?id=' . $contact->id() . '"> ' . $contact->id() . '</td>
		<td> <strong>' . $contact->nom() . '</strong> '. $contact->prenom() . '</td>
		<td>' . date('d-m-Y', strtotime($contact->naissance())) . '</td>
		</tr>';
	}
?>
	</table>
