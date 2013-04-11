<?php

class keyBoardEvents extends cleaner
{
	private $keyBoardEvents = array(
			"onkeydown"=>array(),		//Fires the moment that the element loses focus
			"onkeypress"=>array(),		//Fires the moment when the value of the element is changed
			"onkeyup"=>array()		//Script to be run when a context menu is triggered
	);
	
	private $auxiliar ;
	
	public function keyboardEvents($config =  false)
	{
		$this->auxiliar = new stack();
		$this->setConfig($config);
	}//Fin del constructor
	
	public function setConfig($config = false)
	{
		if ($config && is_array($config))
		{
			foreach ($config as $key=>$value)
			{
				strtolower($key);
				$case = "set".ucwords($key);
				
				switch(trim($case))
				{
					case "setOnkeydown":
					case "setOnkeypress":
					case "setOnkeyup":
						$this->$case($value);
					break;
				}//Fin de switch
				
			}//Fin de la función foreach
			
		}//Fin del if is_array
		
	}//Fin de la función setConfig
	
	public function setOnkeydown($func = false){
		$this->keyBoardEvents['onkeydown']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnkeydown
	public function setOnkeypress($func = false){
		$this->keyBoardEvents['onkeypress']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnkeypress
	public function setOnkeyup($func = false){
		$this->keyBoardEvents['onkeyup']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnkeyup
	
	private function getOnkeydown(){
		return $this->keyBoardEvents['onkeydown'];
	}//Fin de la función getOnkeydown
	private function getOnkeypress(){
		return $this->keyBoardEvents['onkeypress'];
	}//Fin de la función getOnkeypress
	private function getOnkeyup(){
		return $this->keyBoardEvents['onkeyup'];
	}//Fin de la función getOnkeyup
	
	public function addOnkeydown($func = false){
		$this->keyBoardEvents['onkeydown'] = $this->auxiliar->addElement($this->keyBoardEvents['onkeydown'],$func);
	}//Fin de la función addOnkeydown
	public function addOnkeypress($func = false){
		$this->keyBoardEvents['onkeypress'] = $this->auxiliar->addElement($this->keyBoardEvents['onkeypress'],$func);
	}//Fin de la función addOnkeypress
	public function addOnkeyup($func = false){
		$this->keyBoardEvents['onkeyup'] = $this->auxiliar->addElement($this->keyBoardEvents['onkeyup'],$func);	
	}//Fin de la función addOnkeyup

	public function removeOnkeydown($func = false){
		$this->keyBoardEvents['onkeydown']=$this->auxiliar->removeElement($this->keyBoardEvents['onkeydown'],$func);
	}//Fin de la función removeOnkeydown
	public function removeOnkeypress($func = false){
		$this->keyBoardEvents['onkeypress']=$this->auxiliar->removeElement($this->keyBoardEvents['onkeypress'],$func);		
	}//Fin de la función removeOnkeypress
	public function removeOnkeyup($func = false){
		$this->keyBoardEvents['onkeyup']=$this->auxiliar->removeElement($this->keyBoardEvents['onkeyup'],$func);		
	}//Fin de la función removeOnkeyup
	
	public function changeOnkeydown($func = false,$newfunc = false){
		$this->keyBoardEvents['onkeydown']=$this->auxiliar->changeElement($this->keyBoardEvents['onkeydown'],$func,$newfunc);		
	}//Fin de la función changeOnkeydown
	public function changeOnkeypress($func = false,$newfunc = false){
		$this->keyBoardEvents['onkeypress']=$this->auxiliar->changeElement($this->keyBoardEvents['onkeypress'],$func,$newfunc);		
	}//Fin de la función changeOnkeypress
	public function changeOnkeyup($func = false,$newfunc = false){
		$this->keyBoardEvents['onkeyup']=$this->auxiliar->changeElement($this->keyBoardEvents['onkeyup'],$func,$newfunc);	
	}//Fin de la función changeOnkeyup

	public function printKeyboardEvents()
	{
		foreach($this->keyBoardEvents as $key=>$row)
			(count($row))?$this->auxiliar->printerStack($row,$key):"";
	}//Fin de la función printWindowEventAttributes

}//Fin del clase keyBoardEvents
	