<?php
use griselangue\core\connexion;

class contactController
{
	private $_manager;

	public function __construct($session, $base = 'archeo')
	{
		$db = new connexion($base, $session);
		$manager = new contactManager($db);
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
		$listcontact = $manager->getListByOperateur($id_operateur);

		if (!empty($listcontact))
		{
			require ( __DIR__ . '/../../view/contact/_list.php');
		}
	}
}

