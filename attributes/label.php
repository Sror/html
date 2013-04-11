<?php
include "./attributes/recollectedData.php";
class label{

	private $label = false;

	public function label($label = false){
		$this->setLabel($label);
	}//Fin del constructor

	public function setLabel($label = false){
		if ($label){
			$this->label = $this->setStringNotBlanks($label);
		}
	}//Fin de la función setLabel

	public function removeLabel(){
		$this->label = false;
	}//Fin de la función removeLabel

	private function getLabel(){
		return $this->label;
	}//Fin de la función getLabel

	public function printLabel(){
		echo " label = \"".$this->getLabel()."\" ";
	}//Fin de la función printLabel
}//Fin de la clase label

?>
