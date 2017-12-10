<?php
class operateurManager
{
	// déclaration des variables de connections
	private $db;

	//function d'initialisation
	public function __construct($db)
	{
		$this->setDb($db);
	}

	//function de connection
	public function setDb($db)
	{
		$this->_db = $db;
	}

	// functions CRUD

	public function create(Operateur $operateur)
	{
		$q = $this->_db->prepare('INSERT INTO operateur (nom_operateur, abrev, secteur, statut_juridique, activite, siren, personnel_min, personnel_max, service, batiment, numero_siege, addresse, complement_addresse, boite_postale, code_postal, ville, code_cedex, departement, region, mail, web, telephone, date_creation) VALUES (:operateur, :abrev, :secteur, :statut_juridique, :activite, :siren, :personnel_min, :personnel_max, :service, :batiment, :numero_siege, :addresse, :complement_addresse, :boite_postale, :code_postal, :ville, :code_cedex, :departement, :region, :mail, :web, :telephone, :date_creation);');

		$q->bindValue('operateur', $operateur->operateur());
		$q->bindValue('abrev', $operateur->abrev());
		$q->bindValue('secteur', $operateur->secteur());
		$q->bindValue('statut_juridique', $operateur->statut_juridique());
		$q->bindValue('activite', $operateur->activite());
		$q->bindValue('siren', $operateur->siren());
		$q->bindValue('personnel_min', $operateur->personnel_min(), PDO::PARAM_INT);
		$q->bindValue('personnel_max', $operateur->personnel_max(), PDO::PARAM_INT);
		$q->bindValue('service', $operateur->service());
		$q->bindValue('batiment', $operateur->batiment());
		$q->bindValue('numero_siege', $operateur->numero_siege());
		$q->bindValue('addresse', $operateur->addresse());
		$q->bindValue('complement_addresse', $operateur->complement_addresse());
		$q->bindValue('boite_postale', $operateur->boite_postale(), PDO::PARAM_INT);
		$q->bindValue('code_postal', $operateur->code_postal(), PDO::PARAM_INT);
		$q->bindValue('ville', $operateur->ville());
		$q->bindValue('cedex', $operateur->cedex());
		$q->bindValue('departement', $operateur->departement());
		$q->bindValue('region', $operateur->region());
		$q->bindValue('mail', $operateur->mail());
		$q->bindValue('web', $operateur->web());
		$q->bindValue('telephone', $operateur->telephone());
		$q->bindValue('date_creation', $operateur->date_creation(), PDO::PARAM_INT);

		$q->execute();
	}

	public function get($id)
	{
		$id = (int) $id;

		$q= $db->prepare('SELECT id, nom_operateur AS operateur, abrev, secteur, statut_juridique, activite, siren, service, batiment, numero_siege, addresse, complement_addresse, code_postal, ville, code_cedex, mail, web, telephone, date_creation, historique FROM operateur WHERE id = :id');
		$q->bindParam(':id', $id, PDO::PARAM_INT);
		$q->execute();
		return new Operateur($q->fetch(PDO::FETCH_ASSOC));
	}

	public function getList()
	{
		$operateurs = [];

		$q = $this->_db->query('SELECT id, nom_operateur AS operateur, upper(abrev) AS abrev, upper(ville) AS ville FROM operateur ORDER BY nom_operateur');

		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$operateurs[] = new Operateur($donnees);
		}


		return $operateurs;
	}

	public function update(Operateur $operateur)
	{
	}

	public function destroy(Operateur $operateur)
	{
		$q = $this->_db->exec('DELETE FROM operateur WHERE id = ' . $operateur->id());
	}
}
