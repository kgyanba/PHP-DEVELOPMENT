<?php 
// multiple inheritance can not used in php.
// to resolve the problem of multiple inheritance we used traits. 
//we can create multiple trait

trait hello
{
	public function display()
	{
		echo "welcome";
	}
}
trait welcome
{
	public function say()
	{
		echo "how are you";
	}
	public static function dis()// this is a static method.
	{
		echo "static method";
	}
}
class abc
{
	use hello,welcome;// to used trait in class we use with the help of use keyword.
public function show()
{
	echo "hello";
}	
}
$obj = new abc();
$obj->display();
echo '<br>';
$obj->say();
 echo '<br>';
 echo abc::dis();// we can called static method by using class name and method name.


?>