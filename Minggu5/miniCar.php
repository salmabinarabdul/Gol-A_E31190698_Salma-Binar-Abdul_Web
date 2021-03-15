<?php

interface Car {
	public function setModel($name);
	public function getModel();
}

class miniCar implements Car {
	private $model;
	public function setModel($name)
	{
		$this -> model = $name;
	}
	public function getModel()
	{
		return $this -> model;
	}
}

$carSedan = new miniCar();
$carHatchback = new miniCar();
$carMpv = new miniCar();

$carSedan->setModel("sedan");
echo $carSedan->getModel();
echo "<br>";

$carHatchback->setModel("hatcback");
echo $carHatchback->getModel();
echo "<br>";

$carMpv->setModel("multi-purpose vehicle");
echo $carMpv->getModel();
echo "<br>";
?>