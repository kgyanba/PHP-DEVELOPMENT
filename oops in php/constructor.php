<?php 
class abc
{
	public $a;
	public $b;
	public $c;
	public function abc($am,$an)
	{
		$this->a = $am;
		$this->b = $an;	
		//print_r($this);// it print the value of both object
	}
}
$obj = new abc(10,20);
$obj1 = new abc(20,30);
//print_r($obj);// it print the value of currently developed object 
var_dump($obj);
echo '<br>';
var_dump($obj1);

?>