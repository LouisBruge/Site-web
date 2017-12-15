<?php

class ouvrage
{
    private $_id,
        $_titre,
        $_editeur,
        $_ville,
        $_collection,
        $_date,
        $_commentaire;

    public setId($id)
        {
            $this->_id = $id;
        }

    public setTitre($titre)
        {
            $this->_titre = $titre;
        }

    public setEditeur($editeur)
        {
            $this->_editeur = $editeur;
        }

    public setVille($ville)
        {
            $this->_ville = $ville;
        }

    public setCollection($collection)
        {
            $this->_collection = $collection;
        }
}

	function ControllerOuvrage($donnee)
	{
		require($_SERVER['DOCUMENT_ROOT'] . '/BasesDonnees/CONTROLLER/generique.php');
		$donnee['titre'] = ControllerTitre($donnee['titre']);
		$donnee['auteur'] = ControllerText($donnee['auteur'], 'auteur');
		$donnee['editeur'] = ControllerText($donnee['editeur'], 'éditeur');
	       	$donnee['ville'] = ControllerVille($donnee['ville']);
		$donnee['collection'] = ControllerCollection($donnee['collection']);
		$donnee['annee'] = ControllerInt($donnee['annee'], 'date');
		$donnee['commentaire'] = htmlspecialchars($donnee['commentaire']);

		return $donnee;

	}

	function ControllerVille($donnee)
	{
		if(isset($donnee) AND preg_match('#^[a-zA-Zà-ÿÀ-Ŷ-]+$#', $donnee))
		{
			return $donnee;
		}
		elseif(empty($donnee))
		{
			return $donnee = NULL;
		}
		else
		{
			die('Erreur dans la déclaration de la ville');
		}
	}

	function ControllerCollection($donnee)
	{
		if(isset($donnee) AND preg_match('#^[a-zA-Zà-ÿÀ-Ŷ,.;:!\' -]+$#', $donnee))
		{
			return $donnee;
		}
		elseif(empty($donnee))
		{
			return $donnee = NULL;
		}
		else
		{
			die('Erreur dans la déclaration de la collection');
		}
	}

?>
