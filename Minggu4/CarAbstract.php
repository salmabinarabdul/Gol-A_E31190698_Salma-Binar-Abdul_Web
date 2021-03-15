<?php
abstract class Car {
//Abstract classes can have properties
	protected $tankVolume;
	//Abstract classes can have non abstract methods
	public function setTankVolume($volume)
	{
		$this -> tankVolume = $volume;
	}

//abstract method
	abstract public function  calcNuMilesonfullTank();
}
?>