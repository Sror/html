<?php

class cols{
	private $cols = false;
	
	public function cols($cols = false){
		$this->setCols($cols);
	}
	public function setCols($cols){
		if ($cols){
			$this->cols = $this->setNumber($cols);
		}
	}
	public function removeCols(){
		$this->cols = false;
	}
	public function getCols(){
		return $this->cols;
	}
	public function printer(){
		echo ($this->cols)?"cols = \"".$this->cols."\" ":"";
	}
}//fin de la clase cols

?>