<?php
class operateurShortManager
{
	private $db;

	// construction
	public function __construct($db)
	{
		$this->setDb($db);
	}

	public function setDb($db)
	{
		$this->_db = $db;
	}


	public function getList()
	{
		$operateurs = [];

		$q = $this->_db->query('SELECT id, nom_operateur AS nom, abrev FROM operateur ORDER BY nom_operateur;');

		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$operateurs[] = new operateurShort($donnees);
		}

		return $operateurs;
	}

}
?>
