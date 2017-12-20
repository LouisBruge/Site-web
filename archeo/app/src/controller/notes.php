<?php 

//namespace archeo\controller;

class notes
{
	protected $_id,
		$_text,
		$_idoperateur,
		$_historique,
		$_source,
		$_web,
		$_dateajout;

	public function __construct(array $array)
	{
		$this->hydrate($array);
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



	// Accessors
	public function id() { return $this->_id; }
	public function text() { return $this->_text; }
	public function idoperateur() { return $this->_idoperateur; }
	public function historique() { return $this->_historique; }
	public function source() { return $this->_source; }
	public function web() { return $this->_web; }
	public function dateAjout() { return $this->_dateajout; }

	public function setId($id)
	{
		$this->_id = $id;
	}

	public function setText($text)
	{
		$this->_text = $text;
	}

	public function setIdoperateur($idOperateur)
	{
		$this->_idoperateur = $idOperateur;
	}

	public function setHistorique($historique)
	{
		$this->_historique = $historique;
	}

	public function setSource($source)
	{
		$this->_source = $source;
	}

	public function setWeb($web)
	{
		$this->_web = $web;
	}

	public function setDateajout($dateAjout)
	{
		$this->_dateajout = $dateAjout;
	}

}
?>
