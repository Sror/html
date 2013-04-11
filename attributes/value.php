<?php
include "./attributes/recollectedData.php";
class value{

	private $value = false;

	public function value($value = false){
		$this->setValue($value);
	}//Fin del constructor

	public function setValue($value = false){
		if ($value){
			$this->value = $this->setStringNotBlanks($value);
		}
	}//Fin de la función setValue

	public function removeValue(){
		$this->value = false;
	}//Fin de la función removeValue

	private function getValue(){
		return $this->value;
	}//Fin de la función getValue

	public function printer(){
		echo ($this->value)?" value = \"".$this->getValue()."\" ":"";
	}//Fin de la función printValue
}//Fin de la clase value

?>
