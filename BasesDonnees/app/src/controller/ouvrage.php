<?php

class ouvrage extends media
{
	private $_auteur,
		$_ville,
        $_collection;

    public function __construct(array $donnee)
    {
	    $this->hydrate($donnee);
    }

    public function ville() {	return $this->_ville;	}
    public function collection() {	return $this->_collection;	}


    public function setAuteur($auteur)
    {
	    $this->_auteur = $auteur;
    }

    public function setVille($ville)
        {
		if (preg_match( '#^[a-zA-Zà-ÿÀ-Ŷ-]+$#', $ville))
		{
			$this->_ville = $ville;
		}
		else 
		{
			die('Erreur de déclaration de la ville');
		}
        }

    public function setCollection($collection)
        {
			$this->_collection = $collection;
        }
}
