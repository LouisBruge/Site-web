<h2> Contacts </h2>
	<table><tr><th> ID </th>
		<th> Nom </th>
		<th> Prenom </th>
		<th> Poste </th>
		<tr>

<?php
	foreach($listcontact as $contact)
	{
		echo '<tr><td><a href="/archeo/public/contact.php?id=' . $contact->id() . '"> ' . $contact->id() . '</td>'
			?>
			<td> <?= $contact->nom(); ?></td>
			<td> <?= $contact->prenom(); ?></td>
			<td> <?= $contact->poste(); ?> </td></tr>
<?php
	}
?>
	</table>
