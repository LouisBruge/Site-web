<?php

class ouvrageManager
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

	public function create(ouvrage $ouvrage)
	{
		try{
			$q = $this->_db->prepare('INSERT INTO ouvrage (auteur, titre, editeur, date, ville_edition, collection, commentaire) VALUES (:auteur, :titre, :editeur, :date, :ville_edition, :collection, :commentaire');


			$q->bindValue(':auteur', $ouvrage->auteur());
			$q->bindValue(':titre', $ouvrage->titre());
			$q->bindValue(':editeur', $ouvrage->editeur());
			$q->bindValue('date', $ouvrage->annee());
			$q->bindValue('ville_edition',$ouvrage->ville());
			$q->bindValue('collection', $ouvrage->commentaire());

			$q->execute();
		}
		catch (Exception $e)
		{
			$e->getMessages();
		}
	}

	public function get($id)
	{
		$id = (int) $id;

		$q = $this->_db->prepare('SELECT auteur AS auteur, titre AS titre, editeur AS editeur, ville_edition AS ville, date AS annee, collection AS collection, commentaire AS commentaire FROM ouvrage WHERE id = :id;');
		$q->bindParam(":id", $id);
		$q->execute();

		$donnees = $q->fetch(PDO::FETCH_ASSOC);

		return new ouvrage($donnees);
	}

	public function getList()
	{
		$ouvrages = [];

		$q = $this->_db->query('SELECT auteur AS auteur, titre AS titre, editeur AS editeur, ville_edition AS ville, date AS annee, collection AS collection, commentaire AS commentaire FROM ouvrage ORDER BY auteur, titre, annee;');


		while($donnees = $q->fetch(PDO::FETCH_ASSOC));
		{
			$ouvrages = new ouvrage($donnees);
		}

		return $ouvrages;
	}

	public function update(ouvrage $ouvrage)
	{

		$q = $this->_db->prepare('UPDATE ouvrage set id = :id, auteur = :auteur, titre = :titre, editeur = :editeur, date = :date, ville_edition = :ville, collection = :collection, commentaire = :commentaire WHERE id = :id');


		$q->bindValue(':id', $ouvrage->id());
		$q->bindValue(':auteur', $ouvrage->auteur());
		$q->bindValue(':titre', $ouvrage->titre());
		$q->bindValue(':editeur', $ouvrage->editeur());
		$q->bindValue('date', $ouvrage->annee());
		$q->bindValue('ville_edition',$ouvrage->ville());
		$q->bindValue('collection', $ouvrage->commentaire());

		$q->execute();
	}

	public function destroy(ouvrage $ouvrage)
	{
		$this->_db->exec('DELETE FROM ouvrage WHERE id = ' . $ouvrage->id());
	}
}
?>
