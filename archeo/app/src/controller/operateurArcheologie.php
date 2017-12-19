<?php
namespace archeo\controller;
class operateurArcheologie extends operateur
{
	protected $_arretes = [];

	public function __construct(arrete $arrete)
	{
		$this->setArrete($arrete);
	}

	public function arrete()
	{
		return $this->_arrete;
	}

	public function setArrete(arrete $arrete)
	{
		$this->_arretes[] = $arrete;
	}
}
?>
