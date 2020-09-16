<?php
class employer
{
	public $turnover = "2.8 Million US-Dollar";
	protected $profit = "750.000 Dollar";
	protected $wage ="4.999 Dollar";
	private $distribution = "187.000 Dollar";
	
	public function showsDataForEmployer ()
	{
		return $this->turnover."<br>".$this->profit."<br>".$this->wage."<br>".$this->distribution."<br>";		
	}
	
}

class employee extends employer
{

	public function showsDataForEmployee ()
	{
		return $this->turnover."<br>".$this->profit."<br>".$this->wage."<br>";
	}
}

class customer extends employee
{
	public function showsDataForCustomer ()
	{
		return $this->turnover."<br>";
	}
}
$sascha = new employer();
$maxi = new employee();
$peter = new customer();
echo $sascha->showsDataForEmployer();
echo "<br><br>";
echo $maxi->showsDataForEmployee();
echo "<br><br>";
echo $peter->showsDataForCustomer();
echo "<br><br>";
?>