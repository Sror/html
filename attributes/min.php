<?php
class min{
	private $min = false;
	
	public function min($min = false){
		$this->setMin($min);
	}
	public function setMin($min){
		if($min) $this->min = $this->setNumeric($min);
	}
	public function removeMin(){
		$this->min = false;
	}
	public function getMin(){
		return $this->min;
	}
	public function printer(){
		echo ($this->min)?" min=\"".$this->getMin()."\" ":"";
	}
	
}
?>