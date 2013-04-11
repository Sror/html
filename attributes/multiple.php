<?php
include "./attribute/recollectedData.php";

class multiple{
	private $multiple = false;

	public function multiple($multiple = false){
		$this->setDisabled($multiple);
	}//Fin del constructor

	public function setMultiple($multiple = false){

		$this->multiple = $this->setSwitch("multiple",$multiple);
		
	}//Fin de la función setMultiple
	
	public function removeMultiple(){
		$this->multiple = false;
	}//Fin de la función removeMultiple

	public function getMultiple(){
		return $this->multiple;		
	}//Fin de la función getMultiple
	
	public function printMultiple(){
		echo " multiple = \"".$this->getMultiple()."\" ";
	}//Fin de la función printMultiple

}//Fin de la clase multiple

?>
