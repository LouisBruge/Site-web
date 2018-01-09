<?php
namespace griselangue\annuaire\app\src;
class contactManager
{

	// déclaration des variables
	private $_db;

	// fonctions
	public function __construct($db)
	{
		$this->setDb($db);
	}


	// Fonction CRUD standarts
	public function create(contact $contact)
	{
		$q = $this->_db->prepare('INSERT INTO contact (nom, prenom, naissance, mort) VALUES( :nom, :prenom, :naissance, :mort);');

		$q->bindValue(':nom', $contact->nom());
		$q->bindValue(':prenom', $contact->prenom());
		$q->bindValue(':naissance', $contact->naissance());
		$q->bindValue(':mort', $contact->mort());

		$q->execute();
	}

	public function get(int $id)
	{
		$id = (int) $id;

		$q = $this->_db->query('SELECT id, nom, prenom, naissance, mort FROM contact WHERE id = '. $id);
		return new contact($q->fetch(PDO::FETCH_ASSOC));

	}

	public function getList()
	{
		$contacts = [];

		$q = $this -> _db -> query('SELECT id, nom, prenom, naissance, mort FROM contact ORDER BY nom, prenom');

		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$contacts[] = new contact($donnees);
		}

		return $contacts;
	}

	public function update(contact $contact)
	{
		$q = $this->_db->prepare('UPDATE contact SET nom = :nom, prenom = :prenom, naissance = :naissance, mort = :mort WHERE id = :id');

		$q->bindValue(':nom', $contact->nom());
		$q->bindValue(':prenom', $contact->prenom());
		$q->bindValue(':naissance', $contact->naissance());
		$q->bindValue(':mort', $contact->mort());
		$q->bindValue(':id', $contact->id(), PDO::PARAM_INT);

		$q->execute();
	}

	public function destroy(contact $contact)
	{
		$q = $this->_db->exec('DELETE FROM contact WHERE id = ' . $perso->id());
	}

	public function setDb($db)
	{
		$this->_db = $db;
	}

	public function annivMois()
	{
		$contacts = [];

		$q = $this->_db->query("SELECT id, nom, prenom, naissance FROM contact WHERE date_part('month', naissance) = date_part('month', current_date);");

		// boucle d'inclusion dans le tableau contacts
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$contacts[] = new contact($donnees);
		}

		return $contacts;
	}


}

?>
