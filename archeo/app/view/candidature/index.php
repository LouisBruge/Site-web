<?php

	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/controller/candidature.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/modele/candidatureManager.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/connectiondb.php';

	// paramètres de connexion
	$db = connectiondb();

	// génération de la liste
	$manager = new candidatureManager($db);
	

	// Envoi de la requête
	$listCandidature = $manager->getList();
?>

	<table><tr><th> ID </th>
		<th> Date </th>
		<th> Numéro d'annonce </th>
		<th> Opérateur </th>
		<th> poste </th>
		<tr>

<?php

	foreach($listCandidature as $candidature)
	{
		echo '<tr><td> <a href="/Archeo/public/candidature.php?id=' . $candidature->id() .'">' . $candidature->id() . '</td>
				<td>' . date('d/m/y', strtotime($candidature->date_envoi())) . '</td> 
				<td>' . $candidature->n_annonce() . '</td>
				<td>' . $candidature->operateur() . '</td>
				<td>' . $candidature->poste() . '</td>
				</tr>' ;
	}


?>
	</table>
