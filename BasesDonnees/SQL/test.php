<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title> Recherche </title>
	<meta charset="utf-8" />
    	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="../design.css"/>
</head>
<body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
<p>
<section>
<h1 id="debut"> Résultats</h1>
<?php
if (isset($_POST['recherche']))
{
	$titre = '%' . htmlspecialchars($_POST['recherche']) . '%';

	// liste des fichiers requis pour le fonctionnement de la vue
	require($_SERVER['DOCUMENT_ROOT'] . '/ConnectionDB.php');
	require($_SERVER['DOCUMENT_ROOT'] . '/REQUETES/recherche.php');
	require($_SERVER['DOCUMENT_ROOT'] . '/MISE_FORME/tableau.php');
	
	$db = connectionDB();

	// génération de la liste des ouvrages
	$ouvrage = requete_ouvrage($db, $titre);
	tableau_ouvrage($ouvrage);

	// génération de la liste des films 
	$film = requete_film($db, $titre);
	tableau_film($film);

	// génération de la liste des jeux 
	$jeux = requete_jeux($db, $titre);
	tableau_jeux($jeux);
}
else 
{
	echo "Erreur!!!";
}
?>
<a href=#debut> Retour vers le haut </a>
<section>
</p>
</body>
</html>
