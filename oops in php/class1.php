<?php 
class Bank
{
	public $Accountno;
	public $AccountBalance;
	public $AccountName;
	
	public function deposit($bal)
	{
		if($bal<5000)
		{
			echo "amonnt is less than five thousands";
		}
		else
		{
			$this->AccountBalance=$bal;
		}
	}
	public function Bank($acc,$name)//this is a constructor which is initialized during the object creation
	//constructor name should be same as class name
	{
		//echo "withdraw";
		$this->Accountno=$acc;
		$this->AccountBalance=0;
		$this->AccountName=$name;
	}
}
	$obj = new Bank(1234,12334,'suresh');// new keyword is used for object creation, once a object is created then memory is allocated to class
	//echo $obj->deposit();
	//echo 
	//print_r($obj);
	echo $obj->AccountNo=12;
	//echo $obj->AccountName;
	echo $obj->deposit(3000);

?>