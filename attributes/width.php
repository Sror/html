<?php
class width{
	private $width = false;
	
	public function width($width = false){
		$this->setWidth($width);
	}
	public function setWidth($width){
		if ($width)
			$this->width = $this->setNumeric($width);
	}
	public function removeWidth(){
		$this->width = false;
	}
	public function getWidth(){
		return $this->width;
	}
	public function printer(){
		echo ($this->width)?" width =\"".$this->getWidth()."\" ":"";
	}
}
?>