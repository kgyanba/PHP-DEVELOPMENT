<?php 
class person
{
	private $name;
	private $address;
	public function setName($name)
	{
		$this->name=$name;
	}
	
}
$obj = new person();
$obj->setName('sanju');
print_r($obj);

?>