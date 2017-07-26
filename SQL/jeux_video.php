<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Jeux </title>
	<meta charset="utf-8" />
    <link rel="stylesheet" media="screen" type="text/css" title="Design" href="../design.css"/>
</head>
<body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
<p>
	<section>
<h1 id="debut"> Base de données des jeux</h1>
</p>
<table><tr><th> Titre </th>
           <th> Editeur </th>
           <th> Date </th>
	   <th> Lien </th><tr>
<?php
	// Appel de la fonction ConnectionDB pour se connecter au serveur postgresql et à la base de donnée
	require($_SERVER['DOCUMENT_ROOT'].'/ConnectionDB.php');
	$db = ConnectionDB();

// Selection des donnees
	try {
	$reponse = $db->query("SELECT id, titre AS titre, annee AS date, editeur FROM jeux ORDER BY titre;");
	}

	catch(PDOException $e) {
		echo 'Err : ' . $e->getMessage();
	};


// affichage des donnees
while ($donnee = $reponse->fetch())
{
    echo  '<tr><td><cite> ' . $donnee['titre'] . '</cite></td>
        <td> ' . $donnee['editeur'] . '</td>
        <td> ' . $donnee['date'] . '</td>
	<td><a href="/FICHES/jeux.php?id=' . $donnee['id'] . '">fiche</a></td></tr>';
}
?> </table>
<?php

// fermeture de la base
$reponse->closeCursor();

?>
<p>
<a href=#debut>Return vers le début</a>
		</section>
	</p>
</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>

