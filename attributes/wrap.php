<?php
class wrap{
	private $wrap = false;
	
	public function wrap($wrap = false){
		$this->setWrap($wrap);
	}
	public function setWrap($wrap){
		$wrap = strtolower(trim($wrap));
		
		switch($wrap){
			case "soft":
			case "hard":
				$this->wrap = $wrap;
		}
		
	}
	public function removeWrap(){
		$this->wrap = false;
	}
	public function getWrap(){
		return $this->wrap;
	}
	public function printer(){
		echo ($this->wrap)?" wrap =\"".$this->getWrap()."\" ":"";
	}
}
?>