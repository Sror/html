<?php
class pattern{
	private $pattern = false;
	
	public function pattern($pattern = false){
		$this->setPattern($pattern);
	}
	
	public function setPattern($pattern){
		if ($pattern) $this->pattern = $pattern;
	}
	
	public function removePattern(){
		$this->pattern = false;
	}
	
	public function getPattern(){
		return $this->pattern;
	}
	
	public function printer(){
		echo ($this->pattern)?" pattern = \"".$this->getPattern()."\" ":"";
	}
}
?>