<?php
//The parent class has hello method that returns "beep"
class Car {
	final public function hello()
	{
		return "beep";
	}
}

//The child class has hello method that tries to override the hello method in the parent
class SportsCar extends Car {
	public function hello()
	{
		return "Hallo";
	}
}
//create a new object
$sportsCarl = new SportsCar();

//get the result of the hello method
echo $sportsCarl -> hello();
?>