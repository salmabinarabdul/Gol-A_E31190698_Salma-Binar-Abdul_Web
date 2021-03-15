<?php 
//The parent class
class Car {
//The $model property is now protected, so it can be accessed
//from within the class and its child classes
	protected $model;
	//public setter method
	public function setModel($model)
	{
		$this -> model = $model;
	}
}
//The child class
class SportsCar extends Car {
//Has no problem to get a protected property that belongs to the parent
	public function hello()
	{
		return "beep! I am a <i>" . $this -> model . "</i><br />";
	}
}
//create an instance from the child class
$sportsCar1 = new SportsCar();
$sportsCar1 -> setModel("Mercedes Benz");
echo $sportsCar1 -> hello();
?>