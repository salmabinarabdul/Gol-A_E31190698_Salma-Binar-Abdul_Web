<?php 

class itemProduk {
protected $ukuran;
protected $warna;
protected $nama;

}

class Topi extends itemProduk {
	private $model = "";

	public function getTopi(){
		$this->nama = "Adidas";
		$this->ukuran = "L";
		$this->warna = "Hitam";
		return "Nama topi: $this->nama<br>Ukuran: $this->ukuran<br>Model:$this->model<br>Warna:$this->warna<br>";
	}
 }

class Celana extends itemProduk {
 private $model = "Jeans";
 private $tipe = "";

 public function getCelana(){
	$this->nama = "Levis";
	$this->ukuran = "L";
	$this->warna = "Hitam";
	return "Nama celana: $this->nama<br>Ukuran: $this->ukuran<br>Model:$this->model<br>Warna:$this->warna<br>";
 }
}

class Baju extends itemProduk {
	private $tipe = "Kemeja";

	public function getBaju(){
	$this->nama = "Batik";
	$this->ukuran = "L";
	$this->warna = "Coklat";
	return "Nama baju: $this->nama<br>Ukuran: $this->ukuran<br>Tipe:$this->tipe<br>Warna:$this->warna<br>";
 }
}
$topi = new Topi();
echo $topi->getTopi();
echo "------------------<br>";
$celana = new Celana();
echo $celana->getCelana();
echo "------------------<br>";
$baju = new Baju();
echo $baju->getBaju();
?>

