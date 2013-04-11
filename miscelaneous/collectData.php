<?php

class collectData{

	public function collectData($data = false){
		
	}//Fin del constructor
	
	
	public function setStringNotBlanks($string = false){
		if(is_string($string)){
			$string = trim($string);
			
			if($string!="")
				return $this->eraseWhiteSpaces($string);
		}
	}//Fin de la función setStringNotBlanks
	
	public function setString($string = false){
		if(is_string($string)){
			$string = trim($string);
			
			if($string!="")
				return $string;
		}
	}//Fin de la función setString
	
	public function setNumber($number = false){
		if(is_numeric($number)){
			if($number>=0)
				return $number;
		}
	}//Fin de la función setNumber
	
	private function purifier($victim)
	{
		
		$victim=str_replace('"',"", $victim);
		
		$victim=str_replace("'","", $victim);
		
		$victim=str_replace(";","",$victim);
		
		return $victim;
	}
	
	private function eraseWhiteSpaces($victim)
	{
		return str_replace(" ","",$victim);
	}
	
}//Fin de collectData
?>