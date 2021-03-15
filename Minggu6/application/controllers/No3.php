<?php
class No3 extends CI_Controller{
	public function index() 
	{
		
		$this->load->model("No3_model");

		$model = $this->No3_model;

		$a = $model->txt;

		$data["teks"] = $a;

		$this->load->view("no3/index", $data);

	}

  }
  ?>