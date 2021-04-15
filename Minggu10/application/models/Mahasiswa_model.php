<?php

class Mahasiswa_model extends CI_Model {
	public function get_data()
	{
		$data_mahasiswa = [
		["nama" => "Kim Jefry","prodi" => "MIF"],
		["nama" => "Ahmad Kurniawan","prodi" => "TKK"],
		["nama" => "Budi Sudarsono","prodi" => "TIF"]
	];
	return $data_mahasiswa;
}

public function getAll()
{
	$this -> db -> select('*');// fungsi untuk mengambil data dari database
	$this -> db -> from('tm_user');//untuk mengambil data dari tabel user
	$this -> db -> join('tm_grup', 'tm_user.grup = tm_grup.id_grup');// untuk melakukan join tabel tm_user dengan tm_grup
	$query = $this -> db -> get();//berfungsi sebagai eksekusi query sama seperti mysqli_query
	return $query;//untuk  mengembalikan nilai di $query
}
public function input_data($data, $table)
{
	$this -> db -> insert($table, $data);// untuk menambahkan data pada database

}
}
?>