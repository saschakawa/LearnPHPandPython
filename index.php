<?php
class infos
{
	public $daten = "PS, Lautstärke ....";
	protected $rabatte = "Skonto, Mitarbeiterrabatt";
	private $einkaufspreis = "Bezugspreis";
	
	function prokurist ()
	{
		echo $this->daten;
		echo "<br>";
		echo $this->rabatte;
		echo "<br>";
		echo $this->einkaufspreis;
		echo "<br>";
	}
	
}

$kunde = new infos();
echo $kunde->daten; // Works
echo "<br>";
echo $kunde->rabatte; // Shows Error
echo "<br>";
echo $kunde->einkaufspreis; // Shows Error

$martin = new infos();
$martin->prokurist(); // Shows Daten, Rabatte, Einkaufspreis

class infos2 extends infos
{
	public $daten="PS,Lautstärke, Bremsen";
	protected $rabatte ="Skonto, Mitarbeiterrabatt";
	
	function mitarbeiter ()
	{
		echo $this->daten;
		echo "<br>";
		echo $this->rabatte;
		echo "<br>";
		echo $this->Bezugspreis;
	}
}
echo "<br>";
$praktikant = new infos2();
$peter = new infos2();
echo $praktikant->daten; // Works
echo "<br>";
echo $praktikant->rabatte; // Error
echo "<br>";
echo $praktikant->einkaufspreis; // Undefined
$peter->mitarbeiter(); // Shows Daten, Rabatte and Undefined
?>

