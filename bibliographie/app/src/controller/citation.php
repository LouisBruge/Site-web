<?php
    class citation
    {
        private $_id,
            $_citation,
            $_auteur,
            $_reference,
            $_siecle,
            $_dateScalaire,
            $_dateNonScalaire;


        public function __construct (array $donnee)
            {
                $this->hydrate($donnee);
            }

        public function id()    {   return $this->$_id;  }
        public function citation()    {   return $this->$_citation;  }
        public function auteur()    {   return $this->$_auteur;  }
        public function reference()    {   return $this->$_reference;  }
        public function siecle()    {   return $this->$_siecle;  }
        public function dateScalaire()    {   return $this->$_dateScalaire;  }
        public function dateNonScalaire()    {   return $this->$_dateNonScalaire;  }

        public function setId($id)
        {
            $this->_id = (int) $id;
        }

        public function setCitation($citation)
        {
            $this->_citation = $citation
        }

    }
?>
