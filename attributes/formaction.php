<?php

class formaction{
	private $formaction = false;
	
	public function formaction($formaction = false){
		$this->setFormaction($formaction);
	}//Fin del constructor
	
	public function setFormaction($formaction){
		$this->formaction = $formaction;
	}//Fin de la función setFormaction
	
	public function removeFormaction(){
		$this->formaction = false;
	}//Fin de la función removeFormaction
	
	public function getFormaction(){
		return $this->formaction;
	}//Fin de la función getFormaction
	
	public function printer(){
		echo ($this->formaction)?" formaction = \"".$this->printer()."\" ":"";
	}//Fin de la función printer
	
}//Fin de la clase formaction

?>