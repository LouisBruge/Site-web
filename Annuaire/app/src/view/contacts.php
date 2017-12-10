<?php
	require($_SERVER['DOCUMENT_ROOT'] . '/Login/ConnectionDB.php');

	require __DIR__ . '/../contactManager.php';
	require __DIR__ .  '/../contact.php';


	$db = ConnectionDB(); 


	$manager = new contactManager($db);

	$contacts = $manager->getList();

	//print_r($contacts);

	echo '<table id="contacts"> <tr> <th> ID </th> <th> Contacts </th> <th> Date de Naissance </th></tr>';

	foreach ($contacts as $contact)
	{
		echo '<tr>';
		echo '<td> ' . $contact->id() . ' </td>';
		echo '<td> <strong>' . $contact->nom() . '</strong> '. $contact->prenom() . '</td>';
		echo '<td>' . date('d / m / Y', strtotime($contact->naissance())) . '</td>'; // conversion de la date au format européen
		echo '</tr>';
	}
	
	echo '</table>';


?>
