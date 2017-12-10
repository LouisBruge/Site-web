<?php
Class arrete {
	// définitions des variables
	private $_id,
		$_operateur,
		$_paleolithique,
		$_neolithique,
		$_protohistoire,
		$_romain,
		$_medieval,
		$_moderne,
		$_contemporain;

	// fonction d'initialisation
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


	// accessors
	public function id()
	{
		return $this->_id;
	}

	public function operateur()
	{
		return $this->_operateur;
	}

	public function paleolithique()
	{
		return $this->_paleolithique;
	}

	public function neolithique()
	{
		return $this->_neolithique;
	}

	public function protohistoire()
	{
		return $this->_protohistoire;
	}

	public function romain()
	{
		return $this->_romain;
	}

	public function medieval()
	{
		return $this->_medieval;
	}

	public function moderne()
	{
		return $this->_moderne;
	}

	public function contemporain()
	{
		return $this->_contemporain;
	}

	// setters
	public function setId($id)
	{
		$this->_id= $id;
	}

	public function setOperateur($operateur)
	{
		$this->_operateur= $operateur;
	}

	public function setPaleolithique($paleolithique)
	{
		$this->_paleolithique= $paleolithique;
	}

	public function setNeolithique($neolithique)
	{
		$this->_neolithique= $neolithique;
	}

	public function setProtohistoire($protohistoire)
	{
		$this->_protohistoire= $protohistoire;
	}

	public function setRomain($romain)
	{
		$this->_romain= $romain;
	}

	public function setMedieval($medieval)
	{
		$this->_medieval= $medieval;
	}

	public function setModerne($moderne)
	{
		$this->_moderne= $moderne;
	}

	public function setContemporain($contemporain)
	{
		$this->_contemporain= $contemporain;
	}


}
?>
