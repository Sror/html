<?php
class formenctype{
	private $formenctype = false;
	
	public function formenctype($formenctype = false){
		$this->setFormenctype($formenctype);
	}//Fin del constructor
	
	public function setFormenctype($formenctype){
		switch(strtolower(trim($formenctype))){
			case "application/x-www-form-urlencoded":
			case "multipart/form-data":
			case "text/plain":
				$this->formenctype = $formenctype;
			break;
		}
	}//Fin de la función setFormenctype
	
	public function removeFormenctype(){
		$this->formenctype = false;
	}//Fin de la función removeFormenctype
	
	public function getFormenctype(){
		return $this->formenctype;
	}//Fin de la función getFormenctype
	
	public function printer(){
		echo " formenctype =\"".$this->getFormaction."\" ";
	}//Fin de la función printer
}//Fin de la clase

?>