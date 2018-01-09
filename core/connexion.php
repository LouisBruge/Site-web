<?php

namespace griselangue\core;
use \PDO;

Class connexion extends PDO
{
		private $_dsn;

	public function __construct(string $dsn, session $session)
	{
		$this->setDsn($dsn);
		try{
			parent::__construct($this->_dsn, $session->login(), $session->password());
			$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			$e -> getMessages();
		}
	}

        /*
         *
         *function qui renvoi une variable string, avec l'host et le nom de la base de donnéee
         *
         */

	private function setDsn(string $dsn)
	{
		$this->_dsn = "pgsql:host=localhost;dbname=" . $dsn;
		//echo $dsn;
		
	}

		
}

