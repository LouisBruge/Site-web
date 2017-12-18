<?php

namespace griselangue\core;
use \PDO;

Class connexion
{
		private $_dsn;
	public static	$pdo;

	public function __construct(string $dsn, session $session)
	{
		$this->setDsn($dsn);
		$this->connection($session);
	}

	private function connection(session $session)
	{
		if(self::$pdo === null)
		{

			$pdo = new PDO($this->_dsn, $session->login(), $session->password());
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$session->setSession();
			
			self::$pdo = $pdo;
		}

		return self::$pdo;
	}

	public function deconnexion()
	{
		unset(self::$pdo);
	}
	public function setDsn($dsn)
	{
		$this->_dsn = "pgsql:host=localhost;dbname=" . $dsn;
		//echo $dsn;
		
	}

		
}

