<?php

class thead extends ExtensionBridge{
	
	public function thead($config = false){
		parent::addExt(new secciones($config));
		parent::addExt(new container());
		
	}

	public function setElement($value)
	{
		if (is_object($value))
			(get_class($value)=="tr")?$this->setPush($value):"";
	}//fin de la function setPush
	
	public function printer(){
		echo "<thead";
		parent::printSecciones();
		echo ">";
			if($this->size()>0)
				foreach($this->container as $row)
					$row->printer();

		echo "</thead>";
	}
}

?>