<?php
include "./attributes/recollectedData.php";
class autofocus{

	private $autofocus = false;

	public function autofocus($autofocus = false){
		$this->setAutofocus($autofocus);
	}//Fin del constructor

	public function setAutofocus($autofocus = false){
		if ($autofocus){
			$this->autofocus = $this->setStringNotBlanks($autofocus);
		}
	}//Fin de la función setAutofocus

	public function removeAutofocus(){
		$this->autofocus = false;
	}//Fin de la función removeAutofocus

	private function getAutofocus(){
		return $this->autofocus;
	}//Fin de la función getAutofocus

	public function printAutofocus(){
		echo " autofocus = \"".$this->getAutofocus()."\" ";
	}//Fin de la función printAutofocus
}//Fin de la clase autofocus

?>
