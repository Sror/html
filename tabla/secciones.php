<?php

class secciones extends align{

	private $secciones = array (
		"char"	=> false,
		"charoff"	=> false,
		"valign"	=> false
	);
	
	private $valign_values = array ('top','middle','bottom','baseline');
	/**
	* Constructor de la clase
	*
	*@param		string|array	$secciones	puede contener los valores para sus atributos
	*/
	public function secciones( $secciones = false ){
		
		$this->setConfig($secciones);
		
	}//Fin del constructor
	
	private function setConfig($config = false){
		

		parent::__construct ($config);
		
		if ($config && is_array($config))
		{
			foreach ($config as $key=>$value)
			{
				strtolower($key);
				$case = "set".ucwords($key);
				
				switch(trim($case))
				{
					case "setChar":
					case "setCharoff":
					case "setValign":
						$this->$case($value);
					break;
				}//Fin de switch
				
			}//Fin de la función foreach
			
		}//Fin del if is_array
	}//Fin de la clase setConfig
	
	/**
	* Recoge el atributo char
	*
	* @param	character	$char	Caracter hacia el que se alineará el contenido de la celda
	*/
	public function setChar($char = false){
		if (is_string($char) && (strlen($char) == 1)){
			$this->secciones['char'] = $char;
		}
	}//Fin de la función setChar
	
	/**
	* Recoge el atributo charoff
	*
	* Sólo puede ser utilizado si el atributo char ha sido especificado
	*
	* @param	int	$charoff	
	*/
	public function setCharoff($charoff = false){
		if (is_numeric($charoff))
			$this->secciones['charoff'] = $charoff;
	}//Fin de la función setCharoff
	
	/*
	*Recoge el valor para el atributo valign
	*
	* Este atributo sólo puede coger el valor de un conjuto: 'top','middle','bottom','baseline'
	* @param	string	$valign		el valor debe ser representativo de alguno de los valores permitidos.
	*/
	public function setValign($valign = false){
		if (is_string($valign)){
			(in_array(strtolower($valign), $this->valign_values))?$this->secciones['valign']=strtolower($valign):"";
		} 
	}//Fin de la función setValign
	
	/*
	* Devuelve el valor del atributo 'char' al que es suyo por defecto.
	*/
	public function removeChar(){
		$this->secciones['char'] = false;
	}//Fin de la función removeChar
	
	/*
	* Devuelve el valor del atributo 'charoff' al que le pertence por defecto
	*/
	public function removeCharoff(){
		$this->secciones['charoff'] = false;
	}//Fin de la función removeCharoff
	
	/*
	* Devuelve el valor del atributo 'valign' al que le pertenece por defecto
	*/
	public function removeValign(){
		$this->secciones['valign'] = false;
	}//Fin de la función removeValign
	
	/*
	* Devuelve el valor del atributo 'char'
	*/
	public function getChar(){
		return $this->secciones['char'];
	}//Fin de la función getChar
	
	/*
	* Devuelve el valor del atributo 'charoff'
	*/
	public function getCharoff(){
		return $this->secciones['charoff'];
	}//Fin de la función getCharoff
	
	/*
	* Devuelve el valor del atributo 'valign'
	*/
	public function getValign(){
		$this->secciones['valign'];
	}//Fin de la función getValign
	
	/*
	* Pinta el atributo 'char'
	*/
	private function printChar(){
		echo ' char="'.$this->secciones['char']."' ";
	}//Fin de la función printChar
	
	/*
	* Pinta el atributo 'charoff'
	*/
	private function printCharoff(){
		echo ' charoff="'.$this->secciones['charoff']."' ";
	}//Fin de la función printCharoff
	
	/*
	* Pinta el atributo 'valign'
	*/
	private function printValign(){
		echo ' valign="'.$this->secciones['valign']."' ";
	}//Fin de la función printValign
	
	/*
	* Pinta los atributo de la clase
	*
	* En caso de que los atributos de la clase tenga algún valor, los pinta
	*/
	public function printSecciones(){
	
		($this->secciones['char'])?$this->printChar():"";
		($this->secciones['charoff'])?$this->printCharoff():"";
		($this->secciones['valign'])?$this->printValign():"";
		
		parent::printAlign();
		
	}//Fin de la función printer
}//Fin de la clase secciones
?>