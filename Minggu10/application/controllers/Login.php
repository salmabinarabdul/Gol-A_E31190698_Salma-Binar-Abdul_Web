<?php
class Login extends CI_Controller {//berfungsi untuk membuat class login

	function __construct()
	{
		parent::__construct();//berfungsi untuk menjalankan file pertama kali ketika di panggil
		$this->load->model('Mahasiswa_model');//berfungsi untuk memanggil file Mahasiswa_model
	}

	public function index()
  {//berfungsi untuk membuat function index
    $this->load->view('crud/login');//berfungsi untuk menampilkan view crud/login
  }

  public function cek_log()//berfungsi untuk membuat function cek_log
  {
    $username = filter_var($this->input->post('username'), FILTER_SANITIZE_STRING);//berfungsi untuk mengirim data ke field usename
    $password = filter_var($this->input->post('password'), FILTER_SANITIZE_STRING);//berfungsi untuk mengirim data ke field usename
    //berfungsi untuk mengecek data pada database
    $cek = $this->Mahasiswa_model->login($username, $password)->result();
    if ($cek) {
      foreach ($cek as $row) {
        $user = $row->username;
        $nama = $row->nama;
        $grup = $row->grup;
      }

      $this->session->set_userdata('session_user', $user);//berfungsi untuk membuat session user
      $this->session->set_userdata('session_nama', $nama);//berfungsi untuk membuat session nama
      $this->session->set_userdata('session_grup', $grup);//berfungsi untuk membuat session grup
      redirect('Mahasiswa');//jika login berhasil maka akan tampilkan home_mahasiswa
    } else {
      $this->load->view('crud/login');//berfungsi jika gagal login maka akan menampilkan view crud/login
    }
  }
}