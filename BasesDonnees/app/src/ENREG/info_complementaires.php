<?php

function enreg_info_compl($db, $id, $type_media, $id_genre, $id_support, $id_proprio)
{
enreg_genre($db, $type_media, $id_genre, $id);
enreg_support($db, $type_media, $id_support, $id);
enreg_proprio($db, $type_media, $id_proprio, $id);
}

function enreg_genre($db, $type_media, $id_genre, $id)
{
	// préparation de la requête pour l'enregistrement du genre
	$requete = "INSERT INTO genre_" . $type_media . " (id_genre, id_" .$type_media . ") VALUES (:id_genre, :id)";
	$req = $db->prepare($requete);
		$req->execute(array(
			':id_genre' => $id_genre,
			':id' => $id
		)
	);
}
	
function enreg_support($db, $type_media, $id_support, $id)
{
	// préparation de la requête pour l'enregistrement du support
	$requete = "INSERT INTO support_" . $type_media . " (id_support, id_" .$type_media . ") VALUES (:id_support, :id)";
	$req = $db->prepare($requete);
		$req->execute(array(
			':id_support' => $id_support,
			':id' => $id
		)
	);
}

function enreg_proprio($db, $type_media, $id_proprio, $id)
{

	// préparation de la requête pour l'enregistrement du proprio
	$requete = "INSERT INTO proprio_" . $type_media . " (id_proprio, id_" .$type_media . ") VALUES (:id_proprio, :id)";
	$req = $db->prepare($requete);
		$req->execute(array(
			':id_proprio' => $id_proprio,
			':id' => $id
		)
	);
}

	function enreg_citation($db, $type_media, $citation, $auteur, $reference, $id_media, $date_scalaire, $siecle, $date_non_scalaire)
		{
			try{
				$requete =  "INSERT INTO citation (citation, auteur, reference, id_" . $type_media . ", date_scalaire, siecle, date_non_scalaire) VALUES (:citation, :auteur, :reference, :id_media, :date_scalaire, :siecle, :date_non_scalaire)";
				$req = $db->prepare($requete);
				$req->execute(array(
					':citation' => $citation,
					':auteur' => $auteur,
					':reference' => $reference,
					':id_media' => $id_media,
					':date_scalaire' => $date_scalaire,
					':siecle' => $siecle,
					':date_non_scalaire' => $date_non_scalaire
				)
			);
			}
			catch(PDOException $e){
				echo 'Err : ' . $e->getMessage();
			};
	}
?>
