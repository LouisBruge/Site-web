<?php
Class arreteManager {

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

	public function create(arrete $arrete)
	{
		$q = $this->_db->prepare('INSERT INTO arrete (id_operateur, annee, diagnostic, fouille, paleolithique, neolithique, protohistoire, romain, medieval, moderne, contemporain) VALUES (:operateur, :annee, :diagnostic, :fouille, :paleolithique, :neolithique, :protohistoire, :romain, :medieval, :moderne, :contemporain)');

		$q->bindValue(':operateur', $arrete->operateur());
		$q->bindValue(':annee', $arrete->annee());
		$q->bindValue(':diagnostic', $arrete->diagnostic());
		$q->bindValue(':fouille', $arrete->fouille());
		$q->bindValue(':paleolithique', $arrete->paleolithique());
		$q->bindValue(':neolithique', $arrete->neolithique());
		$q->bindValue(':protohistoire', $arrete->protohistoire());
		$q->bindValue(':romain', $arrete->romain());
		$q->bindValue(':medieval', $arrete->medieval());
		$q->bindValue(':moderne', $arrete->moderne());
		$q->bindValue(':contemporain', $arrete->contemporain());

		$q->execute();

	}

	public function update(arrete $arrete)
	{
		$q = $this->_db->prepare('UPDATE arrete SET id_operateur = :operateur, annee = :annee, diagnostic = :diagnostic, fouille = :fouille, paleolithique = :paleolithique, neolithique = :neolithique, protohistoire = :protohistoire, romain = :romain, medieval = :medieval, moderne = :moderne, contemporain = :contemporain WHERE id = :id;');

		$q->bindValue(':id', $arrete->id(), PDO::PARAM_INT);
		$q->bindValue(':operateur', $arrete->operateur());
		$q->bindValue(':annee', $arrete->annee());
		$q->bindValue(':diagnostic', $arrete->diagnostic());
		$q->bindValue(':fouille', $arrete->fouille());
		$q->bindValue(':paleolithique', $arrete->paleolithique());
		$q->bindValue(':neolithique', $arrete->neolithique());
		$q->bindValue(':protohistoire', $arrete->protohistoire());
		$q->bindValue(':romain', $arrete->romain());
		$q->bindValue(':medieval', $arrete->medieval());
		$q->bindValue(':moderne', $arrete->moderne());
		$q->bindValue(':contemporain', $arrete->contemporain());

		$q->execute();


	}

	public function get($id)
	{
		$id = (int) $id;

		$q = $this->_db->prepare('SELECT id, id_operateur AS operateur, annee, fouille, diagnostic, paleolithique, neolithique, protohistoire, romain, medieval, moderne, contemporain FROM arrete WHERE id = :id');
		$q->bindParam(':id', $id, PDO::PARAM_INT);

		$q->execute();

		return new arrete ($q -> fetch(PDO::FETCH_ASSOC));
	}

	public function getList()
	{
		$arretes = [];

		$q = $this->_db->query('SELECT id, id_operateur AS operateur, annee, fouille, diagnostic, paleolithique, neolithique, protohistoire, romain, medieval, moderne, contemporain FROM arrete ORDER BY annee');

		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$arretes[] = new arrete($donnees);
		}

		return $arretes;
	}

	public function destroy(arrete $arrete)
	{
		$q = $this->_db->exec('DELETE FROM arrete WHERE id = ' . $arrete->id());
	}
	
}

?>
