<?php
    class genre
    {
        private $_id,
            $_nom,
            $_abreviation,
            $_film,
            $_ouvrage,
            $_jeux;


            public function id() {  return $this->_id;  }
            public function nom() {  return $this->_nom;   }
            public function abreviation() {  return $this->_abreviation;   }
            public function film() {  return $this->_film;   }
            public function ouvrage() {  return $this->_ouvrage;   }
            public function jeux() {  return $this->_jeux;   }

            public function __construct (array $donnee)
            {
                $this->hydrate($donnee);
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




            public function setId($id)
            {
                $this->_id = (int) $id;
            }

            public function setNom($nom)
            {
                $this->_nom = $nom;
            }

            public function setAbreviation($abreviation)
            {
                $this->_abreviation = $abreviation;
            }

            public function setFilm($film)
            {
                $this->_film = (bool) $film;
            }

            public function setOuvrage($ouvrage)
            {
                $this->_ouvrage = (bool) $ouvrage;
            }

            public function setJeux($jeux)
            {
                $this->_jeux = (bool) $jeux;
            }
    }

