<?php

class tfoot extends secciones{
	
	public function tfoot($config = false){
		parent::tfoot($config);
	}

	public function setPush($value)
	{
		if (is_object($value))
			(get_class($value)=="tr")?parent::setPush($value):"";
	}//fin de la function setPush
	
	public function printer(){
		echo "<tfoot";
		parent::printSecciones();
		echo ">";
		
		if($this->size()>0)
			foreach($this->container as $row)
				$row->printer();

		echo "</tfoot>";
	}
}

?>