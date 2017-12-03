<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title> Fiche Jeux </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
</head>
<body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
<p>
	<section>
	<?php

		// Récupération de l'ID de la fiche film par l'url
		if (isset($_GET['id']))
		{
		// transtypage de la variable id	
		$id = (int) $_GET['id'];

		// définition de la variable media
		$media = "jeux";

		// Appel de la fonction ConnectionDB pour se connecter au serveur postgresql et à la base de données
		require($_SERVER['DOCUMENT_ROOT'].'/Login/ConnectionDB.php');
		$db = ConnectionDB();

		// Appel de la fonction fiche_ind_film pour récupérer les données individuelles du film
		require($_SERVER['DOCUMENT_ROOT']. '/BasesDonnees/REQUETES/requete_individuelle.php');
		$requete = fiche_ind_jeux($db, $id);

		// Appel de la fonction Tableau_html pour une mise en forme rapide des données en tableau à 2 colonnes et lignes multiples
		require($_SERVER['DOCUMENT_ROOT'] . '/BasesDonnees/MISE_FORME/jeux.php');
		MiseFormeJeux($requete);

		// Appel de la fonction fiche_ind_genre
		$genre =fiche_ind_genre($db, $id, $media);

		require($_SERVER['DOCUMENT_ROOT'] . '/BasesDonnees/MISE_FORME/liste.php');
		$type = 'genre';
		liste_html($genre, $type); 

		// génération de la liste des supports
		$support = fiche_ind_support($db, $id, $media);
		$type = 'support';
		liste_html($support, $type);

		// génération de la liste des proprios
		$proprio = fiche_ind_proprio($db, $id, $media);
		$type = 'proprio';
		liste_html($proprio, $type);

		// citations
		$citation = requete_citation($db, $id, $media);
		require($_SERVER['DOCUMENT_ROOT'] . '/BasesDonnees/MISE_FORME/citation.php');
		affichage_citation($citation);

		// listings pour la modification de la fiche
		require($_SERVER['DOCUMENT_ROOT'] . '/BasesDonnees/MISE_FORME/donnees_annexes_ajout.php');
		ajout_donnee_annexe($db, $id, $media);

		// enregistrement des données annexes
		require($_SERVER['DOCUMENT_ROOT'] . '/BasesDonnees/ENREG/info_complementaires.php');
		if (isset($_POST['genre']))
		{
			enreg_genre($db, $media, $_POST['genre'], $id);
		}

		if (isset($_POST['support']))
		{
			enreg_support($db, $media, $_POST['support'], $id);
		}
		if (isset($_POST['proprietaire']))
		{
			enreg_proprio($db, $media, $_POST['proprietaire'], $id);
		}


		}
		
		else
		{
			echo "Fiche Film non présente";
		}
?>
			</section>
		</p>
	</main>
	</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
