<?php
class required{
	private $required = false;
	
	public function required($required = false){
		$this->setRequired($required);
	}
	public function setRequired($required){
		if ($required)
			$this->required = $this->setSwitch("required",$required);
	}
	public function removeRequired(){
		$this->required = false;
	}
	public function getRequired(){
		return $this->required;
	}
	public function printer(){
		echo ($this->required)?" required=\"".$this->getRequired()."\" ":"";
	}
}

?>