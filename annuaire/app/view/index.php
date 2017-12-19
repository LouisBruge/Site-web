<?php

	require __DIR__ . '/../contactManager.php';
	require __DIR__ .  '/../contact.php';

	require '/srv/http/moduleConnection.php';

	$db = new connectionDb('biblio', $_SESSION['login'], $_SESSION['password']);

	$db->connection();

	$manager = new contactManager($db::$pdo);

	$contacts = $manager->getList();

	//print_r($contacts);
?>

	<table id="contacts">
	 <tr> 	<th> ID </th>
		 <th> Contacts </th>
		 <th> Date de Naissance </th></tr>';

<?php
	foreach ($contacts as $contact)
	{
		echo '<tr>	<td><a href="/Annuaire/public/annuaire.php?id=' . $contact->id() . '"> ' . $contact->id() . '</td>
		<td> <strong>' . $contact->nom() . '</strong> '. $contact->prenom() . '</td>
		<td>' . date('d / m / Y', strtotime($contact->naissance())) . '</td>
		</tr>';
	}
?>
	</table>
