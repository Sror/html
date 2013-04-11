<?php

class  globalAttributes extends cleaner
{
	private $globalAttributes = array(
		//Standard attributes
		"accesskey"=>false,				//Specifies a shortcut key to activate/focus an element
		"class"=>array(),				//Specifies a classname for an element
		"contenteditable"=>false,		//Specifies whether the content of an element is editable or not
		"contextmenu"=>false,			//Specifies a context menu for an element. The context menu appears when a user right-clicks on the element
		"dir"=>false,					//Specifies the text direction for the content in an element
		"draggable"=>false,				//Specifies whether an element is draggable or not
		"dropzone"=>false,				//Specifies whether the dragged data is copied, moved or linked, when dropped
		"hidden"=>false,				//Specifies that an element is not yet, or is no longer, relevant
		"id"=>false,					//Specifies a unique id for an element
		"lang"=>false,					//Specifies the language of the element's content
		"spellcheck"=>false,			//Specifies whether the element is to have its spelling and grammar checked or not
		"style"=>false,					//Specifies an inline style for an element 	
		"tabindex"=>false,				//Specifies the tabbing order of an element
		"title"=>false					//Specifies extra information about an element
	);
	
	private $lang = array(
		"abkhazian"=>"ab",
		"afar"=>"aa",
		"afrikaans"=>"af",
		"albanian"=>"sq",
		"amharic"=>"am",
		"arabic"=>"ar",
		"aragonese"=>"an",
		"armenian"=>"hy",
		"assamese"=>"as",
		"aymara"=>"ay",
		"azerbaijani"=>"az",
		"bakhkir"=>"ba",
		"basque"=>"eu",
		"bengali"=>"bn",
		"bhutani"=>"dz",
		"bihari"=>"bh",
		"bislama"=>"bi",
		"breton"=>"br",
		"bulgarian"=>"bg",
		"burmese"=>"my",
		"byelorussian"=>"be",
		"cambodian"=>"km",
		"catalan"=>"ca",
		"chinese"=>"zh",
		"corsican"=>"co",
		"croatian"=>"hr",
		"czech"=>"cs",
		"danish"=>"da",
		"dutch"=>"nl",
		"english"=>"en",
		"esperanto"=>"eo",
		"estonian"=>"et",
		"faeroese"=>"fa",
		"farsi"=>"fj",
		"fiji"=>"fj",
		"finnish"=>"fi",
		"french"=>"fr",
		"frisian"=>"fy",
		"galician"=>"gl",
		"gaelic(scottish)"=>"gd",
		"gaelic(manx)"=>"gv",
		"georgian"=>"ka",
		"german"=>"de",
		"greek"=>"el",
		"greenlandic"=>"kl",
		"guarani"=>"gn",
		"gujarati"=>"gu",
		"haitian creole"=>"ht",
		"hausa"=>"ha",
		"hebrew"=>"he",
		"hindi"=>"hi",
		"hungarian"=>"hu",
		"icelandic"=>"is",
		"ido"=>"io",
		"indonesian"=>"id",
		"interlingua"=>"ia",
		"interlingue"=>"ie",
		"inuktitut"=>"iu",
		"inupiak"=>"ik",
		"irish"=>"ga",
		"italian"=>"it",
		"japanese"=>"ja",
		"japanese"=>"jv",
		"kannada"=>"kn",
		"kashmiri"=>"ks",
		"kazakh"=>"kk",
		"kinyarwanda"=>"rw",
		"kirghiz"=>"ky",
		"kirundi"=>"rn",
		"korean"=>"ko",
		"kurdish"=>"ku",
		"laothian"=>"lo",
		"latin"=>"la",
		"latvian"=>"lv",
		"limburgish"=>"li",
		"lingala"=>"ln",
		"lithuanian"=>"lt",
		"macedonian"=>"mk",
		"malagasy"=>"mg",
		"malay"=>"ms",
		"malayalam"=>"ml",
		"maltese"=>"mt",
		"maori"=>"mi",
		"marathi"=>"mr",
		"moldavian"=>"mo",
		"mongolian"=>"mn",
		"nauru"=>"na",
		"nepali"=>"ne",
		"norwegian"=>"no",
		"occitan"=>"oc",
		"oriya"=>"or",
		"oromo"=>"om",
		"pashto"=>"ps",
		"polish"=>"pl",
		"portuguese"=>"pt",
		"punjabi"=>"pa",
		"quechua"=>"qu",
		"rhaeto-romance"=>"rm",
		"romanian"=>"ro",
		"russian"=>"ru",
		"samoan"=>"sm",
		"sangro"=>"sg",
		"sanskrit"=>"sa",
		"serbian"=>"sr",
		"serbo-croatian"=>"sh",
		"sesotho"=>"st",
		"setswana"=>"tn",
		"shona"=>"sn",
		"sichuanyi"=>"ii",
		"sindhi"=>"sd",
		"sinhalese"=>"si",
		"siswati"=>"ss",
		"slovak"=>"sk",
		"slovenian"=>"sl",
		"somali"=>"so",
		"spanish"=>"es",
		"sundanese"=>"su",
		"swahili"=>"sw",
		"swedish"=>"sv",
		"tagalog"=>"tl",
		"tajik"=>"tg",
		"tamil"=>"ta",
		"tatar"=>"tt",
		"telegu"=>"te",
		"thai"=>"th",
		"tibetan"=>"bo",
		"tigrinya"=>"ti",
		"tonga"=>"to",
		"tsonga"=>"ts",
		"turkish"=>"tr",
		"turkmen"=>"tk",
		"twi"=>"tw",
		"uighur"=>"ug",
		"ukrainian"=>"uk",
		"urdu"=>"uz",
		"vietnamese"=>"vi",
		"volapuk"=>"vo",
		"wallon"=>"wa",
		"welsh"=>"cy",
		"wolof"=>"wo",
		"xhosa"=>"xh",
		"yiddish"=>"yi",
		"yoruba"=>"yo",
		"zulu"=>"zu"
	);
	
	public function globalAttributes($config = false)
	{
		$this->setConfig($config);
	}//fin del constructor
	
	
	public function setConfig ($config = false){
		
		if (($config) and (is_array($config)))
		{
			
				foreach($config as $key=>$value)
				{
					strtolower($key);
					$case="set".ucwords($key);
				
					switch(trim($case))
					{
						case "setAccesskey":
						case "setClass":
						case "setContenteditable":
						case "setContextmenu":
						case "setDir":
						case "setDraggable":
						case "setDropzone":
						case "setHidden":
						case "setId":
						case "setLang":
						case "setSpellcheck":
						case "setStyle":
						case "setTabindex":
						case "setTitle":
							$this->$case($value);
						break;
						
						default:
							//cargar en el log de posibles errores.
						break;	
					}
				}
		}//Fin del if de entrada
	}//Fin de la función setConfig
	
	public function setAccesskey($accesskey = false)
	{
		if (is_string($accesskey))
		{
			$accesskey = trim($accesskey);
			if (strlen($accesskey)==1){
				
				$this->globalAttributes['accesskey']=$accesskey;
			}
		}
	}//Fin de la funcion setAccesskey
	
	public function setClass($class = false)
	{
		if (is_array($class)){
			foreach ($class as $e){
				if(trim($e)!=""){
					$this->globalAttributes['class'][count($this->globalAttributes['class'])]=$this->eraseWhiteSpaces($e);
				}
			}
		}elseif(is_string($class)){
			$this->globalAttributes['class']= explode(" ", $class);
		}
	}//Fin de la funcion setClass
	
	public function setContenteditable ($contenteditable =false)
	{
		if($contenteditable)
		{
			$contenteditable = strtolower($contenteditable);
			switch($contenteditable)
			{
				case "true":
					$this->globalAttributes['contenteditable'] = "true";
				break;
				
				case "false":
					$this->globalAttributes['contenteditable'] = "false";
				break;
				
				case "inherit":
					$this->globalAttributes['contenteditable'] = "inherit";
				break;
			}
		}
	}//Fin de la función setContenteditable
	
	public function setContentmenu ($contentmenu = false)
	{
		if ($contentmenu)
		{
			$contentmenu = trim($contentmenu);
			
			$this->globalAttributes['contentmenu'] = $contentmenu;
		}
	}//Fin de la función setContentmenu
	
	public function setDir($dir = false)
	{
		if ($dir)
		{
			$dir = $this->eraseWhiteSpaces($dir);
			$dir = $this->purifier($dir);
			$dir = strtolower($dir);
			
			switch($dir)
			{
				case "ltr":
					$this->globalAttributes['dir']="ltr";
				break;
				
				case "rtl":
					$this->globalAttributes['dir']="rtl";
				break;
				
				case "auto":
					$this->globalAttributes['dir']="auto";
				break;
			}
		}//Fin del if
	}//Fin de la función setDir
	
	public function setDraggable ($draggable = false)
	{
		if($draggable)
		{
			$draggable = trim($draggable);
			
			switch(strtolower($draggable))
			{
				case "true":
					$this->globalAttributes['draggable'] = "true";
				break;
				
				case "false":
					$this->globalAttributes['draggable'] = "false";
				break;
				
				case "auto":
					$this->globalAttributes['draggable'] = "auto";
				break;
			}
		}
	}//Fin de la función setDraggable
	
	public function setDropzone ($dropzone = false)
	{
		if ($dropzone)
		{
			$dropzone = trim($dropzone);
			
			switch(strtolower($dropzone))
			{
				case "copy":
					$this->globalAttributes['dropzone'] = "copy";
				break;
				
				case "move":
					$this->globalAttributes['dropzone'] = "move";
				break;
				
				case "link":
					$this->globalAttributes['dropzone'] = "link";
				break;
			}
		}
	}//Fin de la función setDropzone
	
	public function setHidden ($hidden = false)
	{
		if ($hidden)
		{
			$this->globalAttributes['hidden'] = true;
		}elseif(!$hidden)
		{
			$this->globalAttributes['hidden'] = false;
		}
	}//Fin de la función setHidden
	
	public function setId($id = false)
	{		
		if (is_string($id)){
			$id=$this->eraseWhiteSpaces($id);
			if ($id!="")
				$this->globalAttributes['id'] = $this->purifier($id);
		}
	}//Fin de la función setId
	
	public function setLang ($lang = false)
	{
		if ($lang){
			foreach($this->lang as $key=>$data){
				
				if (strtolower($lang)==$key || strtolower($lang)==$data)
				{
					$this->globalAttributes['lang'] = $data;
				}
			}
		}
	}//Fin de la función setLang
	
	public function setSpellcheck( $spellcheck = false )
	{
		if ($spellcheck)
		{
			$this->globalAttributes['spellcheck'] =" true";
		}elseif(!spellcheck){
			$this->globalAttributes['spellcheck'] = "false";
		}
	}//Fin de la función setSpellcheck
	
	public function setStyle($style = false)
	{
		if (is_string($style))
		{
			$style=$this->eraseWhiteSpaces($style);
			if ($style!="")
				$this->globalAttributes['style'] = $this->purifier($style);
		}elseif(is_array($style)){
			foreach($style as $key=>$value){
				$this->globalAttributes['style'].="$key : $value; ";
			}
		}
	}//Fin de la función setStyle
	
	public function setTabindex($tabindex = false)
	{
		if ($tabindex)
		{
			if (is_numeric($tabindex))
			{
				$this->globalAttributes['tabindex'] = $tabindex;
			}
		}
	}//Fin de la función setTabindex
	
	public function setTitle($title = false)
	{
		if (is_string($title))
		{
			$title = trim($title);
			if($title!="")
			{
				$this->globalAttributes['title'] = $this->purifier($title);
			}
		}
	}//Fin de la función setTitle
	
/***********************************************************************************************************/

	public function addClass($class=false)
	{
		if ($class){
			if (!$this->globalAttributes['class']) $this->setClass($class);
			else
			{
				if (trim($class)!="")
				{
					$class = $this->purifier($class);
					$this->globalAttributes['class'][count($this->globalAttributes['class'])+1] = $class;
				}
			}
		}
	}//Fin de la función addClass

/***********************************************************************************************************/	

	public function changeClass($oldClass = false, $newClass = false)
	{
		if ($oldClass && $newClass)
		{
			if (is_numeric($oldClass)){
				
				if ($oldClass>count($this->globalAttributes['class'])) $this->addClass($newClass);
				else
					$this->globalAttributes['class'][$oldClass] = $newClass;
			}
			elseif(is_string($oldClass)){
				
				foreach($this->globalAttributes['class'] as $key=>$row)
				{
					if ($row == $oldClass)
					{
						$this->globalAttributes['class'][$key] = $newClass;
						$oldClass =  false;
					}
				}
				if($oldClass) $this->addClass($newClass);
			}
			
		}
		
	}//Fin de la función changeClass
	
/***********************************************************************************************************/	

	public function removeClass($class = false)
	{
		if ($class)
		{
			if(is_numeric($class)){
				unset($this->globalAttributes['class'][$class]);
			}elseif(is_string($class)){
				foreach($this->globalAttributes['class']  as $key=>$row)
				{
					if($row == $class)
					{
						unset($this->globalAttributes['class'][$key]);
					}
				}
			}
		}
		
	}//Fin de la función removeClass
	

/***********************************************************************************************************/	

	private function getAccesskey()
	{
		return $this->globalAttributes['accesskey'];
	}//Fin de la función getAccesskey
	
	private function getClass()
	{
		return $this->globalAttributes['class'];
	}//Fin de la función getClass
	
	private function getContenteditable(){
		return $this->globalAttributes['contenteditable'];
	}//Fin de la función getContenteditable
	
	private function getContextmenu(){
		return $this->globalAttributes['contextmenu'];
	}//Fin de la función getContextmenu
	
	private function getDir(){
		return $this->globalAttributes['dir'];
	}//Fin de la función getDir
	
	private function getDraggable(){
		return $this->globalAttributes['draggable'];
	}//Fin de la función getDraggable
	
	private function getDropzone(){
		return $this->globalAttributes['dropzone'];
	}//Fin de la función getDropzone
	
	private function getHidden(){
		return $this->globalAttributes['hidden'];
	}//Fin de la función getHidden
	
	private function getId()
	{
		return $this->globalAttributes['id'];
	}//Fin de la función getid
	
	private function getLang()
	{
		return $this->globalAttributes['lang'];
	}//Fin de la función getLang
	
	private function getSpellcheck()
	{	
		return $this->globalAttributes['spellcheck'];
	}//Fin de la función getSpellcheck
	
	private function getStyle()
	{
		return $this->globalAttributes['style'];
	}//Fin de la función getStyle

	private function getTabindex()
	{
		return $this->globalAttributes['tabindex'];
	}//Fin de la función getTabindex
	
	private function getTitle()
	{
		return $this->globalAttributes['title'];
	}//Fin de la función getTitle

/***********************************************************************************************************/	
	private function printAccesskey()
	{
		echo "accesskey=\"".$this->globalAttributes['accesskey']."\";";
	}//Fin de la función printAccesskey
	
	private function printClass()
	{
		$cadena="class=\"";
		
		foreach($this->globalAttributes['class'] as $row)
		{
			$cadena.="$row ";
		}
		
		$cadena.="\";";
		echo $cadena;
	}//Fin de la función printClass
	
	private function printContentEditable()
	{
		echo "contenteditable=\"".$this->globalAttributes['contenteditable']."\";";
	}//Fin de la función printContentEditable
	
	private function printContextMenu()
	{
		echo "contextmenu=\"".$this->globalAttributes['contextmenu']."\";";
	}//Fin de la función printContentMenu
	
	private function printDir()
	{
		echo "dir=\"".$this->globalAttributes['dir']."\";";
	}//Fin de la función printDir
	
	private function printDraggable()
	{
		echo "draggable=\"".$this->globalAttributes['draggable']."\";";
	}//Fin de la función printDraggable
	
	private function printDropzone()
	{
		echo "dropzone=\"".$this->globalAttributes['dropzone']."\";";
	}//Fin de la función printDropzone
	
	private function printHidden()
	{
		echo "hidden=\"hidden\"; ";
	}//Fin de la función printHidden
	
	private function printId()
	{

		echo "id=\"".$this->globalAttributes['id']."\";";	
	}//Fin de la función printId
	
	private function printLang()
	{
		echo "lang=\"".$this->globalAttributes['lang']."\";";
	}//Fin de la función printLang
	
	private function printSpellcheck()
	{
		echo "spellcheck=\"".$this->globalAttributes['spellcheck']."\";";
	}//Fin de la función printSpellcheck
	
	private function printStyle()
	{
		echo "style=\"".$this->globalAttributes['style']."\";";
	}//Fin de la función printStyle
	
	private function printTabindex()
	{
		echo "tabindex=\"".$this->globalAttributes['tabindex']."\";";
	}//Fin de la función printTabindex
	
	private function printTitle()
	{
		echo "title=\"".$this->globalAttributes['title']."\";";
	}//Fin de la función printTitle
	
/***********************************************************************************************************/	
	public function printGlobalAttributes()
	{
		($this->globalAttributes['accesskey'])?$this->printAccesskey():"";
		(count($this->globalAttributes['class']))?$this->printClass():"";
		($this->globalAttributes['contenteditable'])?$this->printContenteditable():"";
		($this->globalAttributes['contextmenu'])?$this->printContextmenu():"";
		($this->globalAttributes['dir'])?$this->printDir():"";
		($this->globalAttributes['draggable'])?$this->printDraggable():"";
		($this->globalAttributes['dropzone'])?$this->printDropzone():"";
		($this->globalAttributes['hidden'])?$this->printHidden():"";
		($this->globalAttributes['id'])?$this->printId():"";
		($this->globalAttributes['lang'])?$this->printLang():"";
		($this->globalAttributes['spellcheck'])?$this->printSpellcheck():"";
		($this->globalAttributes['style'])?$this->printStyle():"";
		($this->globalAttributes['tabindex'])?$this->printTabindex():"";
		($this->globalAttributes['title'])?$this->printTitle():"";
	}//Fin de la función printGlobalAttributes
}//fin de la clase globalAttributes
