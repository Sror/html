<?php
include "./attribute/recollectedData.php";

class disabled{
	private $disabled = false;

	public function disabled($disabled = false){
		$this->setDisabled($disabled);
	}//Fin del constructor

	public function setDisabled($disabled = false){
		
		$this->disabled = $this->setSwitch($disabled);

	}//Fin de la función setDisabled
	
	public function removeDisabled(){
		$this->disabled = false;
	}//Fin de la función removeDisabled

	public function getDisabled(){
		return $this->disabled;		
	}//Fin de la función getDisabled
	
	public function printDisabled(){
		echo " disabled = \"".$this->getDisabled()."\" ";
	}//Fin de la función printDisabled

}//Fin de la clase disabled

?>
