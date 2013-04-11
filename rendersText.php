<?php

class rendersText extends extensionBridge{

	public function __construct($config="")
	{
		parent::addExt(new coreAttributes());
		parent::addExt(new extendAttributes());
		parent::addExt(new mouseEvents());
		parent::addExt(new keyboardEvents());
		
		if (is_array($config))
		{					
			foreach($config as $key=>$value)
			{
				
				strtolower($key);
				$case="set".ucwords($key);
				
				switch(trim($case))
				{
					//Standard Attributes
					case "setClass":					
					case "setDir":					
					case "setId":				
					case "setLang":	
					case "setStyle":
					case "setTitle":
					//Event Attributes
					case "setOnclick":
					case "setOndblclick":
					case "setOnmousedown":
					case "setOnmousemove":
					case "setOnmouseout":
					case "setOnmouseover":
					case "setOnmouseup":
					case "setOnkeydown":
					case "setOnkeypress":
					case "setOnkeyup":
							$this->$case($value);
					break;
					//Alias' Standard Attributes
					case "setXmllang":
						$this->setLang($value);
					break;
					
					case"setXml_lang";
						$this->setLang($value);
					break;
				}
			}
		}	
	}//fin del constructor
	
	//Atributos no soportados
	public function setTabindex(){}
	
}


?>