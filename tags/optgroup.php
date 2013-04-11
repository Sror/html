<?php

class optgroup {

	$optgroup = array(
		"disabled"=>false,		//Specifies that an option-group should be disabled
		"label"=>false,			//Specifies a label for an option-group
	);
	
	public function optgroup($config = false){
		$this->setConfig($config);
	}//Fin del constructor
	
	private function setConfig($config = false){
		
		if ($config && is_array($config))
		{
			foreach ($config as $key=>$value)
			{
				strtolower($key);
				$case = "set".ucwords($key);
				
				switch(trim($case))
				{
					case "setDisabled":
					case "setLabel":
						$this->$case($value);
					break;
				}//Fin de switch
				
			}//Fin de la funci�n foreach
			
		}//Fin del if is_array
	}//Fin de la clase setConfig
	
	public function setDisabled($disabled = false){
		if(is_string($disabled)){
			$disabled = strtolower(trim($disabled));
			
			switch($disabled){
				case "y":
				case "yes":
				case "s":
				case "si":
				case "disabled":
					$this->optgroup['disabled'] = "disabled";
				break;
			}
		}elseif(is_bool($disabled)=== true){
			$this->optgroup['disabled'] = "disabled";
		}	
	}//Fin de la funci�n setDisabled
	
	public function setLabel($label = false){
		if(is_string($label))
		{
			$label = trim($label);
			if($label!="")
				$this->optgroup['label'] = $label;
		}
	}//Fin de la funci�n setLabel
	
	public function removeDisabled(){
		$this->optgroup['disabled'] = false;
	}//Fin de la funci�n removeDisabled
	
	public function removeLabel(){
		$this->optgroup['label'] = false;
	}//Fin de la funci�n removeLabel
	
	private function getDisabled(){
		return $this->optgroup['disabled'];
	}//Fin de la funci�n getDisabled
	
	private function getLabel(){
		return $this->optgroup['label'];
	}//Fin de la funci�n getLabel
	
	private function printDisabled(){
		echo " disabled =\"".$this->getDisabled()."\" ";
	}//Fin de la funci�n printDisabled
	
	private function printLabel(){
		echo " disabled =\"".$this->getLabel()."\" ";
	}//Fin de la funci�n printLabel
	
	private function printer(){
	
	}//Fin de la funci�n printer
}//Fin de la clase optgroup

?>