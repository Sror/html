<?php
include "stack.php";

class windowEventAttributes extends stack
{
	private $windowEventAttributes = array (
		"onafterprint"=>array(),		//Script to be run after the document is printed
		"onbeforeprint"=>array(),	//Script to be run before the document is printed
		"onbeforeunload"=>array(),	//Script to be run before the document is unloaded
		"onerror"=>array(),		//Script to be run when an error occur
		"onhaschange"=>array(),	//Script to be run when the document has changed
		"onload"=>array(),			//Fires after the pages is finished loading
		"onmessage"=>array(),		//Script to be run when the message is triggered
		"onoffline"=>array(),		//Script to be run when the document goes offline
		"ononline"=>array(),		//Script to be run when the document comes online
		"onpagehide"=>array(),	//Script to be run when the window is hidden
		"onpageshow"=>array(),	//Script to be run when the window becomes visible
		"onpopstate"=>array(),		//Script to be run when the window's history changes
		"onredo"=>array(),		//Script to be run when the document performs a redo
		"onresize"=>array(),		//Fires when the browser window is resized
		"onstorage"=>array(),		//Script to be run when a Web Storage area is updated
		"onundo"=>array(),		//Script to be run when the document performs an undo
		"onunload"=>array()		//Fires once a page has unloaded (or the browser window has been closed)
	);

	private $auxiliar;
	
	public function windowEventAttributes($config =  false)
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
					case "setOnafterprint":
					case "setOnbeforeunload":
					case "setOnbeforeprint":
					case "setOnerror":
					case "setOnhaschange":
					case "setOnload":
					case "setOnmessage":
					case "setOnoffline":
					case "setOnonline":
					case "setOnpagehide":
					case "setOnpageshow":
					case "setOnpopstate":
					case "setOnredo":
					case "setOnrize":
					case "setOnstorage":
					case "setOnundo":
					case "setOnunload":
						$this->$case($value);
					break;
				}//Fin de switch
				
			}//Fin de la función foreach
			
		}//Fin del if is_array
		
	}//Fin de la función setConfig
	
	
	public function setOnafterprint($func = false){
		$this->windowEventAttributes['onafterprint']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnafterprint
	public function setOnbeforeunload($func = false){
		$this->windowEventAttributes['onbeforeunload']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnbeforeunload
	public function setOnbeforeprint($func = false){
		$this->windowEventAttributes['onbeforeprint']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnbeforeprint
	public function setOnbeforeload($func = false){
		$this->windowEventAttributes['onbeforeload']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnbeforeload
	public function setOnerror($func = false){
		$this->windowEventAttributes['onerror']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnerror
	public function setOnhaschange($func = false){
		$this->windowEventAttributes['onhaschange']=$this->auxiliar->setElement($func);	
	}//Fin de la función setOnhaschange
	public function setOnload($func = false){
		$this->windowEventAttributes['onload']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnload
	public function setOnmessage($func = false){
		$this->windowEventAttributes['onmessage']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnmessage
	public function setOnoffline($func = false){
		$this->windowEventAttributes['onoffline']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnoffline
	public function setOnonline($func = false){
		$this->windowEventAttributes['ononline']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnonline
	public function setOnpagehide($func = false){
		$this->windowEventAttributes['onpagehide']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnpagehide
	public function setOnpageshow($func = false){
		$this->windowEventAttributes['onpageshow']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnpageshow
	public function setOnpopstate($func = false){
		$this->windowEventAttributes['onpopstate']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnpopstate
	public function setOnredo($func = false){
		$this->windowEventAttributes['onredo']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnredo
	public function setOnresize($func = false){
		$this->windowEventAttributes['onresize']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnresize
	public function setOnstorage($func = false){
		$this->windowEventAttributes['onstorage']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnstorage
	public function setOnundo($func = false){
		$this->windowEventAttributes['onundo']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnundo
	public function setOnunload($func = false){
		$this->windowEventAttributes['onunload']=$this->auxiliar->setElement($func);
	}//Fin de la función setOnunload


	private function getOnafterprint(){
		return $this->windowEventAttributes['onafterprint'];
	}//Fin de la función getOnafterprint
	private function getOnbeforeprint(){
		return $this->windowEventAttributes['onbeforeprint'];
	}//Fin de la función getOnbeforeprint
	private function getOnbeforeload(){
		return $this->windowEventAttributes['onbeforeload'];
	}//Fin de la función getOnbeforeload
	private function getOnerror(){
		return $this->windowEventAttributes['onerror'];
	}//Fin de la función getOnerror
	private function getOnhaschange(){
		return $this->windowEventAttributes['onhaschange'];
	}//Fin de la función getOnhaschange
	private function getOnload(){
		return $this->windowEventAttributes['onload'];
	}//Fin de la función getOnload
	private function getOnmessage(){
		return $this->windowEventAttributes['onmessage'];
	}//Fin de la función getOnmessage
	private function getOnoffline(){
		return $this->windowEventAttributes['onoffline'];
	}//Fin de la función getOnoffline
	private function getOnonline(){
		return $this->windowEventAttributes['ononline'];	
	}//Fin de la función getOnonline
	private function getOnpagehide(){
		return $this->windowEventAttributes['onpagehide'];
	}//Fin de la función getOnpagehide
	private function getOnpageshow(){
		return $this->windowEventAttributes['onpageshow'];
	}//Fin de la función getOnpageshow
	private function getOnpopstate(){
		return $this->windowEventAttributes['onpopstate'];
	}//Fin de la función getOnpopstate
	private function getOnredo(){
		return $this->windowEventAttributes['onredo'];
	}//Fin de la función getOnredo
	private function getOnresize(){
		return $this->windowEventAttributes['onresize'];
	}//Fin de la función getOnresize
	private function getOnstorage(){
		return $this->windowEventAttributes['onstorage'];
	}//Fin de la función getOnstorage
	private function getOnundo(){
		return $this->windowEventAttributes['onundo'];
	}//Fin de la función getOnundo
	private function getOnunload(){
		return $this->windowEventAttributes['onunload'];	
	}//Fin de la función getOunload

	public function addOnafterprint($func = false){
		$this->windowEventAttributes['onafterprint'] = $this->auxiliar->addElement($this->windowEventAttributes['onafterprint'],$func);
	}//Fin de la función addOnafterprint
	public function addOnbeforeprint($func = false){
		$this->windowEventAttributes['onbeforeprint'] = $this->auxiliar->addElement($this->windowEventAttributes['onbeforeprint'],$func);
	}//Fin de la función addOnbeforeprint
	public function addOnbeforeload($func = false){
		$this->windowEventAttributes['onbeforeload'] = $this->auxiliar->addElement($this->windowEventAttributes['onbeforeload'],$func);	
	}//Fin de la función addOnbeforeload
	public function addOnerror($func = false){
		$this->windowEventAttributes['onerror'] = $this->auxiliar->addElement($this->windowEventAttributes['onerror'],$func);
	}//Fin de la función addOnerror
	public function addOnhaschange($func = false){
		$this->windowEventAttributes['onhaschange'] = $this->auxiliar->addElement($this->windowEventAttributes['onhaschange'],$func);	
	}//Fin de la función addOnhaschange
	public function addOnload($func = false){
		$this->windowEventAttributes['onload'] = $this->auxiliar->addElement($this->windowEventAttributes['onload'],$func);	
	}//Fin de la función addOnload
	public function addOnmessage($func = false){
		$this->windowEventAttributes['onmessage'] = $this->auxiliar->addElement($this->windowEventAttributes['onmessage'],$func);	
	}//Fin de la función addOnmessage
	public function addOnoffline($func = false){
		$this->windowEventAttributes['onoffline'] = $this->auxiliar->addElement($this->windowEventAttributes['onoffline'],$func);	
	}//Fin de la función addOnoffline
	public function addOnonline($func = false){
		$this->windowEventAttributes['ononline'] = $this->auxiliar->addElement($this->windowEventAttributes['ononline'],$func);	
	}//Fin de la función addOnonline
	public function addOnpagehide($func = false){
		$this->windowEventAttributes['onpagehide'] = $this->auxiliar->addElement($this->windowEventAttributes['onpagehide'],$func);		
	}//Fin de la función addOnpagehide
	public function addOnpageshow($func = false){
		$this->windowEventAttributes['onpageshow'] = $this->auxiliar->addElement($this->windowEventAttributes['onpageshow'],$func);		
	}//Fin de la función addOnpageshow
	public function addOnpopstate($func = false){
		$this->windowEventAttributes['onpopstate'] = $this->auxiliar->addElement($this->windowEventAttributes['onpopstate'],$func);		
	}//Fin de la función addOnpopstate
	public function addOnredo($func = false){
		$this->windowEventAttributes['onredo'] = $this->auxiliar->addElement($this->windowEventAttributes['onredo'],$func);		
	}//Fin de la función addOnredo
	public function addOnresize($func = false){
		$this->windowEventAttributes['onresize'] = $this->auxiliar->addElement($this->windowEventAttributes['onresize'],$func);		
	}//Fin de la función addOnresize
	public function addOnstorage($func = false){
		$this->windowEventAttributes['onstorage'] = $this->auxiliar->addElement($this->windowEventAttributes['onstorage'],$func);		
	}//Fin de la función addOnstorage
	public function addOnundo($func = false){
		$this->windowEventAttributes['onundo'] = $this->auxiliar->addElement($this->windowEventAttributes['onundo'],$func);		
	}//Fin de la función addOnundo
	public function addOnunload($func = false){
		$this->windowEventAttributes['onunload'] = $this->auxiliar->addElement($this->windowEventAttributes['onunload'],$func);		
	}//Fin de la función addOnunload

	public function removeOnafterprint($func = false){
		$this->windowEventAttributes['onafterprint']=$this->auxiliar->removeElement($this->windowEventAttributes['onafterprint'],$func);
	}//Fin de la función removeOnafterprint
	public function removeOnbeforeprint($func = false){
		$this->windowEventAttributes['onbeforeprint']=$this->auxiliar->removeElement($this->windowEventAttributes['onbeforeprint'],$func);		
	}//Fin de la función removeOnbeforeprint
	public function removeOnbeforeload($func = false){
		$this->windowEventAttributes['onbeforeload']=$this->auxiliar->removeElement($this->windowEventAttributes['onbeforeload'],$func);		
	}//Fin de la función removeOnbeforeload
	public function removeOnerror($func = false){
		$this->windowEventAttributes['onerror']=$this->auxiliar->removeElement($this->windowEventAttributes['onerror'],$func);	
	}//Fin de la función removeOnerror
	public function removeOnhaschange($func = false){
		$this->windowEventAttributes['onhaschange']=$this->auxiliar->removeElement($this->windowEventAttributes['onhaschange'],$func);		
	}//Fin de la función removeOnhaschange
	public function removeOnload($func = false){
		$this->windowEventAttributes['onload']=$this->auxiliar->removeElement($this->windowEventAttributes['onload'],$func);		
	}//Fin de la función removeOnload
	public function removeOnmessage($func = false){
		$this->windowEventAttributes['onmessage']=$this->auxiliar->removeElement($this->windowEventAttributes['onmessage'],$func);		
	}//Fin de la función removeOnmessage
	public function removeOnoffline($func = false){
		$this->windowEventAttributes['onoffline']=$this->auxiliar->removeElement($this->windowEventAttributes['onoffline'],$func);		
	}//Fin de la función removeOnoffline
	public function removeOnonline($func = false){
		$this->windowEventAttributes['ononline']=$this->auxiliar->removeElement($this->windowEventAttributes['ononline'],$func);	
	}//Fin de la función removeOnonline
	public function removeOnpagehide($func = false){
		$this->windowEventAttributes['onpagehide']=$this->auxiliar->removeElement($this->windowEventAttributes['onpagehide'],$func);	
	}//Fin de la función removeOnpagehide
	public function removeOnpageshow($func = false){
		$this->windowEventAttributes['onpageshow']=$this->auxiliar->removeElement($this->windowEventAttributes['onpageshow'],$func);		
	}//Fin de la función removeOnpageshow
	public function removeOnpopstate($func = false){
		$this->windowEventAttributes['onpopstate']=$this->auxiliar->removeElement($this->windowEventAttributes['onpopstate'],$func);		
	}//Fin de la función removeOnpopstate
	public function removeOnredo($func = false){
		$this->windowEventAttributes['onredo']=$this->auxiliar->removeElement($this->windowEventAttributes['onredo'],$func);	
	}//Fin de la función removeOnredo
	public function removeOnresize($func = false){
		$this->windowEventAttributes['onresize']=$this->auxiliar->removeElement($this->windowEventAttributes['onresize'],$func);		
	}//Fin de la función removeOnresize
	public function removeOnstorage($func = false){
		$this->windowEventAttributes['onstorage']=$this->auxiliar->removeElement($this->windowEventAttributes['onstorage'],$func);		
	}//Fin de la función removeOnstorage
	public function removeOnundo($func = false){
		$this->windowEventAttributes['onundo']=$this->auxiliar->removeElement($this->windowEventAttributes['onundo'],$func);		
	}//Fin de la función removeOnundo
	public function removeOnunload($func = false){
		$this->windowEventAttributes['onunload']=$this->auxiliar->removeElement($this->windowEventAttributes['onunload'],$func);		
	}//Fin de la función removeOnunload

	public function changeOnafterprint($func = false,$newfunc = false){
		$this->windowEventAttributes['onafterprint']=$this->auxiliar->changeElement($this->windowEventAttributes['onafterprint'],$func,$newfunc);		
	}//Fin de la función changeOnafterprint
	public function changeOnbeforeprint($func = false,$newfunc = false){
		$this->windowEventAttributes['onbeforeprint']=$this->auxiliar->changeElement($this->windowEventAttributes['onbeforeprint'],$func,$newfunc);		
	}//Fin de la función changeOnbeforeprint
	public function changeOnbeforeload($func = false,$newfunc = false){
		$this->windowEventAttributes['onbeforeload']=$this->auxiliar->changeElement($this->windowEventAttributes['onbeforeload'],$func,$newfunc);	
	}//Fin de la función changeOnbeforeload
	public function changeOnerror($func = false,$newfunc = false){
		$this->windowEventAttributes['onerror']=$this->auxiliar->changeElement($this->windowEventAttributes['onerror'],$func,$newfunc);		
	}//Fin de la función changeOnerror
	public function changeOnhaschange($func = false,$newfunc = false){
		$this->windowEventAttributes['onhaschange']=$this->auxiliar->changeElement($this->windowEventAttributes['onhaschange'],$func,$newfunc);	
	}//Fin de la función changeOnhaschange
	public function changeOnload($func = false,$newfunc = false){
		$this->windowEventAttributes['onload']=$this->auxiliar->changeElement($this->windowEventAttributes['onload'],$func,$newfunc);		
	}//Fin de la función changeOnload
	public function changeOnmessage($func = false,$newfunc = false){
		$this->windowEventAttributes['onmessage']=$this->auxiliar->changeElement($this->windowEventAttributes['onmessage'],$func,$newfunc);		
	}//Fin de la función changeOnmessage
	public function changeOnoffline($func = false,$newfunc = false){
		$this->windowEventAttributes['onoffline']=$this->auxiliar->changeElement($this->windowEventAttributes['onoffline'],$func,$newfunc);		
	}//Fin de la función changeOnoffline
	public function changeOnonline($func = false,$newfunc = false){
		$this->windowEventAttributes['online']=$this->auxiliar->changeElement($this->windowEventAttributes['online'],$func,$newfunc);		
	}//Fin de la función changeOnonline
	public function changeOnpagehide($func = false,$newfunc = false){
		$this->windowEventAttributes['onpagehide']=$this->auxiliar->changeElement($this->windowEventAttributes['onpagehide'],$func,$newfunc);		
	}//Fin de la función changeOnpagehide
	public function changeOnpageshow($func = false,$newfunc = false){
		$this->windowEventAttributes['onpageshow']=$this->auxiliar->changeElement($this->windowEventAttributes['onpageshow'],$func,$newfunc);		
	}//Fin de la función changeOnpageshow
	public function changeOnpopstate($func = false,$newfunc = false){
		$this->windowEventAttributes['onpopstate']=$this->auxiliar->changeElement($this->windowEventAttributes['onpopstate'],$func,$newfunc);		
	}//Fin de la función changeOnpopstate
	public function changeOnredo($func = false,$newfunc = false){
		$this->windowEventAttributes['onredo']=$this->auxiliar->changeElement($this->windowEventAttributes['onredo'],$func,$newfunc);	
	}//Fin de la función changeOnredo
	public function changeOnresize($func = false,$newfunc = false){
		$this->windowEventAttributes['onresize']=$this->auxiliar->changeElement($this->windowEventAttributes['onresize'],$func,$newfunc);	
	}//Fin de la función changeOnresize
	public function changeOnstorage($func = false,$newfunc = false){
		$this->windowEventAttributes['onstorage']=$this->auxiliar->changeElement($this->windowEventAttributes['onstorage'],$func,$newfunc);		
	}//Fin de la función changeOnstorage
	public function changeOnundo($func = false,$newfunc = false){
		$this->windowEventAttributes['onundo']=$this->auxiliar->changeElement($this->windowEventAttributes['onundo'],$func,$newfunc);	
	}//Fin de la función changeOnundo
	public function changeOnunload($func = false,$newfunc = false){
		$this->windowEventAttributes['onunload']=$this->auxiliar->changeElement($this->windowEventAttributes['onunload'],$func,$newfunc);	
	}//Fin de la función changeOnunload

	public function printWindowEventAttributes()
	{
		foreach($this->windowEventAttributes as $key=>$row)
			(count($row))?$this->auxiliar->printerStack($row,$key):"";
	}//Fin de la función printWindowEventAttributes
	
}//Fin de la clase windowEventAttributes

?>