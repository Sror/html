<?php

/**
* Clase que maneja arrays
*
*/
class stack 
{
	private $auxiliar = array();
	
	/**
	* Constructor de la clase
	*
	* Constructor de la clase que puede recibir un grupo de elementos, en forma de array
	* o de una cadena de caractares separados por espacios en blanco que serán devueltos en forma de array.
	*
	* @param	string|array	$element	Grupo de elementos que se añadirán a la clase
	* @return	array		$auxiliar		Array que se devuelve.
	*/
	public function stack($element=false)
	{
		$this->setElement($element);
	}//Fin del constructor
	
	/**
	 * Devuelve el primer elemento del array
	 * 
	 * @param array $array
	 */
	protected function firstElement($array = false){
		return current($array);
	}//Fin de la función firstElement
	
	/**
	 * Devuelve el ultimo elemento del array
	 * 
	 * @param array $array
	 * 
	 * @return mixed
	 */
	protected function lastElement($array = false){
		return end($array);
	}//Fin de la función lastElement
	
	protected function setElement( $element = false)
	{
		$auxiliar = array();
		if (is_array($element)){
			foreach ($element as $e){
				if(trim($e)!=""){
					$auxiliar[count($auxiliar)] = $e;
				}
			}
		}elseif(is_string($element)){
			$auxiliar= explode(" ", $element);
		}
		return $auxiliar;
	
	}//Fin de la función setElement
	
	/**
	* Añade un elemento nuevo al array
	*
	* Añade un elemento pasado como parámetro, al otro parámetro, que debe ser un array.
	*
	* @param	array	$stack		array al que se le va a añadir el nuevo elemento
	* @param	string	$element	elemento que se va a añadir, debe ser un string
	* @return	array	$stack		array que se va a devolver una vez que se ha añadido el elemento
	*/
	protected function addElement($stack = false, $element = false)
	{
		if (is_string($element))
			$stack[count($stack)] = trim($element);
		
		return $stack;
	}//Fin de la función addElement
	
	/**
	 * Inserta un elemento al final del array
	 * 
	 * @param	array	$array		Un array en el que se va a introducir el elemento nuevo
	 * @param	kown	$element	Elemento que se insertará al final del array
	 * 
	 * @return	array	$array		El array con el nuevo elemento insertado al final del mismo.
	 */
	protected function pushElement($array = false, $element = false){
		array_push($array, $element);

		return $array;
	}//Fin de la función pushElement
	
	/**
	 * 
	 * @param unknown_type $array
	 * @param unknown_type $element
	 */
	protected function taskElement($array = false, $element){
		$array = $this->insertElement($array,$element);
		
		return $array;
	}//Fin de la función taskElement
	
	/**
	 * Inserta un elemento en un array en una posición dada.
	 * 
	 * Debemos tener en cuenta que el array comienza en la posción 0.
	 * 
	 * @param array $array		array donde se van a introducir el elemento
	 * @param known $element	elemento que se quiere introducir
	 * @param int	$index		Lugar en el array donde se quiere cololcar el elemento, teniendo en cuenta que la primera posición es 0
	 */
	protected function insertElement($array = false, $element = false, $index = 0){
		
		current($array);
		$i=0;
		
		for ($i=0; $i<$index; $i++){
			$this->auxiliar[$i] = $array[$i];
		}
		
		$this->auxiliar[$i] = $element;

		
		for ($i;$i<count($array);$i++){
			$this->auxiliar[$i+1]=$array[$i];
			
		}

		$array = $this->auxiliar;
		
		return $array;
		
	}//Fin de la función insertElement
	/**
	* Elimina un elemento de un array
	*
	* Elimina un elemento del array que se pasa por parámetro, cuyo literal sea igual al otro parámetro pasado.
	*
	* @param	array	$stack		array al que se le va a borrar un elemento
	* @param	string	$element	elemento que se va a buscar en el array para borrar
	* @return	array	$stack		array que se va a devolver, se haya borrado el elemento o no
	*/
	protected function removeElement($stack = false, $element = false)
	{
		if (is_numeric($element))
		{
			if ($element <= count($stack)) unset($strack[$element]);
		}elseif(is_string($element))
		{
			if (strtoupper($element) == "ALL") $stack = array();
			else{
				foreach ($stack as $key=>$row)
				{
					if ($row == $element) unset($stack[$key]);
				}
			}
		}
		return $stack;
	}//Fin de la función removeElement
	
	/**
	* Intercambia un elemento de un array por otro
	*
	* Busca dentro del array un literal y lo cambia por otro elemento que se le pasa por parámetro.
	*
	* @param	array	$stack			array donde intentaremos realizar el intercambio de un elemento por otro
	* @param	string	$oldElement		elemento a buscar dentro del array para eliminar
	* @param	string	$newElement		elemento que se intercambiar por el anterior dentro del array
	* @return	array	$stack			array que se devuelve, que puede ser igual al que se le ha pasado
	*/
	protected function changeElement($stack = false, $oldElement=false, $newElement=false)
	{
		foreach ($stack as $key=>$row)
		{
			if ($row == $oldElement) $stack[$key]=$newElement;
		}
	
		return $stack;
	}//Fin de la función changeElement
	
	/**
	 * Extrae el último elemento del array
	 */
	protected function popElement($array = false){
		return array_pop($array);	
	}
	
	/**
	 * Extrae el primer elemento del array
	 */
	protected function pullElement($array = false){

		 $element = array_slice($array, 0,1);
		unset($array[0]);
		
		foreach($array as $row)
			$this->auxiliar[]=$row;
		$array = $this->auxiliar;
		
		return element;
	}
	/**
	* Pinta los elemento de un array
	*
	* Recorre los elemento de un array y los saca por pantalla. Los asigna a literal.
	*
	* @param	string	$stack			array cuyos elementos se van a sacar por pantalla
	* @param	string	$literal		atributo al cual se van a asignar los elementos del array
	*/
	protected function printerStack($stack = false, $literal = false)
	{
		$cadena="$literal=\"";
		
		foreach($stack as $row)
		{
			$cadena.="$row;";
		}
		$cadena.="\"";
		echo $cadena;
	}//Fin de la función printerStack
}//Fin de la clase stack