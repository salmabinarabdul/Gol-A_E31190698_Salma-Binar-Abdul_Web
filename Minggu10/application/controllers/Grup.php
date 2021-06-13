<?php

class Grup extends CI_Controller {
	public function __construct(){
		parent::__construct();//untuk menjalankan file pertama kali ketika di panggil
		$this -> load -> model('Grup_model');//untuk memanggil file grup_model
	}
	public function index(){
		$data['user'] = $this ->Grup_model -> getAll() -> result();//untuk memanggil data dari database melalui file grup_model
		$this -> template -> views('grup/home_grup',$data);//untuk menampilkan view home_grup
	}
	public function tambah()
	{
		$data["grup"]= $this-> Grup_model->getAllGrup()->result();
		$this -> template -> views('grup/tambah_grup',$data);//untuk menampilkan view tambah_grup
	}
	public function input()
	{
		$grup = $this -> input -> post ('nama_grup');//untuk menambahkan data ke field grup

		$data = array
		(
			'grup' => $grup
		);
		$this -> Grup_model -> input_data($data, 'tm_grup');//memproses data melalui file grup_model di method input_data
		redirect('Grup/index');//kembali ke tampilan home_grup
	}

	public function edit($id_grup)
	{
	$where = array("id_grup" => $id_grup);
	$data["grup"]= $this-> Grup_model->getRow($where, 'tm_grup')->result();
	$this-> template -> views("grup/edit_grup", $data);
	}

	public function updateData()
		{
			$id_grup = $this->input ->post ("id_grup");
			$grup = $this -> input -> post ('nama_grup');//untuk menambahkan data ke field grup

			$data = array
			(
				'grup' => $grup
			);

			$where = array("id_grup" => $id_grup);

			$this->Grup_model->update_data($where, $data, "tm_grup");
			redirect("Grup");

	}

	public function hapus($id_grup)
	{
		$where = array("id_grup" => $id_grup);
		$this-> Grup_model->hapus_data($where, "tm_grup");
		redirect("Grup");
	}

	public function logout()
	{
		session_destroy();
		redirect('Login');
	}
}

?>
