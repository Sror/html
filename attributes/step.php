<?php
class step{
	private $step = false;
	
	public function step ($step = false){
		$this->setStep($step);
	}
	public function setStep($step){
		if($step)
			$this->step = $this->setNumeric($step);
	}	
	public function removeStep(){
		$this->step = false;
	}
	public function getStep(){
		return $this->step;
	}
	public function printer(){
		echo ($this->step)?" step =\"".$this->getStep()."\" ":"";
	}
}
?>