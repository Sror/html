<?php

class formmethod{
	private $formmethod = false;
	
	public function formmethod($formmethod = false){
		$this->setFormmethod($formmethod);
	}//Fin del constructor
	
	public function setFormmethod($formmethod){
		switch(strtolower(trim($formmethod))){
			case "get":
			case "post":
				$this->formmethod = $formmethod;
			break;
		}
	}//Fin de la función setFormmethod
	
	public function removeFormmethod(){
		$this->formmethod = false;
	}//Fin de la función removeFormmethod
	
	public function getFormmethod(){
		return $this->formmethod;
	}//Fin de la función getFormmethod
	
	public function printer(){
		echo ($this->formmethod)?" formmethod =\"".$this->getFormmethod()."\" ":"";
	}//Fin de la función printer
		
}//Fin de la clase formmethod

?>