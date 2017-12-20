<?php
use griselangue\core\connexion;

class arreteController
{
	public $_db;

	public function __construct($session, $base = 'archeo')
	{
		$db = new connexion($base, $session);
		$this->setDb($db);
	}

	public function setDb($db)
	{
		$this->_db = $db;
	}

	public function db()
	{
		return $this->_db;
	}

	public function listByOperateur($id)
	{
		$manager = new arreteManager($this->db());
		$Listarretes = $manager->getListByOperateur($id);
		if (!empty($Listarretes))
		{
			require (__DIR__ . '/../../view/arrete/listByOperateur.php');
		}
	}

	public function listgenerale()
	{
		$manager = new arreteManager($this->db());
		$Listarretes = $manager->getList();
		require (__DIR__ . '/../../view/arrete/listByOperateur.php');
	}

}
?>
