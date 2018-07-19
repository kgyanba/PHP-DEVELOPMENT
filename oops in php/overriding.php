<?php 
// overriding means if the method of class are same as well as parameter that means method overriding.

class abc
{
	public function text() // this is the method of parent class
	{
		echo "hello friend";
	}	
}
class xyz extends abc
{
	public function text() // this is the method of parent class which is override by child class
	{
			parent::text();
		echo " good morning";
	}
}
$parent = new abc();
$parent->text();// here this object called the methid of parent class 
echo '<br>';
$child = new xyz();
$child->text();// it called the method of child class

?>