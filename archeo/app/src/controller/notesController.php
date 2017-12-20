<?php

use griselangue\core\connexion;

class notesController
{
	public $_manager;

	public function __construct($session, $base = 'archeo')
	{
		$db = new connexion($base, $session);
		$manager = new notesManager($db);
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
		$listnotes = $manager->getListByOperateur($id_operateur);

		if (!empty ($listnotes))
		{
			require __DIR__ . '/../../view/notes/_list.php';
		}


	}
}
?>
