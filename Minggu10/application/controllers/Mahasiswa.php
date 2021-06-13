<?php

class Mahasiswa extends CI_Controller {
	public function __construct(){
		parent::__construct();//untuk menjalankan file pertama kali ketika di panggil
		$this -> load -> model('Mahasiswa_model');//untuk memanggil file mahasiswa_model
	}
	public function index(){
		$data['user'] = $this ->Mahasiswa_model -> getAll() -> result();//untuk memanggil data dari database melalui file mahasiswa_model
		$this -> template -> views('crud/home_mahasiswa',$data);//untuk menampilkan view home_mahasiswa
	}
	public function tambah()
	{
		$data["grup"]= $this-> Mahasiswa_model->getAllGrup()->result();
		$this -> template -> views('crud/tambah_mahasiswa',$data);//untuk menampilkan view tambah_mahasiswa
	}
	public function input()
	{
		$username = $this -> input -> post('username');//untuk menambahkan data ke field username
		$password = $this -> input -> post ('pass');//untuk menambahkan data ke field password
		$grup = $this -> input -> post ('grup');//untuk menambahkan data ke field grup

		$data = array
		(
			'username' => $username,
			'password' => $password,
			'grup' => $grup
		);
		$this -> Mahasiswa_model -> input_data($data, 'tm_user');//memproses data melalui file mahasiswa_model di method input_data
		redirect('Mahasiswa/index');//kembali ke tampilan home_mahasiswa
	}

	public function edit($id)
	{
	$where = array("id" => $id);
	$data["user"] = $this ->Mahasiswa_model-> getRow($where, "tm_user")-> result();
	$data["grup"]= $this-> Mahasiswa_model->getAllGrup()->result();
	$this-> template -> views("crud/edit_mahasiswa", $data);
	}

	public function updateData()
		{
			$id = $this->input ->post ("id");
			$username = $this -> input -> post('username');//untuk menambahkan data ke field username
			$password = $this -> input -> post ('pass');//untuk menambahkan data ke field password
			$grup = $this -> input -> post ('grup');//untuk menambahkan data ke field grup

			$data = array
			(
				'username' => $username,
				'password' => $password,
				'grup' => $grup
			);

			$where = array("id" => $id);

			$this->Mahasiswa_model->update_data($where, $data, "tm_user");
			redirect("Mahasiswa");

	}

	public function hapus($id)
	{
		$where = array("id" => $id);
		$this-> Mahasiswa_model->hapus_data($where, "tm_user");
		redirect("Mahasiswa");
	}

	public function logout()
	{
		session_destroy();
		redirect('Login');
	}

	public function Api(){//berfungsi untuk membuat function Api
		$data = $this-> Mahasiswa_model->getAll();//berfungsi untuk memanggil data dari database melalui file mahasiswa_model
		echo json_encode($data->result_array());//berfungsi untuk menampilkan data keseluruhan dari database dalam bentuk JSON
	}
	public function ApiInsert(){//berfungsi untuk membuat function ApiInsert
		$username = $this->input->post('username');//berfungsi untuk memanggil data pada field username
		$password = $this->input->post('password');//berfungsi untuk memanggil data pada field password
		$nama = $this->input->post('nama');//berfungsi untuk memanggil data pada field nama
		$grup = $this->input->post('grup');//berfungsi untuk memanggil data pada field grup

		$data = array(
			'username' => $username,
			'nama' => $nama,
			'password' => $password,
			'grup' => $grup
		);
		if ($this->Mahasiswa_model->input_data($data, 'tm_user') > 0) {
			$array = array('success' => true );
		} else {
			$array = array('success' => false );
		}
		echo json_encode($array);
	}

	public function ApiDelete(){//berfungsi untuk membuat function ApiDelete
		if ($this-> input -> post ('id')) {
			$where = array ('id' => $this -> input -> post('id'));
			if ($this -> Mahasiswa_model -> hapus_data($where, 'tm_user') > 0) {
				$array = array('success' => true );//jika username yang diinputkan benar maka proses hapus akan success
			}else {
				$array = array('success' => false);
			}
			echo json_encode($array);//berfungsi untuk mengambil data keseluruhan dari database dalam bentuk JSON
		}
	}
	public function ApiUpdate(){
		$where = ['id' => $this->input->post('id')];
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');

		$data = array(
			'username' => $username,
			'nama' => $nama,
			'password' => $password,
			'grup' => $grup
		);
		if ($this->Mahasiswa_model->update_data($where, $data, 'tm_user') > 0) {
			$array = array('success' => true );
		} else {
			$array = array('success' => false );
		}
		echo json_encode($array);
	}
}

?>
