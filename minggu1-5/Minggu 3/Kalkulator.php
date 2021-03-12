<?php 
class Kalkulator {
//properties
	private $Angka1;
	private $Angka2;
	private $Angka3;

	public function tambah($angka1, $angka2, $angka3)
	{
		$this->Angka1 = $angka1;
		$this->Angka2 = $angka2;
		$this->Angka3 = $angka3;
		return $this->Angka1 + $this->Angka2 + $this->Angka3;
	}
	public function kurang($angka1, $angka2, $angka3)
	{
		$this->Angka1 = $angka1;
		$this->Angka2 = $angka2;
		$this->Angka3 = $angka3;
		return $this->Angka1 - $this->Angka2 - $this->Angka3;

	}
	public function kali($angka1, $angka2, $angka3)
	{
		$this->Angka1 = $angka1;
		$this->Angka2 = $angka2;
		$this->Angka3 = $angka3;
		return $this->Angka1 * $this->Angka2 * $this->Angka3;

	}
    public function bagi($angka1, $angka2, $angka3)
    {
    	$this->Angka1 = $angka1;
		$this->Angka2 = $angka2;
		$this->Angka3 = $angka3;
		return $this->Angka1 / $this->Angka2 / $this->Angka3;

	}

 }

 $kalkulator = new Kalkulator();

 echo $kalkulator->kurang(10, 5, 4);

 ?>