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
	return $this->db->affected_rows();

}

public function update_data($where,$data, $table)
{
	$this -> db -> where($where);// untuk menambahkan data pada database
	$this->db->update($table, $data);
	return $this->db->affected_rows();
}

public function getRow($where, $table){
	return $this-> db -> get_where($table,$where);
}

public function hapus_data($where, $table)
{
	$this-> db ->where($where);
	$this-> db ->delete($table);
	return $this-> db ->affected_rows();
}

public function getAllGrup(){ 
	$this-> db ->select("*");
	$this-> db-> from("tm_grup");
	$query = $this-> db -> get();
	return $query;
}
//berfungsi untuk membuat function login yang memiliki variable $user,$pass,$table
public function login($user, $pass)
{
	$this->db->select('*');//berfungsi untuk memilih data dari database
	$this->db->from('tm_user');//berfungsi untuk mengambil data dari pada tabel tm_user
	$this->db->where('username', $user);//berfungsi untuk memfilter data pada atribut username
	$this->db->where('password', $pass);//berfungsi untuk memfilter data pada atribut password
	$query = $this->db->get();//berfungsi sebagai eksekusi query
	return $query;//berfungsi untuk mengembalikan nilai $query
}
}
?>