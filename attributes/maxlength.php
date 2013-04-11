<?php
class maxlength{
	private $maxlength = false;
	
	public function maxlength($maxlength = false){
		$this->setMaxlength($maxlength);
	}
	public function setMaxlength($maxlength){
		if($maxlength) $this->maxlength = $this->setNumeric($maxlength);
	}
	public function removeMaxlength(){
		$this->maxlength = false;
	}
	public function getMaxlength(){
		return $this->maxlength;
	}
	public function printer(){
		echo ($this->maxlength)?" maxlength=\"".$this->getMaxlength()."\" ":"";
	}
	
}
?>