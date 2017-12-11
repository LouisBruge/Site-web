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
		<th> Contact </th>
		<th> poste </th>
		<th> réponse </th> 
		<th> Commentaire </th>
		<tr>

<?php

	foreach($listCandidature as $candidature)
	{
		echo '<tr><td> <a href="/Archeo/public/candidature.php?id=' . $candidature->id() .'">' . $candidature->id() . '</td>
				<td>' . date('d/m/y', strtotime($candidature->date())) . '</td> 
				<td>' . $candidature->n_annonce() . '</td>
				<td>' . $candidature->operateur() . '</td>
				<td>' . $candidature->prenom() . ' ' . $candidature->nom() . '</td>
				<td>' . $candidature->poste() . '</td>
				<td>' . $candidature->reponse() . '</td>
				<td>' . $candidature->type_rep() . '</td></tr>' ;

	}


?>
	</table>
