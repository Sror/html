<?php
include "./attributes/recollectedData.php";
class type{

	private $type = false;
	
	public function type($type = false){
		$this->setType($type);
	}//Fin de la función type
	
	public function setType($type){
		switch(strtolower(trim($type))){
			case "button":
			case "checkbox":
			case "color":
			case "date":
			case "datetime":
			case "datetime-local":
			case "email":
			case "file":
			case "hidden":
			case "image":
			case "month":
			case "number":
			case "password":
			case "radio":
			case "range":
			case "reset":
			case "search":
			case "submit":
			case "tel":
			case "text":
			case "time":
			case "url":
			case "week":
				$this->type = strtolower($type);
			break;
		}
		
	}//Fin de la función setType
	
	public function removeType(){
		$this->type = false;
	}//Fin de la función removeType
	
	public function getType(){
		return $this->type;
	}//FIn de la función getType
	
	public function printer(){
		echo ($this->type)?"type=\"".$this->getType()."\"":"";
	}
}//Fin de la clase type
?>