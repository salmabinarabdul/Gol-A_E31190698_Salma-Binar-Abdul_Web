<?php
//The parent class
class Car {

//private property inside the class
	private $model;
	//public setter method
	public function setModel ($model)
	{
		$this -> model = $model;
	}
	public function hello()
	{
		return "beep! I am a <i>". $this -> model . "</i><br>";
	}
}

//The child class inherita the code from the parent class
class SportsCar extends Car {
//No code in the child class
}

//Create an instance from the child class
$sportsCar1 = new SportsCar();
//Set the value of the class property
//for this aim, we use a method that we created in the parent
$sportsCar1 -> setModel("Mercedes Benz");
//use another method that the child class inherited from the parent class
echo $sportsCar1 -> hello( );
?>