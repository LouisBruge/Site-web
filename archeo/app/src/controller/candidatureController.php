<?php
use griselangue\core\connexion;

class candidatureController
{
	private $_manager;

	public function __construct($session, $base = 'archeo')
	{
		$db = new connexion($base, $session);
		$manager = new candidatureManager($db);
		$this->setManager($manager);
	}

	public function setManager($manager)
	{
		$this->_manager = $manager;
	}

	public function manager()
	{
		return $this->_manager;
	}

	public function listByOperateur($id_operateur)
	{
		$manager = $this->manager();
		$listcandidature = $manager->getListByOperateur($id_operateur);

		if (!empty($listcandidature))
		{
			require ( __DIR__ . '/../../view/candidature/_list.php');
		}
	}
}
?>
