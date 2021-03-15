<?php 
//Declare class
class Hewan {
 
//properties
	public $Nama;
	public $Spesies;
	public $Jenis_makanan;
	public $Habitat;
	public $Berat_badan;

	public function suarahewan(){
		if($this->Nama === "kucing"){
			return "Nama hewan: $this->Nama<br>suara : meong";
		}else if($this->Nama === "anjing"){
			return "Nama hewan: $this->Nama<br>suara : guk";
		}else{
			return "Nama hewan: $this->Nama<br>Hewan harus kucing dan anjing";
		}
	}
	public function spesies(){
		if($this->Spesies === "mamalia"){
			return "Nama hewan: $this->Nama<br>hewan menyusui";
		}else if($this->Spesies === "burung"){
			return "Nama hewan: $this->Nama<br>hewan bertelur";
		}else{
			return "Nama hewan: $this->Nama<br>hewan tersebut tidak termasuk mamalia dan burung";
		}
	}
	public function Datahewan(){
		return "Nama hewan:$this->Nama<br>Spesies:$this->Spesies<br>Jenis makanan:$this->Jenis_makanan<br>Habitat:$this->Habitat<br>Berat badan:$this->Berat_badan";
	}
 }

 $hewan = new Hewan();
 $hewan ->Nama = "anjing";
 $hewan ->Spesies = "mamalia";
 $hewan ->Jenis_makanan = "Daging";
 $hewan ->Habitat = "Daratan";
 $hewan ->Berat_badan = "3,6kg";

//echo $hewan->suarahewan();
//echo $hewan->Spesies();
echo $hewan->Datahewan();
?>
