<?php
class src{
	private $src = false;
	
	public function src($src = false){
		$this->setSrc($src);
	}
	public function setSrc($src){
		if($src) $this->src = $src;
	}
	public function removeSrc(){
		$this->src = false;
	}
	public function getSrc(){
		return $this->src;
	}
	public function printer(){
		echo ($this->src)?" src = \"".$this->getSrc()."\" ":"";
	}
}
?>
