<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title> Films </title>
		<meta charset="utf-8" />
	    <link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
	</head>
	<body>
        	<?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
	<p>
		<section>
			<h1 id="debut"> Base de données des films</h1>
			<table>
				<tr>
					<th> Editeur </th>
					<th> Nbre</th>
				</tr>
<?php
	require($_SERVER['DOCUMENT_ROOT']. '/BasesDonnees/REQUETES/editeur.php');
	$reponse = editeurs($db);

	while ($donnee = $reponse->fetch())
	{
		echo '<tr><td> ' . $donnee['editeur'] . '</td>
			<td> ' . $donnee['nbre'] . '</td></tr>';
	}

	echo '</table>';
	// fermeture de la base
	$reponse->closeCursor();
?>
	
<a href=#debut>Return vers le début</a>
		</section>	
	</p>
	</main>
	</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>

