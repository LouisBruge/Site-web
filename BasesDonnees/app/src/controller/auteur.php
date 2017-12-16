<?php

class Auteur
{
	//variables privées
	private $_id;
	private $_nom;
	private $_prenom;

	// affiche les paramètres de la class Auteur
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

	// fonction d'initialisation de la class Auteur
	public function __construct(array $donnee)
	{
		$this -> hydrate($donnee);
	}


	// fonction d'hydratation de la class Auteur
	public function hydrate(array $donnee)
	{
		foreach($donnee as $key => $value)
		{
			$method = 'set'.ucfirst($key);
			if( method_exists($this, $method))
			{
				$this->$method($value);
			}
		
		}
	}


	// permet de manipuler les variables
	public function setId($id)
	{
		$this->_id = (int) $id;
	}

	public function setNom($nom)
	{
		$this->_nom = $nom;
	}

	public function setPrenom($prenom)
	{
		$this->_prenom = $prenom;
	}
}
?>
