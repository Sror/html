<?php

class tr extends ExtensionBridge
{

	public function tr($config = false){
		parent::addExt(new bgColor($config));
		parent::addExt(new secciones($config));
		parent::addExt(new container());		
	}//Fin del constructor
	
	public function setPush($value)
	{
		if (is_object($value))
			(get_class($value)=="td" || get_class($value)=="th")?parent::setPush($value):"";
	}//fin de la function setPush

	public function printer(){
		echo "<tr";
			$this->printSecciones();
			$this->printBgcolor();
		echo ">";
		
		if($this->size()>0)
			foreach($this->container as $row)
				$row->printer();
				
		echo "</tr>";
	}//Fin de la función printer
}//Fin de la clase tr

?>