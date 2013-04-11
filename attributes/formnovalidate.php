<?php
class formnovalidate{
	private $formnovalidate = false;
	
	public function formnovalidate($formnovalidate = false){
		$this->setFormnovalidate($formnovalidate);
	}//Fin del constructor
	
	public function setFormnovalidate($formnovalidate){
		$this->formnovalidate = $this->setSwitch("formnovalidate",$formnovalidate);
	}//Fin de la función setFormnovalidate
	
	public function removeFormnovalidate(){
		$this->formnovalidate = false;
	}//Fin de la función removeFormovalidate
	
	public function getFormnovalidate(){
		return $this->formnovalidate;
	}//Fin de la función getFormnovalidate
	
	public function printer(){
		($this->formnovalidate)?" formnovalidate =\"".$this->getFormnovalidate()."\" ":"";
	}//Fin de la función printer
	
}//Fin de la clase formnovalidate
?>