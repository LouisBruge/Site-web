<?php 
abstract class media 
{
    protected $_id,
        $_titre,
	$_editeur,
        $_annee,
        $_commentaire;

    public function __construct(array $donnee)
    {
        $this->hydrate($donnee);
    }

    // fonction d'hydratation de la class media
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

    public function id()    {   return $this->_id;  }
    public function titre()    {   return $this->_titre;  }
    public function editeur()    {   return $this->_editeur;  }
    public function annee()    {   return $this->_annee;  }
    public function commentaire()    {   return $this->_commentaire;  }

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

    public function setAnnee($annee)
        {
            $this->_annee = (int) $annee;
        }

    public function setCommentaire($commentaire)
        {
            $this->_commentaire = $commentaire;
        }
}
?>
