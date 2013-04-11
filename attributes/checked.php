<?php

class checked{
	private $checked = false;
	
	public function checked($checked = false){
		$this->setChecked($checked);
	}//Fin del constructor
	
	public function setChecked($checked){
		$this->setSwitch("checked",$checked);
	}//Fin de la función setChecked
	
	public function removeChecked(){
		$this->checked = false;
	}//Fin de la función removeChecked
	
	public function getChecked(){
		return $this->checked;
	}//Fin de la función getChecked
	
	public function printer(){
		echo ($this->checked)?" checked =\"",$this->getChecked()."\" ":"";
	}//Fin de la función printer
	
}//Fin de la clase checked
?>