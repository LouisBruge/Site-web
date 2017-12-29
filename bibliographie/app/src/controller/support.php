<?php

class support {
	private $_id,
		$_support,
		$_idMedia;

	public function __construct(array $donnees)
	{
		$this->hydrate($donnees);
	}

	// fonction d'hydratation 
	public function hydrate(array $donnees)
	{
		foreach($donnees as $key => $value)
		{
			$method = 'set'.ucfirst($key);
			
			if (method_exists($this, $method))
			{
				$this->$method($value);
			}
		}
	}


	public function id() { return $this->_id;}
	public function support() { return $this->_support;}
	public function idMedia() { return $this->_idMedia;}

	public function setId ($id)
	{
		$this->_id = $id;
	}

	public function setSupport($support)
	{
		$this->_support = $support;
	}

	public function setIdMedia ($idMedia)
	{
		$this->_idMedia = $idMedia;
	}

}
?>
