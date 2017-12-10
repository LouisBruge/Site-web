<?php
Class candidatureManager
{

	private $_db;


	// fonction d'initialisation
	public function __construct($db)
	{
		$this->setDb($db);
	}

	// setters
	public function setDb($db)
	{
		$this->_db = $db;
	}

	// fonctions CRUD
	public function create(candidature $candidature)
	{
	$q = $this->_db->prepare('INSERT INTO candidature (id_operateur, spontannee, poste, support, id_contact, date_envoi, n_annonce) VALUES(:operateur, :spontannee, :poste, :support, :contact, :date_envoi, :n_annonce)');
	$q->bindValue('operateur', $candidature->operateur(), PDO::PARAM_INT);
	$q->bindValue('contact', $candidature->contact(), PDO::PARAM_INT);
	$q->bindValue('poste', $candidature->poste(), PDO::PARAM_STR);
	$q->bindValue('spontannee', $candidature->spontannee(), PDO::PARAM_BOOL);
	$q->bindValue('support', $candidature->support(), PDO::PARAM_STR);
	$q->bindValue('date_envoi', $candidature->date_envoi());
	$q->bindValue('n_annonce', $candidature->n_annonce(), PDO::PARAM_STR);

	$q->execute();
	
	}

	public function get($id)
	{
		$id = (int) $id;

		$q = $this->_db->prepare('SELECT id, id_operateur AS operateur, id_contact AS contact, poste, spontannee, date_envoi, n_annonce FROM candidature WHERE id = :id');

		$q->bindParam(':id', $id, PDO::PARAM_INT);

		$q->execute();

		return new candidature($q -> fetch(PDO::FETCH_ASSOC));
	}

	public function getList()
	{
		$candidatures = [];
		
		$q = $this->_db->query('SELECT id, id_operateur AS operateur, id_contact AS contact, poste, spontannee, date_envoi, n_annonce FROM candidature ORDER_BY date_envoi ');


		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$candidatures[] = new candidature($donnees);
		}

		return $candidatures;
	}

	public function destroy(candidature $candidature)
	{
		$q = $this->_db->exec('DELETE FROM candidature WHERE id = ' . $candidature->id());
	}
}
?>
