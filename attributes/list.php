<?php
class listAttribute{
	private $list = false;
	
	public function listAttribute($list = false){
		$this->setList($list);
	}
	public function setList($list){
		if($this->list)
			$this->list = $this->setString($list);
	}
	public function removeList(){
		$this->list = false;
	}
	public function getList(){
		return $this->list;
	}
	public function printer(){
		echo ($this->list)?" list=\"".$this->getList()."\" ":"";
	}
}
?>