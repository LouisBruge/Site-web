<?php
namespace archeo\controller;
Class contact
{
	private $_id,
		$_nom,
		$_prenom,
		$_operateur,
		$_poste,
		$_mail,
		$_tel,
		$_coordonnes,
		$_remarques;


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

	public function nom()
	{
		return $this->_nom;
	}

	public function prenom()
	{
		return $this->_prenom;
	}

	public function operateur()
	{
		return $this->_operateur;
	}

	public function poste()
	{
		return $this->_poste;
	}

	public function mail()
	{
		return $this->_mail;
	}

	public function tel()
	{
		return $this->_tel;
	}

	public function coordonnes()
	{
		return $this->_coordonnes;
	}

	public function remarques()
	{
		return $this->_remarques;
	}

	public function setId($id)
	{
		$this->_id= $id;
	}

	public function setNom($nom)
	{
		$this->_nom= $nom;
	}

	public function setPrenom($prenom)
	{
		$this->_prenom= $prenom;
	}

	public function setOperateur($operateur)
	{
		$this->_operateur= $operateur;
	}

	public function setPoste($poste)
	{
		$this->_poste= $poste;
	}

	public function setMail($mail)
	{
		$this->_mail= $mail;
	}

	public function setTel($tel)
	{
		$this->_tel= $tel;
	}

	public function setCoordonnes($coordonnes)
	{
		$this->_coordonnes= $coordonnes;
	}

	public function setRemarques($remarques)
	{
		$this->_remarques= $remarques;
	}

}
?>
