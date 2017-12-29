<?php

class supportManager
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
		$supports = [];

		try {
			$requete = "SELECT s.id, s.support AS support, sm.id_" . $media . " AS idMedia FROM support AS s LEFT JOIN support_" . $media . " AS sm ON sm.id_support = s.id WHERE sm.id_" . $media ." = :id;";
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
			$supports[] = new support($donnees);
		}


		return $supports;


	}
}
?>
