<?php
class readonly{
	private $readonly = false;
	
	public function readonly($readonly = false){
		$this->setReadonly($readonly);
	}
	
	public function setReadonly($readonly){
		if ($readonly)
			$this->readonly = $this->setSwitch("readonly",$readonly);
	}
	
	public function removeReadonly(){
		$this->readonly = false;
	}
	
	public function getReadonly(){
		return $this->readonly;
	}
	
	public function printer(){
		echo ($this->readonly)?" readonly = \"".$this->getReadonly()."\" ":"";
	}
	
}
?>