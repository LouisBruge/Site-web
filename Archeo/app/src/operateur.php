<?php
class Operateur
{
	// définition des variables
	private $_id,
		$_operateur,
		$_abrev,
		$_secteur,
		$_statut_juridique,
		$_activite,
		$_siren,
		$_date_creation,
		$_historique,
		$_service,
		$batiment,
		$_numero_siege;

	public function __construct(array $donnees)
		{
			$this->hydrate($donnees);
		}

	public function hydrate(array $donnees)
	{
		foreach($donnees as $key => $value)
		{
			$method = 'set'.ucfirst($key);
			
			if (method_exists($this, $method))
			{
				$this->method($value);
			}
		}
	}

	// Accessors
	public function id()
	{
		return $this-> _id;
	}

	public function operateur()
	{
		return $this-> _operateur;
	}

	public function abrev()
	{
		return $this-> _abrev;
	}

	public function secteur()
	{
		return $this-> _secteur;
	}

	public function statut_juridique()
	{
		return $this-> _statut_juridique;
	}

	public function activite()
	{
		return $this-> _activite;
	}

	public function siren()
	{
		return $this-> _siren;
	}

	// setters
	public function setId($id) 
	{
		$this->_id = $id;
	}
	
	public function setOperateur($operateur) 
	{
		$this->_operateur= $operateur;
	}

	public function setAbrev($abrev) 
	{
		$this->_abrev= $abrev;
	}

	public function setSecteur($secteur) 
	{
		$this->_secteur= $secteur;
	}

	public function setStatut_juridique($statut_juridique) 
	{
		$this->_statut_juridique= $statut_juridique;
	}

	public function setActivite($activite) 
	{
		$this->_activite= $activite;
	}

	public function setSiren($siren) 
	{
		$this->_siren= $siren;
	}




}
?>
