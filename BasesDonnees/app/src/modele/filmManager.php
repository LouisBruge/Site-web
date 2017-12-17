<?php

class filmManager
{
	private $_db;

	public function __construct($db)
	{
		$this->setDb($db);
	}

	public function setDb($db)
	{
		$this->_db = $db;
	}

	public function create(film $film)
	{
		$q = $this->_db->prepare("INSERT INTO film (titre, realisateur, studio, annee, duree, commentaire) VALUES (:titre, :realisateur, :studio, :annee, :duree, :commentaire)");

		$q->bindValue('titre', $film->titre());
		$q->bindValue('realisateur', $film->realisateur());
		$q->bindValue('studio', $film->studio());
		$q->bindValue('annee', $film->annee());
		$q->bindValue('duree', $film->duree());
		$q->bindValue('commentaire', $film->commentaire());

		$q->execute();
	}

	public function get($id)
	{
		$id = (int) $id;

		$q = $this->_db->prepare("SELECT id, titre, realisateur, studio, annee, duree, commentaire FROM film WHERE id = :id");

		$q->bindParam('id', $id);

		$q->execute();

		$donnees = $q->fetch(PDO::FETCH_ASSOC);

		return new film($donnees);
	}

	public function getList()
	{
		$films = [];

		$q = $this->_db->query("SELECT id, titre, realisateur, studio, annee, duree, commentaire FROM film ORDER BY titre");

		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$films[] = new film($donnees);
		}

		return $films;

	}

	public function update(film $film)
	{
		$q = $this->_db->prepare("UPDATE film SET titre = :titre, realisateur = :realisateur, studio = :studio, annee = :annee, duree = :duree, commentaire = :commentaire WHERE id = :id");

		$q->bindValue('id', $film->id());
		$q->bindValue('titre', $film->titre());
		$q->bindValue('realisateur', $film->realisateur());
		$q->bindValue('studio', $film->studio());
		$q->bindValue('annee', $film->annee());
		$q->bindValue('duree', $film->duree());
		$q->bindValue('commentaire', $film->commentaire());

		$q->execute();

	}

	public function destroy(film $film)
	{
		$this->_db->exec("DELETE FROM film WHERE id = " . $film->db());
	}
}
?>
