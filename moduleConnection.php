<?php

Class connectionDb
{
	private $_user,
		$_password,
		$_dsn,
		$_pdo;

	public function __construct($dsn, $user, $password)
	{
		$this->setUser($user);
		$this->setPassword($password);
		$this->setDsn($dsn);
	}

	public function connection()
	{
		if($this->_pdo === null){


			try
			{
				$pdo = new PDO($this->_dsn, $this->_user, $this->_password);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch (PDOException $e)
			{
				echo 'Echec de la connexion : ' . $e->getMessage();
			}

			$this->_pdo = $pdo;
		}

		return $this->_pdo;
	}

	public function deconnexion()
	{
		unset($this->_pdo);
	}
	public function setDsn($dsn)
	{
		$this->_dsn = "pgsql:host=localhost;dbname=" . $dsn;
		echo $dsn;
		
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

