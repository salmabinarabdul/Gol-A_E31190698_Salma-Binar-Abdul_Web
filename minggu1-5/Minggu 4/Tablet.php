<?php  

class Tablet {
public $merk;
public $warna;
public $memori;

//protected berarti method/property tersebut hanya bisa diakses oleh class turunannya dan tidak bisa diakses dari luar class
protected function getMerk()
{

return $this->merk;
}

}

class Handphone extends Tablet {

	//private berarti method atau property tersebut hanya bisa diakses dari dalam class
	private function getMerkdanMemori(){
		return "$this->merk $this->memory";
	}
	public function beliHandphone(){
		return "Beli handphone". $this->getMerkdanMemori();
	}
	public function cekMemori()
	{
		return "$this->punya memori sebesar $this->memori GB";
	}
	public function tampilkansemuaSpek()
	{
		return "Merk: $this->merk<br>
		Warna: $this->warna<br>
		Memori: $this->memori GB<br>";
	}

}

$hp = new Handphone();
$hp->merk = "Realme";
$hp->warna = "biru";
$hp->memori = "8";

echo $hp->tampilkansemuaSpek();

?>
