<?php
//The parent class
class Car {
// The $model property is private, thus it can be accessed
//only from inside the class
	private $model;
	//public setter method
	public function setModel ($model)
	{
		$this -> model = $model;
	}
}

//The child class
class SportsCar extends Car {
//Tries to get a private property that belongs to the parent
	public function hello ()
	{
		return "beep! I am a <i>" . $this -> model . "</i><br />";
	}
}

//create an instance from the child class
$sportsCar1 = new SportsCar();
//set the class model name
$sportsCar1 -> setModel ("Mercedes Benz");
echo $sportsCar1 -> hello();
?>