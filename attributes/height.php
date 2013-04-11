<?php
class height{
	private $height = false;
	
	public function height($height = false){
		$this->setHeight($height);
	}
	
	public function setHeight($height){
		if($this->height)
			$this->height = $this->setNumeric($height);
	}

	public function removeHeight(){
		$this->height = false;
	}

	public function getHeight(){
		return $this->height;
	}
	
	public function printer(){
		echo ($this->height)?" height=\"".$this->getHeight."\" ":"";
	}
}
?>