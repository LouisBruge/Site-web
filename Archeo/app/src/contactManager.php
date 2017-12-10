<?php
Class contactManager
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
	public function create(contact $contact)
	{
		$q = $this->_db->prepare('INSERT INTO contact (nom, prenom, id_operateur, poste, mail, tel, coordonnes) VALUES(:nom, :prenom, :operateur, :poste, :mail, :tel, :coordonnes)');

		$q->bindValue('nom', $contact->nom(), PDO::PARAM_STR);
		$q->bindValue('prenom', $contact->prenom(), PDO::PARAM_STR);
		$q->bindValue('operateur', $contact->operateur(), PDO::PARAM_INT);
		$q->bindValue('poste', $contact->poste(), PDO::PARAM_STR);
		$q->bindValue('mail', $contact->mail(), PDO::PARAM_STR);
		$q->bindValue('tel', $contact->tel(), PDO::PARAM_STR);
		$q->bindValue('coordonnes', $contact->coordonnes(), PDO::PARAM_STR);
	}

	public function get($id)
	{
		$id = (int) $id;

		$q = $this->_db->prepare('SELECT id, nom, prenom, id_operateur AS operateur, post, mail, tel, coordonnes, remarques FROM contact WHERE id = :id');

		$q->bindParam(':id', $id, PDO::PARAM_INT);

		$q->execute();

		return new contact ($q -> fetch(PDO::FETCH_ASSOC));
	}

	public function getList()
	{
		$contacts= [];

		$q = $this->_db->query('SELECT id, nom, prenom, id_operateur AS operateur, post, mail, tel, coordonnes, remarques FROM contact ORDER BY nom, prenom');

		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$arretes[] = new contact($donnees);
		}

		return $contacts;
	}

	public function destroy(contact $contact)
	{
		$q = $this->_db->exec('DELETE FROM contact WHERE id = ' . $contact->id());
	}
	
}
?>
