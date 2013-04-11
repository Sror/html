<?php

class autocomplete{
	
	private $autocomplete = false;
	
	public function autocomplete($autocomplete = false){
		$this->setAutocomplete($autocomplete);
	}//Fin del constructor
	
	public function setAutocomplete($autocomplete){
		switch(strtolower(trim($autocomplete))){
			case "on":
			case "off":
				$this->autocomplete = $autocomplete;
		}
	}//Fin de la función setAutocomplete
	
	public function removeAutocomplete(){
		$this->autocomplete = false;
	}//Fin de la función removeAutocomplete
	
	public function getAutocomplete(){
		return $this->autocomplete;
	}//Fin de la función getAutocomplete
	
	public function printer(){
		echo($this->autocomplete)?" autocomplete = \"".$this->getAutocomplete()."\" ":"";
	}//Fin de la función printer
}//Fin de la clase autocomplete

?>