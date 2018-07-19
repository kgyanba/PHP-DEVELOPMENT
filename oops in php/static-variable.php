<?php 
class abc
{
	public $y=1;
	
	public function test()
	{
	 
		static $x=1; // whenever the variable is called it will display the last value of the variable.
		$x++;
		echo $x;
		
	}
}
abc::test();
echo '<br>';
abc::test();
echo '<br>';
abc::test();
echo '<br>';
///$obj = new abc();

?>