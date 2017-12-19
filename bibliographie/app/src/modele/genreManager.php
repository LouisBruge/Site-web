<?php 
namespace bibliographie\modele;
class genreManager
{
	private $_db;

	public function __construct($db)
	{
		$this->setDb($db);
	}

	private function setDb(connexion $db)
	{
		$this->_db = $db;
	}

	public function create(genre $genre)
	{
		$q = $this->_db->prepare('INSERT INTO genre (nom, abreviation, film, ouvrage, jeux) VALUES (:nom, :abreviation, :film, :ouvrage, :jeux);');

		$q->bindValue(':nom', $genre->nom());
		$q->bindValue(':abreviation', $genre->abreviation());
		$q->bindValue(':film', $genre->film());
		$q->bindValue(':ouvrage', $genre->ouvrage());
		$q->bindValue(':jeux', $genre->jeux());

		$q->execute();

	}

	public function get(int $id)
	{
		$id = (int) $id;

		$q = $this->_db->prepare('SELECT id, nom, abreviation, film, ouvrage, jeux FROM genre WHERE id = :id');

		$q->bindParam(':id', $id);

		$q->execute();

		$donnee = $q->fetch(PDO::FETCH_ASSOC);

		return new genre($donnee);
	}

	public function getListBymedia(string $media)
	{

		$genres = [];

		$q = $this->_db->prepare('SELECT id, nom, abreviation FROM genre WHERE :media IS NOT NULL');

		$q->bindParam(':media', $media);

		$q->execute();

		while($donnee = $q->fetch(PDO::FETCH_ASSOC))
		{
			$genres[] = new genre ($donnee);
		}

		return $genres;
		
	}

	public function update(genre $genre)
	{
		$q = $this->_db->prepare('UPDATE genre SET nom = :nom, abreviation = :abreviation, film = :film, ouvrage = :ouvrage, jeux = :jeux WHERE id = :id');

		$q->bindValue(':id', $genre->id());
		$q->bindValue(':nom', $genre->nom());
		$q->bindValue(':abreviation', $genre->abreviation());
		$q->bindValue(':film', $genre->film());
		$q->bindValue(':ouvrage', $genre->ouvrage());
		$q->bindValue(':jeux', $genre->jeux());
	}

}
?>
