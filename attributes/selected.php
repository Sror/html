<?php
include "./attribute/recollectedData.php";

class selected{
	private $selected = false;

	public function selected($selected = false){
		$this->setSelected($selected);
	}//Fin del constructor

	public function setSelected($selected = false){
		$this->selected = $this->setSwitch("selected",$selected);		
	}//Fin de la función setSelected
	
	public function removeSelected(){
		$this->selected = false;
	}//Fin de la función removeSelected

	public function getSelected(){
		return $this->selected;		
	}//Fin de la función getSelected
	
	public function printSelected(){
		echo " selected = \"".$this->getSelected()."\" ";
	}//Fin de la función printSelected

}//Fin de la clase multiple

?>
