<?php

class table extends ExtensionBridge
{
	private $table = array(
		"border"=>false,
		"cellpadding"=>false,
		"cellspacing"=>false,
		"frame"=>false,
		"rules"=>false,
		"summary"=>false
	);
	
	private $frame_values = array ('void','above','below','hsides','lhs','rhs','vsides','box','border');
	
	private $rules_values = array ('none','groups','rows','cols','all');
	
	public function table($config = false){
		parent::addExt(new width());
		parent::addExt(new bgcolor());
		parent::addExt(new align());
		parent::addExt(new container());
		
		$this->setConfig($config);
	}//Fin de la clase table
	
	private function setConfig($config = false){
	
		if ($config && is_array($config))
		{
			foreach ($config as $key=>$value)
			{
				strtolower($key);

				$case = "set".ucwords($key);
				
				switch(trim($case))
				{
					case "setAlign":
					case "setBgcolor":
					case "setBorder":
					case "setCellpadding":
					case "setCellspacing":
					case "setFrame":
					case "setRules":
					case "setSummary":
					case "setWidth":
						$this->$case($value);
					break;
				}//Fin de switch
				
			}//Fin de la función foreach
			
		}//Fin del if is_array
	}//Fin de la función setConfig
	
	public function setPush($value)
	{
		if (is_object($value))
			(get_class($value)=="thead" || get_class($value)=="tbody" || get_class($value)=="tfoot")?parent::setPush($value):"";
	}//fin de la function setPush

	public function setBorder($border = false){
		if (is_numeric($border)){
			$this->table['border']=$border;
		}
	}//Fin de la función setBorder
	
	public function setCellpadding($cellpadding = false){
		if (is_numeric($cellpadding) && $cellpadding>=0)
			$this->table['cellpadding'] = $cellpadding;
	}//Fin de la función setCellpadding
	
	public function setCellspacing($cellspacing = false){
		if (is_numeric($cellspacing) && $cellspacing>=0)
			$this->table['cellpadding'] = $cellspacing;	
	}//Fin de la función setCellspacing
	
	public function setFrame($frame = false){
		
		if (is_string($frame)){
			$frame = strtolower($frame);
		
			(in_array($frame,$this->frame_values))?$this->table['frame'] = $frame:"";
		}
	}//Fin de la función setFrame
	
	public function setRules($rules = false){
		if(is_string($rules)){
			$rules = strtolower($rules);
			
			(in_array($rules,$this->rules_values))?$this->table['rules'] = $rules:"";
		}
	}//Fin de la función setRules
	
	public function setSummary($summary = false){
		if (is_string($summary)){
			$summary = trim($summary);
			
			if ($summary != "")
				$this->table['summary'] = $summary;
		}
	}//Fin de la función setSummary

	public function removeBorder(){
		$this->table['border'] = false;
	}//Fin de la función removeBorder
	
	public function removeCellpadding(){
		$this->table['cellpadding'] = false;
	}//Fin de la función removeCellpadding
	
	public function removeCellspacing(){
		$this->table['cellspacing'] = false;
	}//Fin de la función removeCellspacing
	
	public function removeFrame(){
		$this->table['frame'] = false;
	}//Fin de la función removeFrame
	
	public function removeRules(){
		$this->table['rules'] = false;
	}//Fin de la función removeRules
	
	public function removeSummary(){
		$this->table['summary'] = false;
	}//Fin de la función removeSummary
	
	private function getBorder(){
		return $this->table['border'];
	}//Fin de la función getBorder
	
	private function getCellpadding(){
		return $this->table['cellpadding'];
	}//Fin de la función getCellpadding
	
	private function getCellspacing(){
		return $this->table['cellspacing'];
	}//Fin de la función getCellspacing
	
	private function getFrame(){
		return $this->table['frame'];
	}//Fin de la función getFrame
	
	private function getRules(){
		return $this->table['rules'];
	}//Fin de la función getRules
	
	private function getSummary(){
		return $this->table['summary'];
	}//Fin de la función getSummary
	
	private function printBorder(){
		echo " border=\"".$this->getBorder()."\" ";
	}//Fin de la función printBorder
	
	private function printCellpadding(){
		echo " cellpadding=\"".$this->getCellpadding()."\" ";
	}//Fin de la función printCellpadding
	
	private function printCellspacing(){
		echo " cellspacing=\"".$this->getCellspacing()."\" ";
	}//Fin de la función printCellspacing
	
	private function printFrame(){
		echo " frame=\"".$this->getFrame()."\" ";
	}//Fin de la función printFrame
	
	private function printRules(){
		echo " rules=\"".$this->getRules()."\" ";
	}//Fin de la función printRules
	
	private function printSummary(){
		echo " summary=\"".$this->getSummary()."\" ";
	}//Fin de la función printSummary
	
	public function printer(){
	
		echo "<table";
			($this->table['border'])?$this->printBorder():"";
			($this->table['cellpadding'])?$this->printCellpadding():"";
			($this->table['cellspacing'])?$this->printCellspacing():"";
			($this->table['frame'])?$this->printFrame():"";
			($this->table['rules'])?$this->printRules():"";
			($this->table['summary'])?$this->printSummary():"";
			
			$this->printBgcolor();
			$this->printAlign();
			$this->printWidth();
		echo ">";
			if($this->size()>0)
				foreach($this->container as $row)
					$row->printer();

		echo "</table>";
	
	}
}//Fin de la clase table
?>