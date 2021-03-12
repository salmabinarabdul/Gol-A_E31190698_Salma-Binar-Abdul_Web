<?php 

class MobilLengkap {

	public function nontonTv()
	{
		return "Tv dihidupkan. Mencari channel<br>Tv menampilkan gambar.";
	}
}

class MobilBMW extends MobilLengkap{
 
 public function hidupkanMobil()
 { 
 	$pesan = "Menyalakan mobil<br>";
 	return $pesan . $this->nontonTv();
 }
 public function matikanMobil()
 {
 	return "Mematikan mobil";
 }
 public function ubahGigi()
 {
 	return "Mengubah gigi";
 }

}

 $bmw = new MobilBmw();
 echo $bmw->hidupkanMobil();

 ?>

