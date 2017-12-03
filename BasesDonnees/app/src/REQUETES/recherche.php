<?php

	function requete_generale($db, $titre)
	{
		echo '<h1> Ouvrage(s) </h1>';
		requete_ouvrage($db, $titre);
		echo '<h1> Film(s) </h1>';
		requete_film($db, $titre);
		echo '<h1> Jeux </h1>';
		requete_jeux($db, $titre);
	}

	function requete_film($db, $titre)
	{
		try
		{
			$commande = 'SELECT id, titre AS titre, annee AS date, realisateur FROM film 
WHERE titre ILIKE :titre ORDER BY titre' ;
			$requete = $db->prepare($commande);
			$requete->bindParam(':titre', $titre, PDO::PARAM_STR);
			$requete->execute();
//			$reponse = $requete->fetch(PDO::FETCH_ASSOC);
			return ($requete);
		}
		catch(PDOException $e)
		{
			echo 'Erreur : ' . $e->getMessage();
		};
	}



	function requete_ouvrage($db, $titre)
	{
		try
		{
			$commande = 'SELECT id, auteur AS auteur, titre AS titre, date AS date FROM ouvrage 
WHERE titre ILIKE :titre ORDER BY titre' ;
			$requete = $db->prepare($commande);
			$requete->bindParam(':titre', $titre, PDO::PARAM_STR);
			$requete->execute();
		//	$reponse = $requete->fetch(PDO::FETCH_ASSOC);
			return ($requete);
		}
		catch(PDOException $e)
		{
			echo 'Erreur : ' . $e->getMessage();
		};
	}
			

	function requete_jeux($db, $titre)
	{
		try
		{
			$commande = 'SELECT id, titre AS titre, annee AS date, editeur FROM jeux 
WHERE titre ILIKE :titre ORDER BY titre' ;
			$requete = $db->prepare($commande);
			$requete->bindParam(':titre', $titre, PDO::PARAM_STR);
			$requete->execute();
//			$reponse = $requete->fetch(PDO::FETCH_ASSOC);
			return ($requete);
		}
		catch(PDOException $e)
		{
			echo 'Erreur : ' . $e->getMessage();
		};
	}
