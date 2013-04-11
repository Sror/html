<?php

class form{

	private $form = false;

	public function form($form = false){
		$this->setForm($form);
	}//Fin del constructor

	public function setForm($form = false){
		if ($form){
			$this->form = $this->setStringNotBlanks($form);
		}
	}//Fin de la función setForm

	public function removeForm(){
		$this->form = false;
	}//Fin de la función removeForm

	private function getForm(){
		return $this->form;
	}//Fin de la función getForm

	public function printer(){
		echo ($this->form)?" form = \"".$this->getForm()."\" ":"";
	}//Fin de la función printForm
}//Fin de la clase form

?>
