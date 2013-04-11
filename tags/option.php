<?php

class option {

	private $option = array(
		"disable"=>false,	//Specifies that an option should be disabled
		"label"=>false,		//Specifies a shorter label for an option
		"selected"=>false,	//Specifies that an option should be pre-selected when the page loads
		"value"=>false		//Specifies the value to be sent to a server
	);
	
	private $value = false;
	
	public function option ($config = false){
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
					case "setSelected":
					case "setValue":
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
					$this->option['disabled'] = "disabled";
				break;
			}
		}elseif(is_bool($disabled)=== true){
			$this->option['disabled'] = "disabled";
		}	
	}//Fin de la funci�n setDisabled
	
	public function setLabel($label = false){
		if(is_string($label))
		{
			$label = trim($label);
			if($label!="")
				$this->option['label'] = $label;
		}
	}//Fin de la funci�n setLabel
	
	public function setSelected($selected = false){
		if(is_string($selected)){
			$selected = strtolower(trim($selected));
			
			switch($selected){
				case "y":
				case "yes":
				case "s":
				case "si":
				case "selected":
					$this->option['selected'] = "selected";
				break;
			}
		}elseif(is_bool($selected)=== true){
			$this->option['selected'] = "selected";
		}	
	}//Fin de la funci�n setSelected
	
	public function setValue($value = false){
		if(is_string($value))
		{
			$value = trim($value);
			if($value!="")
				$this->option['value'] = $value;
		}	
	}//Fin de la funci�n setValue
	
	public function setValor($value = false){
		$this->value = $valor;
	}//Fin de la funci�n setValor
	
	public function removeDisabled(){
		$this->option['disabled'] = false;
	}//Fin de la funci�n removeDisabled
	
	public function removeLabel(){
		$this->option['label'] = false;
	}//Fin de la funci�n removeLabel
	
	public function removeSelected(){
		$this->option['selected'] = false;
	}//Fin de la funci�n removeSelected
	
	private function removeValue(){
		$this->option['value'] = false;
	}//Fin de la funci�n getValue
	
	private function getDisabled(){
		return $this->option['disabled'];
	}//Fin de la funci�n getDisabled
	
	private function getLabel(){
		return $this->option['label'];
	}//Fin de la funci�n getLabel
	
	private function getSelected(){
		return $this->option['selected'];
	}//Fin de la funci�n getSelected

	private function getValue(){
		return $this->option['value'];
	}//Fin de la funci�n getValue
		
	private function printDisabled(){
		echo " disabled =\"".$this->getDisabled()."\" ";
	}//Fin de la funci�n printDisabled
	
	private function printLabel(){
		echo " disabled =\"".$this->getLabel()."\" ";
	}//Fin de la funci�n printLabel
	
	private function printSelected(){
		echo " disabled =\"".$this->getSelected()."\" ";
	}//Fin de la funci�n printSelected
	
	private function printValue(){
		echo " disabled =\"".$this->getValue()."\" ";
	}//Fin de la funci�n printValue	
	
	public function printer(){
		echo "<option";
			($this->option['disabled'])?$this->printDisabled():"";
			($this->option['label'])?$this->printLabel():"";
			($this->option['selected'])?$this->printSelected:"";
			($this->option['value'])?$this->printValue():"";
		echo ">";
		
			echo $this->value;
			
		echo "</option>";
	}//Fin de la funci�n printer
	
}//Fin de la clase option

?>