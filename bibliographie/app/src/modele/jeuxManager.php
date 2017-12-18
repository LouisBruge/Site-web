<?php
class jeuxManager
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

	public function create(jeux $jeux)
	{
		$q = $this->_db->prepare("INSERT INTO jeux (titre, annee, editeur, plateforme, commentaire) VALUES (:titre, :annee, :editeur, :plateforme, :commentaire)");

		$q->bindValue('titre', $jeux->titre());
		$q->bindValue('annee', $jeux->annee());
		$q->bindValue('editeur', $jeux->editeur());
		$q->bindValue('plateforme', $jeux->plateforme());
		$q->bindValue('commentaire', $jeux->commentaire());

		$q->execute();

	}

	public function get($id)
	{
		$id = (int) $id;

		$q = $this->_db->prepare("SELECT id, titre as titre, annee AS annee, editeur, plateforme, commentaire FROM jeux WHERE id = :id;");
		$q->bindParam(":id", $id);

		$q->execute();

		$donnees = $q->fetch(PDO::FETCH_ASSOC);

		return new jeux($donnees);

	}

	public function getList()
	{
		$jeux = [];

			$q = $this->_db->query("SELECT id, titre as titre, annee AS annee, editeur, plateforme, commentaire FROM jeux ORDER BY titre;");

		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$jeux[] = new jeux($donnees);
		}

		return $jeux;

	}

	public function update(jeux $jeux)
	{
		$q = $this->_db->prepare('UPDATE jeux set titre = :titre, editeur = :editeur, annee = :annee, plateforme = :plateforme, commentaire = :commentaire WHERE id = :id');

		$q->bindValue('id', $jeux->id());
		$q->bindValue('titre', $jeux->titre());
		$q->bindValue('annee', $jeux->annee());
		$q->bindValue('editeur', $jeux->editeur());
		$q->bindValue('plateforme', $jeux->plateforme());
		$q->bindValue('commentaire', $jeux->commentaire());

		$q->execute();
	}

	public function destroy(jeux $jeux)
	{
		$this->_db->exec('DELETE FROM jeux WHERE id = ' . $ouvrage->id());

	}
}
?>
