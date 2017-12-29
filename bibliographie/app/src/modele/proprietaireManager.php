<?php

class proprietaireManager
{
	private $_db;

	public function __construct($db)
	{
		$this->setDb($db);
	}

	public function setDb(PDO $db)
	{
		$this->_db = $db;
	}

	public function getListByMedia($media, int $idMedia)
	{
		$idMedia = (int) $idMedia;
		$proprios = [];

		try {
			$requete = "SELECT p.id, p.prenom AS prenom, p.nom AS nom, pm.id_" . $media . " AS idMedia FROM proprietaire AS p LEFT JOIN proprio_" . $media . " AS pm ON pm.id_proprio = p.id WHERE pm.id_" . $media ." = :id;";
			$req = $this->_db->prepare($requete);
			$req->bindParam(":id", $idMedia);
			$req->execute();


		}
		catch(PDOException $e)
		{
			$e ->getMessages();
		}

		while($donnees = $req->fetch(PDO::FETCH_ASSOC))
		{
			$proprios[] = new proprietaire($donnees);
		}


		return $proprios;


	}
}
?>
