<?php
class div extends stack{
	
	private $div = array();
	
	/**
	 * Constructor de la clase
	 */
	public function div($elements = false)
	{
		
	}//Fin del constructor
	
	/**
	 * Inserta un elemento al principio del array DIV
	 * 
	 * El DIV es un contenedor que puede tener instancias de clases que tengan el método printer.
	 * @param class $element	Instancia de clase que será la primera en dibujar
	 */
	public function task($element = false){
		if (get_class($element)){
			if(method_exists($element, 'printer')){
				$this->div = $this->taskElement($this->div,$element);
			}
		}
	}//Fin de la función task
	
	/**
	 * Insertar un elemento al final del array DIV
	 * 
	 * @param unknown_type $element
	 */
	public function push($element = false){
		if (get_class($element)){
			if(method_exists($element, 'printer')){
				$this->div = $this->pushElement($this->div,$element);
			}
		}		
	}//Fin de la función push
	
	/**
	 * Extrae el ultimo elemento del array DIV
	 * 
	 * @param unknown_type $element
	 */
	public function pop(){
		$aux = $this->lastElement($this->div);
		$this->popElement($this->div);
		return $aux;
	}//Fin de la función pop
	
	/**
	 * Extrae el primer elemento del array DIV
	 * @param unknown_type $element
	 */
	public function pull(){
		$aux = $this->firstElement($this->div);
		$this->pullElement($this->div);
		return $aux;
	}//Fin de la función pull
	
	/**
	 * Reemplaza un class por un elemento las veces que se indique en $times
	 * 
	 * @param unknown_type $class
	 * @param unknown_type $newClass
	 * @param unknown_type $times
	 */
	public function remplace($class = false, $element = false, $times = 0){
		if (get_class($element)){
			if(method_exists($element, 'printer')){
				//Si el elemento es un objeto que implementa la clase printer, entonces ...
			}
		}
	}//Fin de la función remplace
	
	/**
	 * Reemplaza el elemento de la posicion de $index por el pasado por parametro.
	 * 
	 * @param unknown_type $element
	 * @param unknown_type $index
	 */
	public function remplaceIndex($element = false, $index = 0){
		if (get_class($element)){
			if(method_exists($element, 'printer')){
				//Si el elemento es un objeto que implementa la clase printer, entonces ...
			}
		}
	}//Fin de la función remplaceIndex
	
	/**
	 * Borra un elemento el número de veces indicado por $time
	 */
	public function erase($element = false){
		if (get_class($element)){
			if(method_exists($element, 'printer')){
				//Si el elemento es un objeto que implementa la clase printer, entonces ...
			}
		}	
	}
	
	/**
	 * Dibuja el div
	 */
	public function printer(){
		foreach($this->div as $class)
			$class->printer();
	}//Fin de la función printer
}