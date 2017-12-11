<?php

	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/controller/operateur.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/modele/operateurManager.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/connectiondb.php';

	// paramètres de connexion
	$db = connectiondb();

	// génération de la liste
	$manager = new operateurManager($db);
	
	$listOperateur = $manager->getList();

?>
	<table><tr><th> ID </th>
		<th> abreviation </th>
		<th> operateur </th>
		<th> Coordonnées </th> 
		<tr>

<?php
	foreach($listOperateur as $operateur)
	{
		echo '<tr><td><a href="/Archeo/public/operateur.php?id=' . $operateur->id() . '"> ' . $operateur->id() . '</td>
			<td>' . $operateur-> abrev() . '</td>
			<td>' . $operateur->operateur() . '</td>
			<td>' . $operateur->ville(). '</td></tr>' ;
	}
?>
	</table>
