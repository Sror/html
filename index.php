<html><body><h1>PRUEBAS!</h1>

<p>Página que se utiliza para realizar pruebas: </p>

<p>Si funciona pero no para de fallar.</p>

<?php 

echo error_reporting(E_ALL ^ E_NOTICE);

ini_set('display_errors', '1');

echo "<br>PHP si funciona<br>";

require "config.php";


require "./miscelaneous/container.php";
require "./miscelaneous/extensionBridge.php";
require "./miscelaneous/cleaner.php";


require "./basic/globalAttributes.php";
require "./basic/windowEventAttributes.php";
require "./basic/keyboardEvents.php";
require "./basic/formEvents.php";
require "./basic/mouseEvents.php";
require "./basic/mediaEvents.php";


require "./tabla/align.php";
require "./tabla/bgcolor.php";
require "./tabla/tr.php";
require "./tabla/celdas.php";
require "./tabla/secciones.php";
require "./tabla/table.php";
require "./tabla/tbody.php";
require "./tabla/td.php";
require "./tabla/tfoot.php";
require "./tabla/th.php";
require "./tabla/thead.php";
require "./tabla/width.php";

require "./tags/option.php";
require "./tags/div.php";

function printer($array){
	$value = reset($array);
	while ($value){
		echo "- $value  ";
		$value = next($array);
	}
	echo "<br>";
}
class prueba{
	public function printer(){
		echo "Pintada";
	}
}
echo "<===== Creando la clase DIV ======><br>";
$prueba = new prueba();


$td1 = new td("2");
$td2 = new td("4");

$tr = new tr();

$tr->setPush($td1);
$tr->setPush($td2);

$table = new table($tabla_config);

$tbody = new tbody();
$tbody->setElement($tr);

$table->setPush($tbody);

$div = new div();

$div->push($table);

$div->printer();


echo "<br><==================================><br>";
?>
</body></html>
