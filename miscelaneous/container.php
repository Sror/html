<?php
class container{

	public $container = array();
	
	public function container($value = false){

		if (is_array($value)){
			foreach($value as $key=>$valor)
				$this->push($valor);
		}
	}//fin del constructor
	
	public function setPush($value)
	{
		array_push($this->container, $value);
	}//fin de la function setPush
	
	public function setPop()
	{
		return array_pop($this->container);
	}//fin de la function setPop
	
	public function setShift(){
		return array_shift($this->container);
	}
	
	public function setFit(){
		array_unshift($this->container,$value);
	}
	public function setLast(){
		$value = reset($this->container);

		for ($i=0;$i<$this->size();$i++)
			$this->container[$i] = $this->container[$i+1];
		unset($this->container[$i+1]);
		return $value;
	}//Fin de la función setLast
	
	public function eraseElement($element)
	{
		$aux = new container();
		$response = false;
		
		//Rellenamos el auxiliar con los elemenos de nuestro contanier
		while ($this->size()!=0)
		{
			$aux->setPush($this->setPop());
		}
		//Volvemos a meterlos en nuestro container eliminando el valor buscado
		while ($aux->size()!=0)
		{
			$value = $aux->setPop();
			($value!=$element)?$this->setPush($value):$response=true;
		}
		return $response;
	}//fin de la function eraseElement
	
	public function size()
	{
		return count($this->container);
	}//fin de la function size
}


?>