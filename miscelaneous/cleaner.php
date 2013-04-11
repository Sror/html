<?php
class cleaner{
	protected function purifier($victim)
	{
		
		$victim=str_replace('"',"", $victim);
		
		$victim=str_replace("'","", $victim);
		
		$victim=str_replace(";","",$victim);
		
		return $victim;
	}
	
	protected function eraseWhiteSpaces($victim)
	{
		return str_replace(" ","",$victim);
	}
}