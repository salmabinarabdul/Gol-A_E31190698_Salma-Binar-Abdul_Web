<?php 
//Declare class 
class Laptop {
//properties
	public $pemilik;
	public $merk;

	public function hidupkan_laptop(){
		return "Hidupkan laptop $this->merk punya $this->pemilik <br>";
	}
	public function matikan_laptop(){
		return "Matikan laptop $this->merk punya $this->pemilik <br>";
	}
	public function restart_laptop(){
		return "Matikan laptop $this->merk punya $this->pemilik.Hidupkan laptop $this->merk punya $this->pemilik <br>";
	}
 }
 $laptopASUS = new Laptop();
 $laptopASUS->pemilik = "milik A";
 $laptopASUS->merk = "ASUS";

 $laptopAcer = new Laptop();
 $laptopAcer->pemilik = "milik B";
 $laptopAcer->merk = "Acer";

 $laptopLenovo = new Laptop();
 $laptopLenovo->pemilik = "milik C";
 $laptopLenovo->merk = "Lenovo";
 
 echo $laptopASUS->hidupkan_laptop();
 echo $laptopAcer->matikan_laptop();
 echo $laptopLenovo->restart_laptop();
 ?>