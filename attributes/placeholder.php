<?php
class placeholder{
	private $placeholder = false;
	
	public function placeholder($placeholder = false){
		$this->setPlaceholder($placeholder);
	}
	public function setPlaceholder($placeholder){
		if ($placeholder) $this->placeholder = $placeholder;
	}
	public function removePlaceholder(){
		$this->placeholder = false;
	}
	public function getPlaceholder(){
		return $this->placeholder;
	}
	public function printer(){
		echo ($this->placeholder)?" placeholder = \"".$this->getPlaceholder()."\" ":"";
	}
}

?>