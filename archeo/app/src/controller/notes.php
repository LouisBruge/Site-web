<?php 

namespace archeo\controller;

class notes
{
	protected $_id,
		$_text,
		$_idOperateur,
		$_historique,
		$_source,
		$_web,
		$_dateAjout;

	public function __construct(array $array)
	{
		$this->hydrate($array);
	}

	// Accessors
	public function id() { return $this->_id; }
	public function text() { return $this->_text; }
	public function idOperateur() { return $this->_idOperateur; }
	public function historique() { return $this->_historique; }
	public function source() { return $this->_source; }
	public function web() { return $this->_web; }
	public function dateAjout() { return $this->_dateAjout; }

	public function setId($id)
	{
		$this->_id = $id;
	}

	public function setText($text)
	{
		$this->_text = $text;
	}

	public function setIdOperateur($idOperateur)
	{
		$this->_idOperateur = $idOperateur;
	}

	public function setHistorique($historique)
	{
		$this->_historique = $historique;
	}

	public function setSource($source)
	{
		$this->_source = $source;
	}

	public function setWeb($web)
	{
		$this->_web = $web;
	}

	public function setdateAjout($dateAjout)
	{
		$this->_dateAjout = $dateAjout;
	}

}

?>
