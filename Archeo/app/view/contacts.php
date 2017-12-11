<?php

	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/controller/contact.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/modele/contactManager.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/connectiondb.php';

	// paramètres de connexion
	$db = connectiondb();

	// génération de la liste
	$manager = new contactManager($db);
	
	$listcontact = $manager->getList();

?>
	<table><tr><th> ID </th>
		<th> Nom </th>
		<th> Prenom </th>
		<th> Société </th>
		<th> Poste </th>
		<tr>

<?php
	foreach($listcontact as $contact)
	{
		echo '<tr><td><a href="/Archeo/public/contact.php?id=' . $contact->id() . '"> ' . $contact->id() . '</td>
			<td>' . $contact->nom() . '</td>
			<td>' . $contact->prenom() . '</td>
			<td>' . $contact->operateur() . '</td>
			<td>' . $contact->poste(). '</td></tr>' ;
	}
?>
	</table>
