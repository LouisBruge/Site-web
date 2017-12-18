<?php

namespace \griselangue\core;

Class connexion
{
	public $_user,
		$_password,
		$_dsn;
	public static	$pdo;

	public function __construct($dsn, session $session)
	{
		$this->setUser($session->setLogin());
		$this->setPassword($session->setPassword());
		$this->setDsn($dsn);
	}

	public function connection()
	{
		if(self::$pdo === null){


			try
			{
				$pdo = new PDO($this->_dsn, $this->_user, $this->_password);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch (PDOException $e)
			{
				echo 'Echec de la connexion : ' . $e->getMessage();
			}

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

	public function setUser($user)
	{
		$this->_user = $user;
	}


	public function setPassword($password)
	{
		$this->_password = $password;
	}
		
}

