<?php

class jeux extends media
{
    private $_plateforme;

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

    public function plateforme() {  return $this->_plateforme;  }


    public function setPlateforme($plateforme)
    {
	    if preg_match('#a-zA-Z0-9 ]+$#', $plateforme)
	    {
		    $this->_plateforme = $plateforme;
	    }
	    else
	    {
		    die('Erreur de déclaration de la plateforme');
	    }
    }
}

?>
