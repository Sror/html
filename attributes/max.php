<?php
class max{
	private $max = false;
	
	public function max($max = false){
		$this->setMin($max);
	}
	public function setMax($max){
		if ($max) $this->max = $this->setNumeric($max);
	}
	public function removeMax(){
		$this->max = false;
	}
	public function getMax(){
		return $this->$max;
	}
	public function printer(){
		echo ($this->max)?" min=\"".$this->getMax()."\" ":"";
	}
	
}
?>