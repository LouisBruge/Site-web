<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Monographie </title>
	<meta charset="utf-8" />
    <link rel="stylesheet" media="screen" type="text/css" title="Design" href="../design.css"/>
</head>
<body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
<p>
	<section>
<h1 id="debut"> Base de données monographique</h1>
</p>
<table><tr><th> Auteur(s) </th>
           <th> Titre </th>
           <th> Editeur </th>
           <th> Date </th>
	   <th> Liens </th> <tr>
<?php
	// Appel de la fonction ConnectionDB pour se connecter au serveur postgresql et à la base de donnée
	require($_SERVER['DOCUMENT_ROOT'].'/ConnectionDB.php');
	$db = ConnectionDB();

// Selection des donnees
	try {
	$reponse = $db->query("SELECT auteur, id, titre AS titre, date AS date, editeur FROM ouvrage ORDER BY titre;");
	}
	catch(PDOException $e) {
		echo 'Erreur : <br /> ' . $e->getMessage();
	};

// affichage des donnees
while ($donnee = $reponse->fetch())
{
    echo  '<tr><td>' . $donnee['auteur'] . '</td>
        <td><cite> ' . $donnee['titre'] . '</cite></td>
        <td> ' . $donnee['editeur'] . '</td>
        <td> ' . $donnee['date'] . '</td>
	<td><a href="/FICHES/ouvrage.php?id=' . $donnee['id'] . '">fiche</a></td></tr>';
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
</html>

