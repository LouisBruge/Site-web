<?php
	function fiche_ind_film($db, $id)
	{ 
		try{
			$req = $db->prepare('SELECT titre AS Titre, realisateur AS realisateur, studio AS studio, annee AS annee, duree AS duree, commentaire AS commentaires FROM film WHERE id = :id;');
			$req->bindParam(":id", $id);
			$req->execute();
			$requete = $req->fetch(PDO::FETCH_ASSOC);
			return ($requete);
		}
		catch(PDOException $e){
			echo 'ERR : ' . $e->getMessage();
		};
	}

	function fiche_ind_jeux($db, $id)
	{ 
		try{
			$req = $db->prepare('SELECT titre AS Titre, editeur AS editeur, annee AS Année, plateforme AS Plateforme, commentaire AS Commentaires FROM jeux WHERE id = :id;');
			$req->bindParam(":id", $id);
			$req->execute();
			$requete = $req->fetch(PDO::FETCH_ASSOC);
			return ($requete);
		}
		catch(PDOException $e){
			echo 'ERR : ' . $e->getMessage();
		};
	}

	function fiche_ind_ouvrage($db, $id)
	{ 
		try{
			$req = $db->prepare('SELECT auteur AS auteur, titre AS Titre, editeur AS éditeur, ville_edition AS ville, date AS année, collection AS Collection, commentaire AS Commentaires FROM ouvrage WHERE id = :id;');
			$req->bindParam(":id", $id);
			$req->execute();
			$requete = $req->fetch(PDO::FETCH_ASSOC);
			return ($requete);
		}
		catch(PDOException $e){
			echo 'ERR : ' . $e->getMessage();
		};
	}

	function fiche_ind_genre($db, $id, $media)
	{
		try{
			$requete = "SELECT genre.nom AS nom FROM genre LEFT JOIN genre_" . $media . " ON genre_" . $media . ".id_genre = genre.id WHERE genre_" . $media . ".id_" . $media . " = :id;";
			$req = $db->prepare($requete);
			$req->bindParam(":id", $id);
			$req->execute();
			return($req);
		}
		catch(PDOException $e){
			echo 'Err : ' . $e->getMessage();
		};
	}

	function fiche_ind_support($db, $id, $media)
	{
		try{
			$requete = "SELECT support.support AS nom FROM support LEFT JOIN support_" . $media . " ON support_" . $media . ".id_support = support.id WHERE support_" . $media . ".id_" . $media . " = :id;";
			$req = $db->prepare($requete);
			$req->bindParam(":id", $id);
			$req->execute();
			return($req);
		}
		catch(PDOException $e){
			echo 'Err : ' . $e->getMessage();
		};
	}

	function fiche_ind_proprio($db, $id, $media)
	{
		try{
			$requete = "SELECT (proprietaire.prenom || ' ' || upper(proprietaire.nom)) AS nom FROM proprietaire LEFT JOIN proprio_" . $media . " ON proprio_" . $media . ".id_proprio = proprietaire.id WHERE proprio_" . $media . ".id_" . $media . " = :id;";
			$req = $db->prepare($requete);
			$req->bindParam(":id", $id);
			$req->execute();
			return($req);
		}
		catch(PDOException $e){
			echo 'Err : ' . $e->getMessage();
		};
	}


	function requete_enreg($db, $titre, $media)
	{
		try{
			$command = "SELECT id AS id FROM " . $media . " WHERE titre = :titre";
			$requete = $db->prepare($command);
			$requete->bindParam(':titre', $titre, PDO::PARAM_STR);
			$requete->execute();
			$fiche = $requete->fetch(PDO::FETCH_ASSOC);
			$id = $fiche['id'];
			return($id);
		}
		catch(PDOException $e){
			echo 'Erreur : ' . $e->getMessage();
		};
	}

	function requete_citation($db, $id, $media)
	{
		try{
			$commande = 'SELECT citation, auteur, reference, date_non_scalaire FROM citation WHERE id_' . $media . ' = :id';
			$commande = $db->prepare($commande);
			$commande->bindParam(':id', $id, PDO::PARAM_INT);
			$commande->execute();
		return $commande;
		}
		catch(PDOException $e){
			echo 'Err : ' . $e->getMessage();
		};
	}

?>
