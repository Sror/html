<?php

class mediaEvents extends cleaner
{
	private $auxiliar;
	
	private $mediaEvents = array(
		"onabort"=>array(),
		"oncanplay"=>array(),
		"oncanplaythrough"=>array(),
		"ondurationchange"=>array(),
		"onemptied"=>array(),
		"onended"=>array(),
		"onerror"=>array(),
		"onloadeddata"=>array(),
		"onloadedmetadata"=>array(),
		"onloadstart"=>array(),
		"onpause"=>array(),
		"onplay"=>array(),
		"onplaying"=>array(),
		"onprogress"=>array(),
		"onratechange"=>array(),
		"onreadystatechange"=>array(),
		"onseeked"=>array(),
		"onseeking"=>array(),
		"onstalled"=>array(),
		"onsuspend"=>array(),
		"ontimeupdate"=>array(),
		"onvolumechange"=>array(),
		"onwaiting"=>array()
	);
	
		
	public function mediaEvents($config =  false)
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
					case "setOnabort":
					case "setOncanplaythrough":
					case "setOncanplay":
					case "setOndurationchange":
					case "setOnemptied":
					case "setOnended":
					case "setOnerror":
					case "setOnloadeddata":
					case "setOnloadedmetadata":
					case "setOnloadstart":
					case "setOnpause":
					case "setOnplay":
					case "setOnplaying":
					case "setOnprogress":
					case "setOnratechange":
					case "setOnreadystatechange":
					case "setOnseeked":
					case "setOnseeking":
					case "setOnstalled":
					case "setOnsuspend":
					case "setOntimeupdate":
					case "setOnvolumechange":
					case "setOnwaiting":
						$this->$case($value);
					break;
				}//Fin de switch
				
			}//Fin de la función foreach
			
		}//Fin del if is_array
		
	}//Fin de la función setConfig

	public function setOnabort($func = false){ 
		$this->mediaEvents['onabort']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnabort
	public function setOncanplay($func = false){
		$this->mediaEvents['oncanplay']=$this->auxiliar->setElement($func);
	}//Fin de la función setOncanplay
	public function setOncanplaythrough($func = false){
		$this->mediaEvents['oncanplaythrough']=$this->auxiliar->setElement($func);
	}//Fin de la función setOncanplaythrough
	public function setOndurationchange($func = false){
		$this->mediaEvents['ondurationchange']=$this->auxiliar->setElement($func);
	}//Fin de la función setOndurationchange
	public function setOnemptied($func = false){
		$this->mediaEvents['onemptied']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnemptied
	public function setOnended($func = false){
		$this->mediaEvents['onended']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnended
	public function setOnerror($func = false){
		$this->mediaEvents['onerror']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnerror
	public function setOnloadeddata($func = false){
		$this->mediaEvents['onloadeddata']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnloadeddata
	public function setOnloadedmetadata($func = false){
		$this->mediaEvents['onloadedmetadata']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnloadedmetadata
	public function setOnloadstart($func = false){
		$this->mediaEvents['loadstart']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnloadstart
	public function setOnpause($func = false){
		$this->mediaEvents['onpause']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnpause
	public function setOnplay($func = false){
		$this->mediaEvents['onplay']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnplay
	public function setOnplaying($func = false){
		$this->mediaEvents['onplaying']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnplaying
	public function setOnprogress($func = false){
		$this->mediaEvents['onprogress']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnprogress
	public function setOnratechange($func = false){
		$this->mediaEvents['onratechange']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnratechange
	public function setOnreadystatechange($func = false){
		$this->mediaEvents['onreadystatechange']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnreadystatechange
	public function setOnseeked($func = false){
		$this->mediaEvents['onseeked']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnseeked
	public function setOnseeking($func = false){
		$this->mediaEvents['onseeking']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnseeking
	public function setOnstalled($func = false){
		$this->mediaEvents['onstalled']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnstalled
	public function setOnsuspend($func = false){
		$this->mediaEvents['onsuspend']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnsuspend
	public function setOntimeupdate($func = false){
		$this->mediaEvents['ontimeupdate']=$this->auxiliar->setElement($func);
	}//Fin de la función setOntimeupdate
	public function setOnvolumechange($func = false){
		$this->mediaEvents['onvolumechange']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnvolumechange
	public function setOnwaiting($func = false){
		$this->mediaEvents['onwaiting']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnwaiting
	
	public function addOnabort($func = false){ 
		$this->mediaEvents['onabort']=$this->auxiliar->addElement($this->mediaEvents['onabort'],$func);
	}//Fin de la función addOnabort
	public function addOncanplay($func = false){
		$this->mediaEvents['oncanplay']=$this->auxiliar->addElement($this->mediaEvents['oncanplay'],$func);
	}//Fin de la función addOncanplay
	public function addOncanplaythrough($func = false){
		$this->mediaEvents['oncanplaythrough']=$this->auxiliar->addElement($this->mediaEvents['onclanplaythrough'],$func);
	}//Fin de la función addOncanplaythrough
	public function addOndurationchange($func = false){
		$this->mediaEvents['ondurationchange']=$this->auxiliar->addElement($this->mediaEvents['ondurationchange'],$func);
	}//Fin de la función addOndurationchange
	public function addOnemptied($func = false){
		$this->mediaEvents['onemptied']=$this->auxiliar->addElement($this->mediaEvents['onemptied'],$func);
	}//Fin de la función addOnemptied
	public function addOnended($func = false){
		$this->mediaEvents['onended']=$this->auxiliar->addElement($this->mediaEvents['onended'],$func);
	}//Fin de la función addOnended
	public function addOnerror($func = false){
		$this->mediaEvents['onerror']=$this->auxiliar->addElement($this->mediaEvents['onerror'],$func);
	}//Fin de la función addOnerror
	public function addOnloadeddata($func = false){
		$this->mediaEvents['onloadeddata']=$this->auxiliar->addElement($this->mediaEvents['onloadeddata'],$func);
	}//Fin de la función addOnloadeddata
	public function addOnloadedmetadata($func = false){
		$this->mediaEvents['onloadedmetadata']=$this->auxiliar->addElement($this->mediaEvents['onloadedmetadata'],$func);
	}//Fin de la función addOnloadedmetadata
	public function addOnloadstart($func = false){
		$this->mediaEvents['onloadstart']=$this->auxiliar->addElement($this->mediaEvents['onloadstart'],$func);
	}//Fin de la función addOnloadstart
	public function addOnpause($func = false){
		$this->mediaEvents['onpause']=$this->auxiliar->addElement($this->mediaEvents['onpause'],$func);
	}//Fin de la función addOnpause
	public function addOnplay($func = false){
		$this->mediaEvents['onplay']=$this->auxiliar->addElement($this->mediaEvents['onplay'],$func);
	}//Fin de la función addOnplay
	public function addOnplaying($func = false){
		$this->mediaEvents['onplaying']=$this->auxiliar->addElement($this->mediaEvents['onplaying'],$func);
	}//Fin de la función addOnplaying
	public function addOnprogress($func = false){
		$this->mediaEvents['onprogress']=$this->auxiliar->addElement($this->mediaEvents['onprogress'],$func);
	}//Fin de la función addOnprogress
	public function addOnratechange($func = false){
		$this->mediaEvents['onratechange']=$this->auxiliar->addElement($this->mediaEvents['onratechange'],$func);
	}//Fin de la función addOnratechange
	public function addOnreadystatechange($func = false){
		$this->mediaEvents['onreadystatechange']=$this->auxiliar->addElement($this->mediaEvents['onreadystatechange'],$func);
	}//Fin de la función addOnreadystatechange
	public function addOnseeked($func = false){
		$this->mediaEvents['onseeked']=$this->auxiliar->addElement($this->mediaEvents['onseeked'],$func);
	}//Fin de la función addOnseeked
	public function addOnseeking($func = false){
		$this->mediaEvents['onseeking']=$this->auxiliar->addElement($this->mediaEvents['onseeking'],$func);
	}//Fin de la función addOnseeking
	public function addOnstalled($func = false){
		$this->mediaEvents['onstalled']=$this->auxiliar->addElement($this->mediaEvents['onstalled'],$func);
	}//Fin de la función addOnstalled
	public function addOnsuspend($func = false){
		$this->mediaEvents['onsuspend']=$this->auxiliar->addElement($this->mediaEvents['onsuspend'],$func);
	}//Fin de la función addOnsuspend
	public function addOntimeupdate($func = false){
		$this->mediaEvents['ontimeupdate']=$this->auxiliar->addElement($this->mediaEvents['ontimeupdate'],$func);
	}//Fin de la función addOntimeupdate
	public function addOnvolumechange($func = false){
		$this->mediaEvents['onvolumechange']=$this->auxiliar->addElement($this->mediaEvents['onvolumechange'],$func);
	}//Fin de la función addOnvolumechange
	public function addOnwaiting($func = false){
		$this->mediaEvents['onwaiting']=$this->auxiliar->addElement($this->mediaEvents['onwaiting'],$func);
	}//Fin de la función addOnwaiting
	
	public function removeOnabort($func = false){ 
		$this->mediaEvents['onabort']=$this->auxiliar->removeElement($this->mediaEvents['onabort'],$func);
	}//Fin de la función removeOnabort
	public function removeOncanplay($func = false){
		$this->mediaEvents['oncanplay']=$this->auxiliar->removeElement($this->mediaEvents['oncanplay'],$func);
	}//Fin de la función removeOncanplay
	public function removeOncanplaythrough($func = false){
		$this->mediaEvents['oncanplaythrough']=$this->auxiliar->removeElement($this->mediaEvents['onclanplaythrough'],$func);
	}//Fin de la función removeOncanplaythrough
	public function removeOndurationchange($func = false){
		$this->mediaEvents['ondurationchange']=$this->auxiliar->removeElement($this->mediaEvents['ondurationchange'],$func);
	}//Fin de la función removeOndurationchange
	public function removeOnemptied($func = false){
		$this->mediaEvents['onemptied']=$this->auxiliar->removeElement($this->mediaEvents['onemptied'],$func);
	}//Fin de la función removeOnemptied
	public function removeOnended($func = false){
		$this->mediaEvents['onended']=$this->auxiliar->removeElement($this->mediaEvents['onended'],$func);
	}//Fin de la función removeOnended
	public function removeOnerror($func = false){
		$this->mediaEvents['onerror']=$this->auxiliar->removeElement($this->mediaEvents['onerror'],$func);
	}//Fin de la función removeOnerror
	public function removeOnloadeddata($func = false){
		$this->mediaEvents['onloadeddata']=$this->auxiliar->removeElement($this->mediaEvents['onloadeddata'],$func);
	}//Fin de la función removeOnloadeddata
	public function removeOnloadedmetadata($func = false){
		$this->mediaEvents['onloadedmetadata']=$this->auxiliar->removeElement($this->mediaEvents['onloadedmetadata'],$func);
	}//Fin de la función removeOnloadedmetadata
	public function removeOnloadstart($func = false){
		$this->mediaEvents['onloadstart']=$this->auxiliar->removeElement($this->mediaEvents['onloadstart'],$func);
	}//Fin de la función removeOnloadstart
	public function removeOnpause($func = false){
		$this->mediaEvents['onpause']=$this->auxiliar->removeElement($this->mediaEvents['onpause'],$func);
	}//Fin de la función removeOnpause
	public function removeOnplay($func = false){
		$this->mediaEvents['onplay']=$this->auxiliar->removeElement($this->mediaEvents['onplay'],$func);
	}//Fin de la función removeOnplay
	public function removeOnplaying($func = false){
		$this->mediaEvents['onplaying']=$this->auxiliar->removeElement($this->mediaEvents['onplaying'],$func);
	}//Fin de la función removeOnplaying
	public function removeOnprogress($func = false){
		$this->mediaEvents['onprogress']=$this->auxiliar->removeElement($this->mediaEvents['onprogress'],$func);
	}//Fin de la función removeOnprogress
	public function removeOnratechange($func = false){
		$this->mediaEvents['onratechange']=$this->auxiliar->removeElement($this->mediaEvents['onratechange'],$func);
	}//Fin de la función removeOnratechange
	public function removeOnreadystatechange($func = false){
		$this->mediaEvents['onreadystatechange']=$this->auxiliar->removeElement($this->mediaEvents['onreadystatechange'],$func);
	}//Fin de la función removeOnreadystatechange
	public function removeOnseeked($func = false){
		$this->mediaEvents['onseeked']=$this->auxiliar->removeElement($this->mediaEvents['onseeked'],$func);
	}//Fin de la función removeOnseeked
	public function removeOnseeking($func = false){
		$this->mediaEvents['onseeking']=$this->auxiliar->removeElement($this->mediaEvents['onseeking'],$func);
	}//Fin de la función removeOnseeking
	public function removeOnstalled($func = false){
		$this->mediaEvents['onstalled']=$this->auxiliar->removeElement($this->mediaEvents['onstalled'],$func);
	}//Fin de la función removeOnstalled
	public function removeOnsuspend($func = false){
		$this->mediaEvents['onsuspend']=$this->auxiliar->removeElement($this->mediaEvents['onsuspend'],$func);
	}//Fin de la función removeOnsuspend
	public function removeOntimeupdate($func = false){
		$this->mediaEvents['ontimeupdate']=$this->auxiliar->removeElement($this->mediaEvents['ontimeupdate'],$func);
	}//Fin de la función removeOntimeupdate
	public function removeOnvolumechange($func = false){
		$this->mediaEvents['onvolumechange']=$this->auxiliar->removeElement($this->mediaEvents['onvolumechange'],$func);
	}//Fin de la función removeOnvolumechange
	public function removeOnwaiting($func = false){
		$this->mediaEvents['onwaiting']=$this->auxiliar->removeElement($this->mediaEvents['onwaiting'],$func);
	}//Fin de la función removeOnwaiting
	
	public function changeOnabort($func = false, $newfunc = false){ 
		$this->mediaEvents['onabort']=$this->auxiliar->changeElement($this->mediaEvents['onabort'],$func,$newfunc);
	}//Fin de la función changeOnabort
	public function changeOncanplay($func = false, $newfunc = false){
		$this->mediaEvents['oncanplay']=$this->auxiliar->changeElement($this->mediaEvents['oncanplay'],$func,$newfunc);
	}//Fin de la función changeOncanplay
	public function changeOncanplaythrough($func = false, $newfunc = false){
		$this->mediaEvents['oncanplaythrough']=$this->auxiliar->changeElement($this->mediaEvents['onclanplaythrough'],$func,$newfunc);
	}//Fin de la función changeOncanplaythrough
	public function changeOndurationchange($func = false, $newfunc = false){
		$this->mediaEvents['ondurationchange']=$this->auxiliar->changeElement($this->mediaEvents['ondurationchange'],$func,$newfunc);
	}//Fin de la función changeOndurationchange
	public function changeOnemptied($func = false, $newfunc = false){
		$this->mediaEvents['onemptied']=$this->auxiliar->changeElement($this->mediaEvents['onemptied'],$func,$newfunc);
	}//Fin de la función changeOnemptied
	public function changeOnended($func = false, $newfunc = false){
		$this->mediaEvents['onended']=$this->auxiliar->changeElement($this->mediaEvents['onended'],$func,$newfunc);
	}//Fin de la función changeOnended
	public function changeOnerror($func = false, $newfunc = false){
		$this->mediaEvents['onerror']=$this->auxiliar->changeElement($this->mediaEvents['onerror'],$func,$newfunc);
	}//Fin de la función changeOnerror
	public function changeOnloadeddata($func = false, $newfunc = false){
		$this->mediaEvents['onloadeddata']=$this->auxiliar->changeElement($this->mediaEvents['onloadeddata'],$func,$newfunc);
	}//Fin de la función changeOnloadeddata
	public function changeOnloadedmetadata($func = false, $newfunc = false){
		$this->mediaEvents['onloadedmetadata']=$this->auxiliar->changeElement($this->mediaEvents['onloadedmetadata'],$func,$newfunc);
	}//Fin de la función changeOnloadedmetadata
	public function changeOnloadstart($func = false, $newfunc = false){
		$this->mediaEvents['onloadstart']=$this->auxiliar->changeElement($this->mediaEvents['onloadstart'],$func,$newfunc);
	}//Fin de la función changeOnloadstart
	public function changeOnpause($func = false, $newfunc = false){
		$this->mediaEvents['onpause']=$this->auxiliar->changeElement($this->mediaEvents['onpause'],$func,$newfunc);
	}//Fin de la función changeOnpause
	public function changeOnplay($func = false, $newfunc = false){
		$this->mediaEvents['onplay']=$this->auxiliar->changeElement($this->mediaEvents['onplay'],$func,$newfunc);
	}//Fin de la función changeOnplay
	public function changeOnplaying($func = false, $newfunc = false){
		$this->mediaEvents['onplaying']=$this->auxiliar->changeElement($this->mediaEvents['onplaying'],$func,$newfunc);
	}//Fin de la función changeOnplaying
	public function changeOnprogress($func = false, $newfunc = false){
		$this->mediaEvents['onprogress']=$this->auxiliar->changeElement($this->mediaEvents['onprogress'],$func,$newfunc);
	}//Fin de la función changeOnprogress
	public function changeOnratechange($func = false, $newfunc = false){
		$this->mediaEvents['onratechange']=$this->auxiliar->changeElement($this->mediaEvents['onratechange'],$func,$newfunc);
	}//Fin de la función changeOnratechange
	public function changeOnreadystatechange($func = false, $newfunc = false){
		$this->mediaEvents['onreadystatechange']=$this->auxiliar->changeElement($this->mediaEvents['onreadystatechange'],$func,$newfunc);
	}//Fin de la función changeOnreadystatechange
	public function changeOnseeked($func = false, $newfunc = false){
		$this->mediaEvents['onseeked']=$this->auxiliar->changeElement($this->mediaEvents['onseeked'],$func,$newfunc);
	}//Fin de la función changeOnseeked
	public function changeOnseeking($func = false, $newfunc = false){
		$this->mediaEvents['onseeking']=$this->auxiliar->changeElement($this->mediaEvents['onseeking'],$func,$newfunc);
	}//Fin de la función changeOnseeking
	public function changeOnstalled($func = false, $newfunc = false){
		$this->mediaEvents['onstalled']=$this->auxiliar->changeElement($this->mediaEvents['onstalled'],$func,$newfunc);
	}//Fin de la función changeOnstalled
	public function changeOnsuspend($func = false, $newfunc = false){
		$this->mediaEvents['onsuspend']=$this->auxiliar->changeElement($this->mediaEvents['onsuspend'],$func,$newfunc);
	}//Fin de la función changeOnsuspend
	public function changeOntimeupdate($func = false, $newfunc = false){
		$this->mediaEvents['ontimeupdate']=$this->auxiliar->changeElement($this->mediaEvents['ontimeupdate'],$func,$newfunc);
	}//Fin de la función changeOntimeupdate
	public function changeOnvolumechange($func = false, $newfunc = false){
		$this->mediaEvents['onvolumechange']=$this->auxiliar->changeElement($this->mediaEvents['onvolumechange'],$func,$newfunc);
	}//Fin de la función changeOnvolumechange
	public function changeOnwaiting($func = false, $newfunc = false){
		$this->mediaEvents['onwaiting']=$this->auxiliar->changeElement($this->mediaEvents['onwaiting'],$func,$newfunc);
	}//Fin de la función changeOnwaiting
	
	public function printMediaEvents()
	{
		foreach($this->mediaEvents as $key=>$row)
			(count($row))?$this->auxiliar->printerStack($row,$key):"";
	}//Fin de la función mediaEvents
}//Fin de la clase mediaEvents
