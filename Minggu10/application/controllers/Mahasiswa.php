<?php

class Mahasiswa extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this -> load -> model('Mahasiswa_model');
	}
	public function index(){
		$data['user'] = $this ->Mahasiswa_model -> getAll() -> result();
		$this -> load -> view('crud/home_mahasiswa',$data);
	}
	public function tambah()
	{
		$this -> load -> view('crud/tambah_mahasiswa');
	}
	public function input()
	{
		$username = $this -> input -> post('username');
		$password = $this -> input -> post ('pass');
		$grup = $this -> input -> post ('grup');

		$password = $this -> input -> post ('pass');
		$data = array(
			'username' => $username,
			'password' => $password,
			'grup' => $grup);
		$this -> Mahasiswa_model -> input_data($data, 'tm_user');
		redirect('Mahasiswa/index');
	}
}

?>
