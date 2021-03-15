<?php 
//Declare class 
class Kendaraan {
//properties
	public $jenis_Kendaraan;
	public $jumlah_roda;
	public $merk;
	public $bahan_bakar;
	public $harga;
	public $tahun_pembuatan;

	public function subsidiBBM()
	{
		if($this->bahan_bakar === "Premium" && $this->tahun_pembuatan <2005){
			return "Ya";
		}else {
			return "Tidak";
		}
	}

	public function hargaSecond() 
	{
		$hargalama = $this->harga;
		$diskon = 0;
	
		if ($this->tahun_pembuatan > 2010){
			$diskon = 20;	
		}else if ($this->tahun_pembuatan >= 2005 && $this->tahun_pembuatan <= 2010){
			$diskon = 30;
		}else if ($this->tahun_pembuatan <2005){
			$diskon = 40;
		}
		$hargabaru = $hargalama - ($diskon / 100 * $hargalama);
		return $hargabaru;
	}

 }

 $yamahaMio = new Kendaraan();
 $yamahaMio->merk = "Yamaha";
 $yamahaMio->jenis_Kendaraan = "Mio";
 $yamahaMio->jumlah_roda = 2;
 $yamahaMio->bahan_bakar = "Premium";
 $yamahaMio->harga = 15000000;
 $yamahaMio->tahun_pembuatan = 2004;

 echo $yamahaMio->subsidiBBM() . "<br>" .$yamahaMio->hargaSecond();

 ?> 

