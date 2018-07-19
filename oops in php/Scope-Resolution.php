<?php 
//scope resolution operator
class abc
{
	const name = 'gk';
	public static $var ="kg";
	public $val = 20;
	
	public function __Construct() // this is a magic constructor.
	{
		 echo self::$var = "value changed";
	}
		
}
//echo abc::$var; // static and constant variable can be accesed only by using scope resolution operator.
echo '<br>';
echo abc::name;
$obj = new abc();

?>