<?php
class contactManager
{

	// déclaration des variables
	private $_db;

	// fonctions
	public function __construct($db)
	{
		$this->setDb($db);
	}

	public function create(Contact $contact)
	{
		$q = $this->_db->prepare('INSERT INTO contact (nom, prenom, naissance, mort) VALUES( :nom, :prenom, :naissance, :mort);');

		$q->bindValue(':nom', $contact->nom());
		$q->bindValue(':prenom', $contact->prenom());
		$q->bindValue(':naissance', $contact->naissance());
		$q->bindValue(':mort', $contact->mort());

		$q->execute();
	}

	public function get($id)
	{
		$id = (int) $id;

		$q = $this->_db->query('SELECT id, nom, prenom, naissance, mort FROM contact WHERE id = '. $id);
		return new Contact($q->fetch(PDO::FETCH_ASSOC));

	}

	public function getList()
	{
		$contacts = [];

		$q = $this -> _db -> query('SELECT id, nom, prenom, naissance, mort FROM contact ORDER BY nom, prenom');

		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$contacts[] = new Contact($donnees);
		}

		return $contacts;
	}

	public function update(Contact $contact)
	{
		$q = $this->_db->prepare('UPDATE contact SET nom = :nom, prenom = :prenom, naissance = :naissance, mort = :mort WHERE id = :id');

		$q->bindValue(':nom', $contact->nom());
		$q->bindValue(':prenom', $contact->prenom());
		$q->bindValue(':naissance', $contact->naissance());
		$q->bindValue(':mort', $contact->mort());
		$q->bindValue(':id', $contact->id(), PDO::PARAM_INT);

		$q->execute();
	}

	public function destroy(Contact $contact)
	{
		$q = $this->_db->exec('DELETE FROM contact WHERE id = ' . $perso->id());
	}

	public function setDb($db)
	{
		$this->_db = $db;
	}


}

?>
