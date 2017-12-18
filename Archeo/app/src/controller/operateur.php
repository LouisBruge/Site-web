<?php
namespace archeo\controller;
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
		$_batiment,
		$_numero_siege,
		$_addresse,
		$_complement_addresse,
		$_boite_postale,
		$_code_postal,
		$_ville,
		$_code_cedex,
		$_departement,
		$_region,
		$_pays,
		$_mail,
		$_web,
		$_telephone,
		$_personnel_min,
		$_personnel_max;


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
	public function personnel_max()
	{
		return $this->_personnel_max;
	}

	public function personnel_min()
	{
		return $this->_personnel_min;
	}

	public function telephone()
	{
		return $this->_telephone;
	}

	public function web()
	{
		return $this->_web;
	}

	public function mail()
	{
		return $this->_mail;
	}

	public function pays()
	{
		return $this->_pays;
	}

	public function region()
	{
		return $this->_region;
	}

	public function departement()
	{
		return $this->_departement;
	}

	public function code_cedex()
	{
		return $this->_code_cedex;
	}

	public function ville()
	{
		return $this->_ville;
	}

	public function code_postal()
	{
		return $this->_code_postal;
	}

	public function boite_postale()
	{
		return $this->_boite_postale;
	}

	public function complement_addresse()
	{
		return $this->_complement_addresse;
	}

	public function addresse()
	{
		return $this->_addresse;
	}

	public function numero_siege()
	{
		return $this->_numero_siege;
	}

	public function batiment()
	{
		return $this->_batiment;
	}

	public function service()
	{
		return $this->_service;
	}

	public function historique()
	{
		return $this->_historique;
	}

	public function date_creation()
	{
		return $this->_date_creation;
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

	public function setPersonnel_max($personnel_max)
	{
		$this->_personnel_max= $personnel_max;
	}

	public function setPersonnel_min($personnel_min)
	{
		$this->_personnel_min= $personnel_min;
	}

	public function setTelephone($telephone)
	{
		$this->_telephone= $telephone;
	}

	public function setWeb($web)
	{
		$this->_web= $web;
	}

	public function setMail($mail)
	{
		$this->_mail= $mail;
	}

	public function setPays($pays)
	{
		$this->_pays= $pays;
	}

	public function setRegion($region)
	{
		$this->_region= $region;
	}

	public function setDepartement($departement)
	{
		$this->_departement= $departement;
	}

	public function setCode_cedex($code_cedex)
	{
		$this->_code_cedex= $code_cedex;
	}

	public function setVille($ville)
	{
		$this->_ville= $ville;
	}

	public function setCode_postal($code_postal)
	{
		$this->_code_postal= $code_postal;
	}

	public function setBoite_postale($boite_postale)
	{
		$this->_boite_postale= $boite_postale;
	}

	public function setComplement_addresse($complement_addresse)
	{
		$this->_complement_addresse= $complement_addresse;
	}

	public function setAddresse($addresse)
	{
		$this->_addresse= $addresse;
	}

	public function setNumero_siege($numero_siege)
	{
		$this->_numero_siege= $numero_siege;
	}

	public function setBatiment($batiment)
	{
		$this->_batiment= $batiment;
	}

	public function setService($service)
	{
		$this->_service= $service;
	}

	public function setHistorique($historique)
	{
		$this->_historique= $historique;
	}

	public function setDate_creation($date_creation)
	{
		$this->_date_creation= $date_creation;
	}

}
?>
