<?php

   class film
   {
       private $id,
           $_titre,
           $_realisateur,
           $_studio,
           $_date,
           $_duree,
           $_commentaire;

       public functon __construct(array $donnee)
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
       
       public function id() {    return $this->_id;   }
       public function titre() {    return $this->_titre;   }
       public function realisateur() {    return $this->_realisateur;   }
       public function studio() {    return $this->_studio;   }
       public function date() {    return $this->_date;   }
       public function duree() {    return $this->_duree;   }
       public function commentaire() {    return $this->_commentaire;   }

       public function id($id)
       {
           $this-> _id = (int) $id;
       }

       public function setTitre($titre)
       {
           $this->_titre = $titre;
       }

       public function setRealisateur($realisateur)
       {
           $this->_realisateur = $realisateur;
       }

       public function setStudio($studio)
       {
           $this->_studio = $studio;
       }

       public function setDate($date)
       {
           $this->_date = (int) $date;
       }

       public function setDuree($duree)
       {
           $this->_duree = (int) $duree;
       }

       publid function setCommentaire($commentaire)
       {
           $this->_commentaire = $commentaire;
       }
   }
?>



