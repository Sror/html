<?php

/**
* The bgcolor attribute specifies the horizontal bgcolorment of the content inside the  element.
*
* @param	string	$bgcolor	keep the value of bgcolor's attribute
*/
class bgcolor{
	private $bgcolor = false;
	
	public function bgcolor ($bgcolor = false){
		$this->setBgcolor($bgcolor);
	}//Fin del constructor
	
	/**
	* Recoge la propiedad bgcolor
	*
	* @param	string	$bgcolor	color_name|hex_number|rgb_number
	*/
	public function setBgcolor($bgcolor = false){
		
		if (is_string($bgcolor)){
			if(trim($bgcolor)!="")
				$this->bgcolor = $bgcolor;
		}
	}//Fin de la función setbgcolor
	
	/**
	* Borra el valor de bgcolor
	*/
	public function removeBgcolor(){
		$this->bgcolor = false;
	}//Fin de la función removebgcolor
	
	/**
	* Devuelve el valor guardado del atributo getbgcolor
	*
	* @param	string	$bgcolor	valor guardado para el atributo bgcolor
	*/
	private function getBgcolor(){
		return $this->bgcolor;
	}//Fin de la función getbgcolor
	
	/**
	* Si el valor para bgcolor es valido; pinta su representación HTML para dicho valor
	*/
	public function printBgcolor(){
		echo ($this->bgcolor)? " bgcolor= \"".$this->getBgcolor()."\" ":"";
	}//Fin de la función printer
}//Fin de la clase bgcolor

?>