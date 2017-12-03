<?php


	require($_SERVER['DOCUMENT_ROOT'].'/Login/ConnectionDB.php');
	$db = ConnectionDB();

	function editeur($db, $editeur)
	{
		$commande = "SELECT id, auteur AS auteur, titre AS titre FROM ouvrage WHERE editeur LIKE :editeur ORDER BY titre"; 
		$requete = $db->prepare($commande);
		$requete->bindParam(':editeur', $editeur, PDO::PARAM_STR);
		$requete->execute();
		return ($requete);
	}

	function auteurs($db)
	{
		$commande = "SELECT auteur, count(titre) AS nbre FROM ouvrage GROUP BY auteur ORDER BY auteur";
		$requete = $db->prepare($commande);
		$requete->execute();
		return ($requete);
	}


?>
