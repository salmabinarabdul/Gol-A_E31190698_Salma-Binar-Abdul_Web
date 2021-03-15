<?php
class No4 extends CI_Controller{
	public function index() 
	{
		
		$this->load->model("No4_model");

		$model = $this->No4_model;

		$data = 
		[
		"nim" => $model->nim,
		"nama" => $model->nama,
		"jurusan" => $model->jurusan,
		"prodi" => $model->prodi

		];

		$this->load->view("no4/index", $data);

	}

  }
  ?>