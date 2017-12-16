<?php
class AuteurManager 
{

	private $_db;

	public function __construct($db)
	{
		$this->setDB($db);
	}

	public function create(Auteur $auteur)
	{
		echo 'Début de l\'enregistrement';

		try{
			$q = $this->_db->prepare('INSERT INTO auteur(nom, prenom) VALUES(:nom, :prenom);');

			$q->bindValue(':nom', $auteur->nom());
			$q->bindValue(':prenom', $auteur->prenom());

			$q->execute();
		}
		catch (Exception $e)
		{
			$e -> getMessages();
		}
		echo 'Fin de l\'enregistrement';
	}

	public function update(Auteur $auteur)
	{
		$q = $this->_db->prepare('UPDATE auteur SET nom = :nom, prenom = :prenom WHERE id = :id');

		$q->bindValue(':nom', $auteur->nom());
		$q->bindValue(':prenom', $auteur->prenom());
		$q->bindValue(':id', $auteur->id(), PDO::PARAM_INT);

		$q->execute();
	}

	public function destroy(Auteur $auteur)
	{
		$this->_db->exec('DELETE FROM auteur WHERE id = '.$perso->id());
	}

	public function getlist()
	{
		$persos = [];

		$q = $this->_db->prepare('SELECT * FROM auteur');
		$q->execute();


		while($donnees = $q->fetch(PDO::FETCH_ASSOC));
		{
			var_dump($donnees);
		}

		return $persos;
	}

	public function get($id)
	{
		$id = (int) $id;

		$q = $this->_db->query('SELECT nom, prenom FROM auteur WHERE id = ' . $id);

		$donnees = $q->fetch(PDO::FETCH_ASSOC);

		return new Auteur($donnees);
	}

	public function setDB( PDO $db)
	{
		$this->_db = $db;
	}
}
?>
