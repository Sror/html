<?php

class formEvents extends cleaner
{
	private $formEvents = array(
			"onblur"=>array(),					//Fires the moment that the element loses focus
			"onchange"=>array(),				//Fires the moment when the value of the element is changed
			"oncontextmenu"=>array(),			//Script to be run when a context menu is triggered
			"onfocus"=>array(),				//Fires the moment when the element gets focus
			"onformchange"=>array(),			//Script to be run when a form changes
			"onforminput"=>array(),			//Script to be run when a form gets user input
			"oninput"=>array(),				//Script to be run when an element gets user input
			"oninvalid"=>array(),				//Script to be run when an element is invalid
			"onreset"=>array(),				//Fires when the Reset button in a form is clicked (Not supported in HTML5)
			"onselect"=>array(),				//Fires after some text has been selected in an element
			"onsubmit"=>array()				//Fires when a form is sumitted
	);
	
	
	private $auxiliar;
	
	public function formEvents($config =  false)
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
					case "setOnblur":
					case "setOnchange":
					case "setOncontextmenu":
					case "setOnfocus":
					case "setOnformchange":
					case "setOnforminput":
					case "setOninput":
					case "setOninvalid":
					case "setOnreset":
					case "setOnselect":
					case "setOnsubmit":
						$this->$case($value);
					break;
				}//Fin de switch
				
			}//Fin de la función foreach
			
		}//Fin del if is_array
		
	}//Fin de la función setConfig
	
	public function setOnblur($func = false){
		$this->formEvents['onblur']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnblur
	public function setOnchange($func = false){
		$this->formEvents['onchange']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnchange
	public function setOncontextmenu($func = false){
		$this->formEvents['oncontextmenu']=$this->auxiliar->setElement($func);
	}//Fin de la función setOncontextmenu
	public function setOnfocus($func = false){
		$this->formEvents['onfocus']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnfocus
	public function setOnformchange($func = false){
		$this->formEvents['onformchange']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnformchange
	public function setOnforminput($func = false){
		$this->formEvents['onforminput']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnforminput
	public function setOninput($func = false){
		$this->formEvents['oninput']=$this->auxiliar->setElement($func);
	}//Fin de la función setOninput
	public function setOninvalid($func = false){
		$this->formEvents['oninvalid']=$this->auxiliar->setElement($func);
	}//Fin de la función setOninvalid
	public function setOnreset($func = false){
		$this->formEvents['onreset']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnreset
	public function setOnselect($func = false){
		$this->formEvents['onselect']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnselect
	public function setOnsubmit($func = false){
		$this->formEvents['onsubmit']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnsubmit

	private function getOnblur(){
		return $this->formEvents['onblur'];
	}//Fin de la función getOnblur
	private function getOnchange(){
		return $this->formEvents['onchange'];
	}//Fin de la función getOnchange
	private function getOncontextmenu(){
		return $this->formEvents['oncontextmenu'];
	}//Fin de la función getOncontextmenu
	private function getOnfocus(){
		return $this->formEvents['onfocus'];
	}//Fin de la función getOnfocus
	private function getOnformchange(){
		return $this->formEvents['onformchange'];
	}//Fin de la función getOnformchange
	private function getOnforminput(){
		return $this->formEvents['onforminput'];
	}//Fin de la función getOnforminput
	private function getOninput(){
		return $this->formEvents['oninput'];
	}//Fin de la función getOninput
	private function getOninvalid(){
		return $this->formEvents['oninvalid'];
	}//Fin de la función getOninvalid
	private function getOnreset(){
		return $this->formEvents['onreset'];
	}//Fin de la función getOnreset
	private function getOnselect(){
		return $this->formEvents['onselect'];
	}//Fin de la función getOnselect
	private function getOnsubmit(){
		return $this->formEvents['onsubmit'];
	}//Fin de la función getOnsubmit
	
	
	public function addOnblur($func = false){
		$this->formEvents['onblur'] = $this->auxiliar->addElement($this->formEvents['onblur'],$func);
	}//Fin de la función addOnblur
	public function addOnchange($func = false){
		$this->formEvents['onchange'] = $this->auxiliar->addElement($this->formEvents['onchange'],$func);
	}//Fin de la función addOnchange
	public function addOncontextmenu($func = false){
		$this->formEvents['oncontextmenu'] = $this->auxiliar->addElement($this->formEvents['oncontextmenu'],$func);
	}//Fin de la función addOncontextmenu
	public function addOnfocus($func = false){
		$this->formEvents['onfocus'] = $this->auxiliar->addElement($this->formEvents['onfocus'],$func);
	}//Fin de la función addOnfocus
	public function addOnformchange($func = false){
		$this->formEvents['onformchange'] = $this->auxiliar->addElement($this->formEvents['onformchange'],$func);
	}//Fin de la función addOnformchange
	public function addOnforminput($func = false){
		$this->formEvents['onforminput'] = $this->auxiliar->addElement($this->formEvents['onforminput'],$func);
	}//Fin de la función addOnforminput
	public function addOninput($func = false){
		$this->formEvents['oninput'] = $this->auxiliar->addElement($this->formEvents['oninput'],$func);
	}//Fin de la función addOninput
	public function addOninvalid($func = false){
		$this->formEvents['oninvalid'] = $this->auxiliar->addElement($this->formEvents['oninvalid'],$func);
	}//Fin de la función addOninvalid
	public function addOnreset($func = false){
		$this->formEvents['onreset'] = $this->auxiliar->addElement($this->formEvents['onreset'],$func);
	}//Fin de la función addOnreset
	public function addOnselect($func = false){
		$this->formEvents['onselect'] = $this->auxiliar->addElement($this->formEvents['onselect'],$func);
	}//Fin de la función addOnselect
	public function addOnsubmit($func = false){
		$this->formEvents['onsubmit'] = $this->auxiliar->addElement($this->formEvents['onsubmit'],$func);
	}//Fin de la función addOnsubmit
	
	
	public function removeOnblur($func = false){
		$this->formEvents['onblur']=$this->auxiliar->removeElement($this->formEvents['onblur'],$func);
	}//Fin de la función removeOnblur
	public function removeOnchange($func = false){
		$this->formEvents['onchange']=$this->auxiliar->removeElement($this->formEvents['onchange'],$func);
	}//Fin de la función removeOnchange
	public function removeOncontextmenu($func = false){
		$this->formEvents['oncontextmenu']=$this->auxiliar->removeElement($this->formEvents['oncontextmenu'],$func);
	}//Fin de la función removeOncontextmenu
	public function removeOnfocus($func = false){
		$this->formEvents['onfocus']=$this->auxiliar->removeElement($this->formEvents['onfocus'],$func);
	}//Fin de la función removeOnfocus
	public function removeOnformchange($func = false){
		$this->formEvents['onformchange']=$this->auxiliar->removeElement($this->formEvents['onformchange'],$func);
	}//Fin de la función removeOnformchange
	public function removeOnforminput($func = false){
		$this->formEvents['onforminput']=$this->auxiliar->removeElement($this->formEvents['onforminput'],$func);
	}//Fin de la función removeOnforminput
	public function removeOninput($func = false){
		$this->formEvents['oninput']=$this->auxiliar->removeElement($this->formEvents['oninput'],$func);
	}//Fin de la función removeOninput
	public function removeOninvalid($func = false){
		$this->formEvents['oninvalid']=$this->auxiliar->removeElement($this->formEvents['oninvalid'],$func);
	}//Fin de la función removeOninvalid
	public function removeOnreset($func = false){
		$this->formEvents['onreset']=$this->auxiliar->removeElement($this->formEvents['onreset'],$func);
	}//Fin de la función removeOnreset
	public function removeOnselect($func = false){
		$this->formEvents['onselect']=$this->auxiliar->removeElement($this->formEvents['onselect'],$func);
	}//Fin de la función removeOnselect
	public function removeOnsubmit($func = false){
		$this->formEvents['onsubmit']=$this->auxiliar->removeElement($this->formEvents['onsubmit'],$func);
	}//Fin de la función removeOnsubmit
	
	public function changeOnblur($func = false,$newfunc = false){
		$this->formEvents['onblur']=$this->auxiliar->changeElement($this->formEvents['onblur'],$func,$newfunc);		
	}//Fin de la función changeOnblur
	public function changeOnchange($func = false,$newfunc = false){
		$this->formEvents['onchange']=$this->auxiliar->changeElement($this->formEvents['onchange'],$func,$newfunc);		
	}//Fin de la función changeOnchange
	public function changeOncontextmenu($func = false,$newfunc = false){
		$this->formEvents['oncontextmenu']=$this->auxiliar->changeElement($this->formEvents['oncontextmenu'],$func,$newfunc);		
	}//Fin de la función changeOncontextmenu
	public function changeOnfocus($func = false,$newfunc = false){
		$this->formEvents['onfocus']=$this->auxiliar->changeElement($this->formEvents['onfocus'],$func,$newfunc);		
	}//Fin de la función changeOnfocus
	public function changeOnformchange($func = false,$newfunc = false){
		$this->formEvents['onformchange']=$this->auxiliar->changeElement($this->formEvents['onformchange'],$func,$newfunc);		
	}//Fin de la función changeOnformchange
	public function changeOnforminput($func = false,$newfunc = false){
		$this->formEvents['onforminput']=$this->auxiliar->changeElement($this->formEvents['onforminput'],$func,$newfunc);		
	}//Fin de la función changeOnforminput
	public function changeOninput($func = false,$newfunc = false){
		$this->formEvents['oninput']=$this->auxiliar->changeElement($this->formEvents['oninput'],$func,$newfunc);		
	}//Fin de la función changeOninput
	public function changeOninvalid($func = false,$newfunc = false){
		$this->formEvents['oninvalid']=$this->auxiliar->changeElement($this->formEvents['oninvalid'],$func,$newfunc);		
	}//Fin de la función changeOninvalid
	public function changeOnreset($func = false,$newfunc = false){
		$this->formEvents['onreset']=$this->auxiliar->changeElement($this->formEvents['onreset'],$func,$newfunc);		
	}//Fin de la función changeOnreset
	public function changeOnselect($func = false,$newfunc = false){
		$this->formEvents['onselect']=$this->auxiliar->changeElement($this->formEvents['onselect'],$func,$newfunc);		
	}//Fin de la función changeOnselect
	public function changeOnsubmit($func = false,$newfunc = false){
		$this->formEvents['onsubmit']=$this->auxiliar->changeElement($this->formEvents['onsubmit'],$func,$newfunc);		
	}//Fin de la función changeOnsubmit

	public function printFormEvents()
	{
		foreach($this->formEvents as $key=>$row)
			(count($row))?$this->auxiliar->printerStack($row,$key):"";
	}//Fin de la función printformEvents	
}//Fin de la clase formEvents