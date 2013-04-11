<?php

/**
* The align attribute specifies the horizontal alignment of the content inside the  element.
*
* @param	string	$align	keep the value of align's attribute
*/
class align extends ExtensionBridge{
	private $align = false;
	
	private $accepted_values = array ('left','right','center','justify','char');
	
	public function align ($config = false){
		$this->setAlign($config['align']);
		
		parent::addExt(new formEvents($config));
		parent::addExt(new globalAttributes($config));
		parent::addExt(new keyboardEvents($config));
		parent::addExt(new mediaEvents($config));
		parent::addExt(new mouseEvents($config));
		parent::addExt(new windowEventAttributes($config));
	}//Fin del constructor
	
	/**
	* Recoge la propiedad align
	*
	* @param	string	$align	valores aceptados left|right|center|justify|char
	*/
	public function setAlign($align = false){
		
		if (is_string($align)){
			(in_array(strtolower($align), $this->accepted_values))?$this->align=strtolower($align):"";
		}elseif(is_array($align)){
			foreach ($align as $key=>$value)
			{
				strtolower($key);
				$case = "set".ucwords($key);
				
				switch(trim($case))
				{
					case "setAlign":
						$this->$case($value);
					break;
				}//Fin de switch
				
			}//Fin de la función foreach
		}
	}//Fin de la función setAlign
	
	/**
	* Borra el valor de align
	*/
	public function removeAlign(){
		$this->align = false;
	}//Fin de la función removeAlign
	
	/**
	* Devuelve el valor guardado del atributo getAlign
	*
	* @param	string	$align	valor guardado para el atributo align
	*/
	private function getAlign(){
		return $this->align;
	}//Fin de la función getAlign
	
	/**
	* Si el valor para align es valido; pinta su representación HTML para dicho valor
	*/
	public function printAlign(){
		echo ($this->align)? " align=\"".$this->getAlign()."\" ":"";
		
		$this->printGlobalAttributes();
		$this->printKeyboardEvents();
		$this->printMediaEvents();
		$this->printMouseEvents();
		$this->printWindowEventAttributes();
	}//Fin de la función printer
}//Fin de la clase align

?>