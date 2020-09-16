<?php
class employer
{
	public $turnover = "2.8 Million US-Dollar";
	protected $profit = "750.000 Dollar";
	protected $wage ="4.999 Dollar";
	private $distribution = "187.000 Dollar";
	
	public function showsDataForEmployer ()
	{
		return array($this->turnover,$this->profit,$this->wage,$this->distribution);
	}
}

class employee extends employer
{
	public function showsDataForEmployee ()
	{
		return array($this->turnover,$this->profit,$this->wage);
	}
}

class customer extends employee
{
	public function showsDataForCustomer ()
	{
		return $this->turnover;
	}
}
$sascha = new employer();
$maxi = new employee();
$peter = new customer();
$array = $sascha->showsDataForEmployer();
    echo $array[0];
    echo "<br>";
    echo $array[1];
    echo "<br>";
    echo $array[2];
	echo "<br>";
	echo $array[3];
	echo "<br><br>";
$array = $maxi->showsDataForEmployee();
    echo $array[0];
	echo "<br>";
	echo $array[1];
	echo "<br>";
	echo $array[2];
	echo "<br><br>";
echo $peter->showsDataForCustomer();
?>