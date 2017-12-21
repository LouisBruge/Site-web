<?php
//namespace archeo\controller;
class operateurShort
{
	private $_id,
		$_nom,
		$_abrev;

	public function __construct($donnees)
	{
		$this->hydrate($donnees);
	}

	public function hydrate(array $donnees)
	{
		foreach($donnees as $key => $value)
		{
			$method = 'set'. ucfirst($key);
			if (method_exists($this, $method))
			{
				$this->$method($value);
			}
		}
	}

	//accessors
	public function id()
	{
		return $this -> _id;
	}

	public function nom()
	{
		return $this->_nom;
	}

	public function abrev()
	{
		return $this->_abrev;
	}

	//setters
	public function setId($id)
	{
		$this->_id = $id;
	}

	public function setNom($nom)
	{
		$this->_nom = $nom;
	}

	public function setAbrev($abrev)
	{
		$this->_abrev = $abrev;
	}
		
}
?>
