<?php 

interface hitungLuas{
public function hitungLuas();

}

class Persegi implements hitungLuas {

	public $sisi;
	public function __construct($sisi){
		$this->sisi = $sisi;
	}
	public function hitungLuas()
	{
		return $this->sisi * $this->sisi;
	}

}
class Segitiga implements hitungLuas  {

	private $alas;
	private $tinggi;

	public function __construct($alas, $tinggi)
	{
		$this->alas = $alas;
		$this->tinggi = $tinggi;

	}
	public function hitungLuas()
	{
		return 0.5 * $this->alas * $this->tinggi;
	}
}
class Lingkaran implements hitungLuas{

	public $jari;

	public function __construct($jari){
		$this->jari = $jari;

	}
	public function hitungLuas()
	{
		return 3.14 * $this->jari * $this->jari;
	}

}
echo "Luas Persegi: ";
$persegi = new Persegi(20);
echo $persegi->hitungLuas();
echo "<br>";

echo "Luas Segitiga: ";
$segitiga = new Segitiga(20, 5);
echo $segitiga->hitungLuas();
echo "<br>";

echo "Luas Lingkaran: ";
$lingkaran = new Lingkaran(20);
echo $lingkaran->hitungLuas();
echo "<br>";

 ?>




