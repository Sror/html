<?php

class tbody extends ExtensionBridge{
	
	public function tbody($config = false){
		parent::addExt(new secciones($config));
		parent::addExt(new container());
		
	}

	public function setElement($value)
	{
		if (is_object($value))
			(get_class($value)=="tr")?$this->setPush($value):"";
	}//fin de la function setPush
	
	public function printer(){
		echo "<tbody";
		parent::printSecciones();
		echo ">";
			if($this->size()>0)
				foreach($this->container as $row)
					$row->printer();

		echo "</tbody>";
	}
}

?>