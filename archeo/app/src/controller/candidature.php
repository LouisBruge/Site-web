<?php
//namespace archeo\controller;
Class candidature
{
	private $_id,
		$_operateur,
		$_contact,
		$_poste,
		$_support,
		$_date_envoi,
		$_spontannee,
		$_n_annonce;


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

	public function id()
	{
		return $this->_id;
	}

	public function operateur()
	{
		return $this->_operateur;
	}

	public function contact()
	{
		return $this->_contact;
	}

	public function poste()
	{
		return $this->_poste;
	}

	public function support()
	{
		return $this->_support;
	}

	public function date_envoi()
	{
		return $this->_date_envoi;
	}

	public function spontannee()
	{
		return $this->_spontannee;
	}

	public function n_annonce()
	{
		return $this->_n_annonce;
	}

	public function setId($id)
	{
		$this->_id= $id;
	}

	public function setOperateur($operateur)
	{
		$this->_operateur= $operateur;
	}

	public function setContact($contact)
	{
		$this->_contact= $contact;
	}

	public function setPoste($poste)
	{
		$this->_poste= $poste;
	}

	public function setSupport($support)
	{
		$this->_support= $support;
	}

	public function setDate_envoi($date_envoi)
	{
		$this->_date_envoi= $date_envoi;
	}

	public function setSpontannee($spontannee)
	{
		$this->_spontannee= $spontannee;
	}

	public function setN_annonce($n_annonce)
	{
		$this->_n_annonce= $n_annonce;
	}


}

?>
