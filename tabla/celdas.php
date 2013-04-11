<?php

class celdas extends ExtensionBridge{
	
	private $celdas = array (
		"abbr"=>false,
		"axis"=>false,
		"colspan"=>false,
		"headers"=>false,
		"height"=>false,
		"nowrap"=>false,
		"rowspan"=>false,
		"scope"=>false
	);
	
	private $scope_values = array('col','colgroup','row','rowgroup');
	
	public function celdas($config = false){
		
		parent::addExt(new secciones($config));
		parent::addExt(new bgColor($config));
		
		$this->setConfig($config);
		
	}//Fin de la función celdas
	
	private function setConfig($config = false){
		
		if ($config && is_array($config))
		{
			foreach ($config as $key=>$value)
			{
				strtolower($key);
				$case = "set".ucwords($key);
				
				switch(trim($case))
				{
					case "setAbbr":
					case "setAxis":
					case "setColspan":
					case "setHeaders":
					case "setHeight":
					case "setNowrap":
					case "setRowspan":
					case "setScope":
						$this->$case($value);
					break;
				}//Fin de switch
				
			}//Fin de la función foreach
			
		}//Fin del if is_array
	}//Fin de la clase setConfig
	
	public function setAbbr($abbr = false){
		if(is_string($abbr)){
			$abbr = trim($abbr);
			
			if ($abbr!="")
				$this->celdas['abbr'] = $abbr;
		}//Fin de la función setAbbr
	}//Fin de la función setAbbr
	
	public function setAxis($axis = false){
		if(is_string($axis)){
			$axis = trim($axis);
			
			if($axis!="")
				$this->celdas['axis'] = $axis;
		}
	}//Fin de la función setAxis
	
	public function setColspan($colspan = false){
		if(is_numeric($colspan) && ($colspan>=2)){
			$this->celdas['colspan']=$colspan;
		}
	}//Fin de la función setColspan
	
	public function setHeaders($headers = false){
		if(is_string($headers)){
			$headers = trim($headers);
			
			if($headers!="")
				$this->celdas['headers'] = $headers;
		}
	}//Fin de la función setHeaders
	
	public function setHeight($height = false){
		if(is_numeric($height)  && ($height>=0)){
			$this->celdas['height'] = $height;
		}
	}//Fin de la función setHeight
	
	public function setNowrap($nowrap = false){
		if(is_string($nowrap)){
			$nowrap = strtolower(trim($nowrap));
			
			switch($nowrap){
				case "y":
				case "yes":
				case "s":
				case "si":
				case "nowrap":
					$this->celdas['nowrap'] = "nowrap";
				break;
			}
		}elseif(is_bool($nowrap)=== true){
			$this->celdas['nowrap'] = "nowrap";
		}
	}//Fin de la función setNowrap
	
	public function setRowspan($rowspan = false){
		if(is_numeric($rowspan) && ($rowspan>=0)){
			$this->celdas['rowspan'] = $rowspan;
		}	
	}//Fin de la función setRowspan
	
	public function setScope($scope = false){
		if (is_string($scope)){
			$scope = trim($scope);
			
			(is_array($scope,$this->scope_values))?$this->celdas['scope'] = $scope:"";
		}
	}//Fin de la función setScope
	
	public function removeAbbr(){
		$this->celdas['abbr'] = false;
	}//Fin de la función removeAbbr
	
	public function removeAxis(){
		$this->celdas['axis'] = false;
	}//Fin de la función removeAxis
	
	public function removeColspan(){
		$this->celdas['colspan'] = false;
	}//Fin de la función removeColspan
	
	public function removeHeaders(){
		$this->celdas['headers'] = false;
	}//Fin de la función removeHeaders
	
	public function removeHeight(){
		$this->celdas['height'] = false;
	}//Fin de la función removeHeight
	
	public function removeNowrap(){
		$this->celdas['nowrap'] = false;
	}//Fin de la función removeNowrap
	
	public function removeRowspan(){
		$this->celdas['rowspan'] = false;
	}//Fin de la función removeRowspan
	
	public function removeScope(){
		$this->celdas['scope'] = false;
	}//Fin de la función removeScope
	
	private function getAbbr(){
		return $this->celdas['abbr']; 
	}//Fin de la función getAbbr
	
	private function getAxis(){
		return $this->celdas['axis']; 
	}//Fin de la función getAxis
	
	private function getColspan(){
		return $this->celdas['colspan']; 
	}//Fin de la función getColspan
	
	private function getHeaders(){
		return $this->celdas['headers']; 
	}//Fin de la función getHeaders
	
	private function getHeight(){
		return $this->celdas['height']; 
	}//Fin de la función getHeight
	
	private function getNowrap(){
		return $this->celdas['nowrap']; 
	}//Fin de la función getNowrap
	
	private function getRowspan(){
		return $this->celdas['rowspan']; 
	}//Fin de la función getRowspan
	
	private function getScope(){
		return $this->celdas['scope']; 
	}//Fin de la función getScope
	
	private function printAbbr(){
		echo " abbr =\"".$this->getAbbr()."\" ";
	}//Fin de la función printAbbr
	
	private function printAxis(){
		echo " axis =\"".$this->getAxis()."\" ";
	}//Fin de la función printAxis
	
	private function printColspan(){
		echo " colspan =\"".$this->getColspan()."\" ";
	}//Fin de la función printColspan
	
	private function printHeaders(){
		echo " headers =\"".$this->getHeaders()."\" ";
	}//Fin de la función printHeaders
	
	private function printHeight(){
		echo " height =\"".$this->getHeight()."\" ";
	}//Fin de la función printHeight
	
	private function printNowrap(){
		echo " nowrap =\"".$this->getNowrap()."\" ";
	}//Fin de la función printNowrap
	
	private function printRowspan(){
		echo " rowspan =\"".$this->getRowspan()."\" ";
	}//Fin de la función printRowspan
	
	private function printScope(){
		echo " scope =\"".$this->getScope()."\" ";
	}//Fin de la función printScope
	
	public function printCeldas(){
		($this->celdas['abbr'])?$this->printAbbr():"";
		($this->celdas['axis'])?$this->printAbbr():"";
		($this->celdas['colspan'])?$this->printAbbr():"";
		($this->celdas['headers'])?$this->printAbbr():"";
		($this->celdas['height'])?$this->printAbbr():"";
		($this->celdas['nowrap'])?$this->printAbbr():"";
		($this->celdas['rowspan'])?$this->printAbbr():"";
		($this->celdas['scope'])?$this->printAbbr():"";
		$this->printBgcolor();
		$this->printSecciones();
	}//Fin de la función printCeldas
}//Fin de la clase celdas
?>