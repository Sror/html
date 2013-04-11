<?php

class width{
	private $width = false;
	
	public function width($width = false){
		$this->setWidth($width);
	}//Fin del constructor
	
	public function setWidth($width = false){
		
		if (is_numeric($width)){
			$this->width = $width;
		}
	}//Fin de la función setWidth
	
	public function removeWidth(){
		$this->width = false;
	}//Fin de la función removeWidth
	
	private function getWidth(){
		return $this->width;
	}//Fin de la función getWidth
	
	public function printWidth(){
		echo " width = \"".$this->getWidth."\" ";
	}//Fin de la función printWidth
}//Fin de la clase width

?>