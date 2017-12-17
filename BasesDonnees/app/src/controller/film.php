<?php

   class film extends media
   {
       private $_realisateur,
           $_studio,
           $_duree;

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
       
       public function realisateur() {    return $this->_realisateur;   }
       public function studio() {    return $this->_studio;   }
       public function duree() {    return $this->_duree;   }

       public function setRealisateur($realisateur)
       {
           $this->_realisateur = $realisateur;
       }

       public function setStudio($studio)
       {
           $this->_studio = $studio;
       }

       public function setDuree($duree)
       {
           $this->_duree = (int) $duree;
       }

   }
?>



