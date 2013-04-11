<?php

class mouseEvents extends cleaner
{
	private $mouseEvents = array(
		"onclick"=>array(),
		"ondbclick"=>array(),
		"ondrag"=>array(),
		"ondragend"=>array(),
		"ondragenter"=>array(),
		"ondragleave"=>array(),
		"ondragover"=>array(),
		"ondragstart"=>array(),
		"ondrop"=>array(),
		"onmousedown"=>array(),
		"onmousemove"=>array(),
		"onmouseout"=>array(),
		"onmouseover"=>array(),
		"onmouseup"=>array(),
		"onmousewheel"=>array(),
		"onscroll"=>array()
	);
	
	private $auxiliar;
	
	public function mouseEvents($config =  false)
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
					case "setOnclick":
					case "setOndbclick":
					case "setOndrag":
					case "setOndragend":
					case "setOndragenter":
					case "setOndragleave":
					case "setOndragover":
					case "setOndragstart":
					case "setOndrop":
					case "setOnmousedown":
					case "setOnmousemove":
					case "setOnmouseover":
					case "setOnmouseout":
					case "setOnmouseup":
					case "setOnmousewheel":
					case "setOnscroll":
						$this->$case($value);
					break;
				}//Fin de switch
				
			}//Fin de la función foreach
			
		}//Fin del if is_array
		
	}//Fin de la función setConfig

	public function setOnclick($func = false){ 
		$this->mouseEvents['onclick']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnclick
	public function setOndbclick($func = false){
		$this->mouseEvents['ondbclick']=$this->auxiliar->setElement($func);
	}//Fin de la función setOndbclick
	public function setOndrag($func = false){ 
		$this->mouseEvents['ondrag']=$this->auxiliar->setElement($func);
	}//Fin de la función setOndrag
	public function setOndragend($func = false){ 
		$this->mouseEvents['ondragend']=$this->auxiliar->setElement($func);
	}//Fin de la función setOndragend
	public function setOndragenter($func = false){
		$this->mouseEvents['ondragenter']=$this->auxiliar->setElement($func);
	}//Fin de la función setOndragenter
	public function setOndragleave($func = false){
		$this->mouseEvents['ondragleave']=$this->auxiliar->setElement($func);
	}//Fin de la función setOndragleave
	public function setOndragover($func = false){
		$this->mouseEvents['ondragover']=$this->auxiliar->setElement($func);
	}//Fin de la función setOndragover
	public function setOndragstart($func = false){
		$this->mouseEvents['ondragstart']=$this->auxiliar->setElement($func);
	}//Fin de la función setOndragstart
	public function setOndrop($func = false){ 
		$this->mouseEvents['ondrop']=$this->auxiliar->setElement($func);
	}//Fin de la función setOndrop
	public function setOnmousedown($func = false){
		$this->mouseEvents['onmousedown']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnmousedown
	public function setOnmousemove($func = false){
		$this->mouseEvents['onmousemove']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnmousemove
	public function setOnmouseover($func = false){
		$this->mouseEvents['onmouseover']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnmouseover
	public function setOnmouseout($func = false){
		$this->mouseEvents['onmouseout']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnmouseout
	public function setOnmouseup($func = false){
		$this->mouseEvents['onmouseup']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnmouseup
	public function setOnmousewheel($func = false){
		$this->mouseEvents['onmousewheel']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnmousewheel
	public function setOnscroll($func = false){
		$this->mouseEvents['onscroll']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnscroll
	
	public function addOnclick($func = false){
		$this->mouseEvents['onclick']=$this->auxiliar->addElement($this->mouseEvents['onclick'],$func);
	}//Fin de la función addOnclick
	public function addOndbclick($func = false){
		$this->mouseEvents['ondbclick']=$this->auxiliar->addElement($this->mouseEvents['ondbclick'],$func);
	}//Fin de la función addOndbclick
	public function addOndrag($func = false){
		$this->mouseEvents['ondrag']=$this->auxiliar->addElement($this->mouseEvents['ondrag'],$func);
	}//Fin de la función addOndrag
	public function addOndragend($func = false){
		$this->mouseEvents['ondragend']=$this->auxiliar->addElement($this->mouseEvents['ondragend'],$func);
	}//Fin de la función addOndragend
	public function addOndragenter($func = false){
		$this->mouseEvents['ondragenter']=$this->auxiliar->addElement($this->mouseEvents['ondragenter'],$func);
	}//Fin de la función addOndragenter
	public function addOndragleave($func = false){
		$this->mouseEvents['ondragleave']=$this->auxiliar->addElement($this->mouseEvents['ondragleave'],$func);
	}//Fin de la función addOndragleave
	public function addOndragover($func = false){
		$this->mouseEvents['ondragover']=$this->auxiliar->addElement($this->mouseEvents['ondragover'],$func);
	}//Fin de la función addOndragover
	public function addOndragstart($func = false){
		$this->mouseEvents['ondragstart']=$this->auxiliar->addElement($this->mouseEvents['ondragstart'],$func);
	}//Fin de la función addOndragstar
	public function addOndrop($func = false){
		$this->mouseEvents['ondrop']=$this->auxiliar->addElement($this->mouseEvents['ondrop'],$func);
	}//Fin de la función addOndrop
	public function addOnmousedown($func = false){
		$this->mouseEvents['onmousedown']=$this->auxiliar->addElement($this->mouseEvents['onmousedown'],$func);
	}//Fin de la función addOnmousedown
	public function addOnmousemove($func = false){
		$this->mouseEvents['onmousemove']=$this->auxiliar->addElement($this->mouseEvents['onmousemove'],$func);
	}//Fin de la función addOnmousemove
	public function addOnmouseout($func = false){
		$this->mouseEvents['onmouseout']=$this->auxiliar->addElement($this->mouseEvents['onmouseout'],$func);
	}//Fin de la función addOnmouseout
	public function addOnmouseover($func = false){
		$this->mouseEvents['onmouseover']=$this->auxiliar->addElement($this->mouseEvents['onmouseover'],$func);
	}//Fin de la función addOnmouseover
	public function addOnmouseup($func = false){
		$this->mouseEvents['onmouseup']=$this->auxiliar->addElement($this->mouseEvents['onmouseup'],$func);
	}//Fin de la función addOnmouseup
	public function addOnmousewheel($func = false){
		$this->mouseEvents['onmousewheel']=$this->auxiliar->addElement($this->mouseEvents['onmousewheel'],$func);
	}//Fin de la función addOnmousewheel
	public function addOnscroll($func = false){
		$this->mouseEvents['onscroll']=$this->auxiliar->addElement($this->mouseEvents['onscroll'],$func);
	}//Fin de la función addOnscroll
	
	
	public function removeOnclick($func = false){
		$this->mouseEvents['onclick']=$this->auxiliar->removeElement($this->mouseEvents['onclick'],$func);
	}//Fin de la función removeOnclick
	public function removeOndbclick($func = false){
		$this->mouseEvents['ondbclick']=$this->auxiliar->removeElement($this->mouseEvents['ondbclick'],$func);
	}//Fin de la función removeOndbclick
	public function removeOndrag($func = false){
		$this->mouseEvents['ondrag']=$this->auxiliar->removeElement($this->mouseEvents['ondrag'],$func);
	}//Fin de la función removeOndrag
	public function removeOndragend($func = false){
		$this->mouseEvents['ondragend']=$this->auxiliar->removeElement($this->mouseEvents['ondragend'],$func);
	}//Fin de la función removeOndragend
	public function removeOndragenter($func = false){
		$this->mouseEvents['ondragenter']=$this->auxiliar->removeElement($this->mouseEvents['ondragenter'],$func);
	}//Fin de la función removeOndragenter
	public function removeOndragleave($func = false){
		$this->mouseEvents['ondragleave']=$this->auxiliar->removeElement($this->mouseEvents['ondragleave'],$func);
	}//Fin de la función removeOndragleave
	public function removeOndragover($func = false){
		$this->mouseEvents['ondragover']=$this->auxiliar->removeElement($this->mouseEvents['ondragover'],$func);
	}//Fin de la función removeOndragover
	public function removeOndragstart($func = false){
		$this->mouseEvents['ondragstart']=$this->auxiliar->removeElement($this->mouseEvents['ondragstart'],$func);
	}//Fin de la función removeOndragstar
	public function removeOndrop($func = false){
		$this->mouseEvents['ondrop']=$this->auxiliar->removeElement($this->mouseEvents['ondrop'],$func);
	}//Fin de la función removeOndrop
	public function removeOnmousedown($func = false){
		$this->mouseEvents['onmousedown']=$this->auxiliar->removeElement($this->mouseEvents['onmousedown'],$func);
	}//Fin de la función removeOnmousedown
	public function removeOnmousemove($func = false){
		$this->mouseEvents['onmousemove']=$this->auxiliar->removeElement($this->mouseEvents['onmousemove'],$func);
	}//Fin de la función removeOnmousemove
	public function removeOnmouseout($func = false){
		$this->mouseEvents['onmouseout']=$this->auxiliar->removeElement($this->mouseEvents['onmouseout'],$func);
	}//Fin de la función removeOnmouseout
	public function removeOnmouseover($func = false){
		$this->mouseEvents['onmouseover']=$this->auxiliar->removeElement($this->mouseEvents['onmouseover'],$func);
	}//Fin de la función removeOnmouseover
	public function removeOnmouseup($func = false){
		$this->mouseEvents['onmouseup']=$this->auxiliar->removeElement($this->mouseEvents['onmouseup'],$func);
	}//Fin de la función removeOnmouseup
	public function removeOnmousewheel($func = false){
		$this->mouseEvents['onmousewheel']=$this->auxiliar->removeElement($this->mouseEvents['onmousewheel'],$func);
	}//Fin de la función removeOnmousewheel
	public function removeOnscroll($func = false){
		$this->mouseEvents['onscroll']=$this->auxiliar->removeElement($this->mouseEvents['onscroll'],$func);
	}//Fin de la función removeOnscroll
	
	public function changeOnclick($func = false,$newfunc = false){
		$this->mouseEvents['onclick']=$this->auxiliar->changeElement($this->mouseEvents['onclick'],$func,$newfunc);		
	}//Fin de la función changeOnclick
	public function changeOndbclick($func = false,$newfunc = false){
		$this->mouseEvents['ondbclick']=$this->auxiliar->changeElement($this->mouseEvents['ondbclick'],$func,$newfunc);		
	}//Fin de la función changeOndbclick
	public function changeOndrag($func = false,$newfunc = false){
		$this->mouseEvents['ondrag']=$this->auxiliar->changeElement($this->mouseEvents['ondrag'],$func,$newfunc);		
	}//Fin de la función changeOndrag
	public function changeOndragend($func = false,$newfunc = false){
		$this->mouseEvents['ondragend']=$this->auxiliar->changeElement($this->mouseEvents['ondragend'],$func,$newfunc);		
	}//Fin de la función changeOndragend
	public function changeOndragenter($func = false,$newfunc = false){
		$this->mouseEvents['ondragenter']=$this->auxiliar->changeElement($this->mouseEvents['ondragenter'],$func,$newfunc);		
	}//Fin de la función changeOndragenter
	public function changeOndragleave($func = false,$newfunc = false){
		$this->mouseEvents['ondragleave']=$this->auxiliar->changeElement($this->mouseEvents['ondragleave'],$func,$newfunc);		
	}//Fin de la función changeOndragleave
	public function changeOndragover($func = false,$newfunc = false){
		$this->mouseEvents['ondragover']=$this->auxiliar->changeElement($this->mouseEvents['ondragover'],$func,$newfunc);		
	}//Fin de la función changeOndragover
	public function changeOndragstart($func = false,$newfunc = false){
		$this->mouseEvents['ondragstart']=$this->auxiliar->changeElement($this->mouseEvents['ondragstart'],$func,$newfunc);		
	}//Fin de la función changeOndragstart
	public function changeOnmousedown($func = false,$newfunc = false){
		$this->mouseEvents['onmousedown']=$this->auxiliar->changeElement($this->mouseEvents['onmousedown'],$func,$newfunc);		
	}//Fin de la función changeOnmousedown
	public function changeOnmousemove($func = false,$newfunc = false){
		$this->mouseEvents['onmousemove']=$this->auxiliar->changeElement($this->mouseEvents['onmousemove'],$func,$newfunc);		
	}//Fin de la función changeOnmousemove
	public function changeOnmouseout($func = false,$newfunc = false){
		$this->mouseEvents['onmouseout']=$this->auxiliar->changeElement($this->mouseEvents['onmouseout'],$func,$newfunc);		
	}//Fin de la función changeOnmouseout
	public function changeOnmouseover($func = false,$newfunc = false){
		$this->mouseEvents['onmouseover']=$this->auxiliar->changeElement($this->mouseEvents['onmouseover'],$func,$newfunc);		
	}//Fin de la función changeOnmouseover
	public function changeOnmouseup($func = false,$newfunc = false){
		$this->mouseEvents['onmouseup']=$this->auxiliar->changeElement($this->mouseEvents['onmouseup'],$func,$newfunc);		
	}//Fin de la función changeOnmouseup
	public function changeOnmousewheel($func = false,$newfunc = false){
		$this->mouseEvents['onmousewheel']=$this->auxiliar->changeElement($this->mouseEvents['onmousewheel'],$func,$newfunc);		
	}//Fin de la función changeOnmousewheel
	public function changeOnscroll($func = false,$newfunc = false){
		$this->mouseEvents['onscroll']=$this->auxiliar->changeElement($this->mouseEvents['onscroll'],$func,$newfunc);		
	}//Fin de la función changeOnscroll
	
	public function printMouseEvents()
	{
		foreach($this->mouseEvents as $key=>$row)
			(count($row))?$this->auxiliar->printerStack($row,$key):"";
	}//Fin de la función mouseEvents
}//Fin de la clase mouseEvents


?>