<?php
class contact
{


	// liste des variables
	private $_nom;
	private $_prenom;
	private $_naissance;
	private $_mort;

	// liste des constantes de classe
	const ERREUR_VARIABLE = "Erreur de variable : ";


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
	public function nom()
	{
		return $this -> _nom;
	}
	
	public function prenom()
	{
		return $this -> _prenom;
	}
	
	public function naissance()
	{
		return $this -> _naissance;
	}
	
	public function mort()
	{
		return $this -> _mort;
	}

	// Setters

	public function setNom($nom)
	{
		$this ->_nom = $nom;
	}

	public function setPrenom($prenom)
	{
		$this ->_prenom = $prenom;
	}

	public function setNaissance($naissance)
	{
		$this ->_naissance = $naissance;
	}

	public function setMort($mort)
	{
		$this ->_mort = $mort;
	}

	// Helpers
	
	public function checkMot($donnee)
	{
		if(preg_match('#^[a-zA-Zà-ÿÀ-Ÿ -]+$#', $donnee))
		{
			return $donne;
		}
		else
		{
			echo self::ERREUR_VARIABLE . $donnee;
		}
	}

	public function checkDates($donnee)
	{
		if(isset($donnee) AND preg_match('#^(19|20)[0-9]{2}-[0-1][0-9]-[0-3][0-9]$#', $donnee))
		{
			return $donnee;
		}
		else
		{
			echo self::ERREUR_VARIABLE . $donnee;
		}
	}



}
?>
