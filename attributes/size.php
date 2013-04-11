<?php
include "./attributes/recollectedData.php";
class size{

	private $size = false;

	public function size($size = false){
		$this->setSize($size);
	}//Fin del constructor

	public function setSize($size = false){
		if ($size){
			$this->size = $this->setNumber($size);
		}
	}//Fin de la función setSize

	public function removeSize(){
		$this->size = false;
	}//Fin de la función removeSize

	private function getSize(){
		return $this->size;
	}//Fin de la función getSize

	public function printSize(){
		echo " size = \"".$this->getSize()."\" ";
	}//Fin de la función printSize
}//Fin de la clase size

?>
