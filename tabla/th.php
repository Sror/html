<?php

class th extends celdas{
	
	private $value = false;
	
	public function th($value=false,$config = false){
		$this->setValue($value);
		parent::celdas($config);
	}//Fin del constructor
	
	public function setValue($value = false){
		$this->value = $value;
	}//Fin de la función setValue
	
	public function eraseValue(){
		$this->value = false;
	}//Fin de la función eraseValue
	
	private function getValue(){
		return $this->value;
	}//Fin de la función getValue
	
	public function printer(){
		echo "<th";
			parent::printCeldas();
		echo ">";
			echo $this->getValue();
		echo "</th>";
	}//Fin de la función printer
}//Fin de la clase th
?>