<?php

class Grup_model extends CI_Model {//berfungsi untuk membuat class Grup_model

public function getAll()//berfungsi untuk membuat function getAll
{
	$this -> db -> select('*');// fungsi untuk mengambil data dari database
	$this -> db -> from('tm_grup');//untuk mengambil data dari tabel user
	$query = $this -> db -> get();//berfungsi sebagai eksekusi query sama seperti mysqli_query
	return $query;//untuk  mengembalikan nilai di $query
}

public function input_data($data, $table)//berfungsi untuk membuat function input_ data yang mempunyai variable $data, $table
{
	$this -> db -> insert($table, $data);// untuk menambahkan data pada database

}

public function update_data($where,$data, $table)
{
	$this -> db -> where($where);// untuk menambahkan data pada database
	$this->db->update($table, $data);
}

public function getRow($where, $table){
	return $this-> db -> get_where($table,$where);
}

public function hapus_data($where, $table)
{
	$this-> db ->where($where);
	$this-> db ->delete($table);
}

public function getAllGrup(){ 
	$this-> db ->select("*");
	$this-> db-> from("tm_grup");
	$query = $this-> db -> get();
	return $query;
}

public function login($user, $pass)
{
	$this->db->select('*');
	$this->db->from('tm_grup');
	$this->db->where('username', $user);
	$this->db->where('password', $pass);
	$query = $this->db->get();
	return $query;
}
}
?>