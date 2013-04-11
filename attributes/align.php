<?php

class align{

	private $align = false;
	
	public function align($align = false){
		$this->setAlign($align);
	}//Fin de la función align
	
	public function setAlign($align){
		switch(strtolower(trim($align))){
			case "left":
			case "right":
			case "top":
			case "middle":
			case "bottom":
				$this->align = strtolower($align);
			break;
		}
		
	}//Fin de la función setAlign
	
	public function removeAlign(){
		$this->align = false;
	}//Fin de la función removeAlign
	
	public function getAlign(){
		return $this->align;
	}//FIn de la función getAlign
	
	public function printer(){
		echo ($this->align)?"align=\"".$this->getAlign()."\" <!-- Not supported in HTML5. Deprecated in HTML4.01 -->":"";
	}
}//Fin de la clase align
?>