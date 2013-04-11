<?php
class rows{
	private $rows = false;
	
	public function rows($rows = false){
		$this->setRows($rows);
	}
	public function setRows($rows){
		if($rows)
			$this->rows = $this->setNumeric($rows);
	}
	public function removeRows(){
		$this->rows = false;
	}
	public function getRows(){
		return $this->rows;
	}
	public function printer(){
		echo ($this->rows)?" rows=\"".$this->getRows."\" ":"";
	}
}
?>