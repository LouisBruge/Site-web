<?php
class notesManager
{
	protected $_db;

	public function __construct($db)
	{
		$this->setDb($db);
	}

	public funciton setDb($db)
	{
		$this->_db = $db;
	}

	public function create(notes $notes)
	{
		$q = $this->_db->prepare('INSERT INTO notes (note, id_operateur, historique, source, web, date_ajout) VALUES (:text, :idOperateur, :historique, :source, :web, :dateAjout)');

		$q->bindValue(':text', $notes->text());
		$q->bindValue(':idOperateur', $notes->idOperateur(), PDO::PARAM_INT);
		$q->bindValue(':historique', $notes->historique());
		$q->bindValue(':source', $notes->source());
		$q->bindValue(':web', $notes->web());
		$q->bindValue(':dateAjout', $notes->dateAjout());

		$q-> execute();
	}


	public function getListByOperateur(int $id)
	{
		$notes = [];

		$q = $this->_db->prepare('SELECT id, note AS text, id_operateur AS idOperateur, historique, source, web date_ajout AS dateAjout FROM notes WHERE id_operateur = :id ORDER BY date_ajout');

		$q->bindValue(':id', $id, PDO::PARAM_INT);

		$q->execute();

		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$notes[] = new notes($donnees);
		}

		return $notes;
	}

}
?>
