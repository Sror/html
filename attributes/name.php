<?php
include "./attributes/recollectedData.php";
class name{

	private $name = false;

	public function name($name = false){
		$this->setName($name);
	}//Fin del constructor

	public function setName($name = false){
		if ($name){
			$this->name = $this->setStringNotBlanks($name);
		}
	}//Fin de la función setName

	public function removeName(){
		$this->name = false;
	}//Fin de la función removeName

	private function getName(){
		return $this->name;
	}//Fin de la función getName

	public function printName(){
		echo " name = \"".$this->getName()."\" ";
	}//Fin de la función printName
}//Fin de la clase name

?>
