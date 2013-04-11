<?php
class for{
	private $for = false;
	
	public function for($for = false){
		$this->setFor($for);
	}
	public function setFor($for){
		if($for)
			$this->for = $this->setString($for);
	}
	public function removeFor(){
		$this->for = false;
	}
	public function getFor(){
		return $this->for;
	}
	public function printer(){
		echo ($this->for)?" for = \"".$this->getFor()."\" ":"";
	}
}

?>