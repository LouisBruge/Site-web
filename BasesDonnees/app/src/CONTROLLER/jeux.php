<?php

class jeux
{
    private $_id,
        $_titre,
        $_editeur,
        $_plateforme,
        $_date,
        $_commentaire;

    public function __construct(array $donnee)
    {
        $this->hydrate($donnee);
    }

    public function hydrate(array $donnee)
    {
		foreach($donnee as $key => $value)
		{
			$method = 'set'.ucfirst($key);
			if( method_exists($this, $method))
			{
				$this->$method($value);
				echo 'La variable ' . $key . ' = ' . $value . '\n';
			}
		
		}
    }

    public function id() {  return $this->_id;  }
    public function titre() {  return $this->_titre;  }
    public function editeur() {  return $this->_editeur;  }
    public function plateforme() {  return $this->_plateforme;  }
    public function date() {  return $this->_date;  }
    public function commentaire() {  return $this->_commentaire;  }

    public function setId($id)
    {
        $this->_id = (int) $id;
    }

    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }

    public function setEditeur($editeur)
    {
        $this->_editeur = $editeur;
    }

    public function setPlateforme($plateforme)
    {
        $this->_plateforme = $plateforme;
    }

    public function setDate($date)
    {
        $this->_date = (int) $date;
    }

    public function setCommentaire($commentaire)
    {
        $this->_commentaire = $commentaire;
    }
}

	function ControllerPlateforme($donnee)
	{
		if(isset($donnee) AND preg_match('#^[a-zA-Z0-9 ]+$#', $donnee))
		{
			return $donnee;
		}
		else
		{
			die('Erreur dans la déclaration de la plateforme');
		}
	}
?>
