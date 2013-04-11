<?php

class alt{
	
	private $alt = false;
	
	public function alt($alt){
		$this->setAlt($alt);
	}//Fin del constructor
	
	public function setAlt($alt){
		$this->alt = $alt;
	}//Fin de la función setAlt
	
	public function removeAlt(){
		$this->alt = false;
	}//Fin de la función removeAlt
	
	public function getAlt(){
		return $this->alt;
	}//Fin de la función getAlt
	
	public function printer(){
		echo ($this->alt)?" alt = \"".$this->getAlt()."\" ":"";
	}//Fin de la función printer
}//Fin la clase alt
?>