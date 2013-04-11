<?php
class formtarget{
	private $formtarget = false;
	
	public function formtarget($formtarget = false){
		$this->setFormtarget($formtarget);
	}
	public function setFormtarget($formtarget){
		$formtarget = strtolower(trim($formtarget));
		
		switch($formtarget){
			case "_blank":
			case "blank":
				$this->formtarget = "_blank";
			break;
			case "_self":
			case "self":
				$this->formtarget = "_self";
			break;
			
			case "_parent":
			case "parent":
				$this->formtarget = "_parent";
			break;
			
			case "_top":
			case "top":
				$this->formtarget = "_top";
			break;
			
			default:
				$this->formtarget = $formtarget;
		}
		
	}
	public function removeFormtarget(){
		$this->formtarget = false;
	}
	public function getFormtarget(){
		return $this->formtarget;
	}
	public function printer(){
		echo ($this->formtarget)?" formtarget =\"".$this->getFormtarget()."\" ":"";
	}
}//Fin de la clase

?>