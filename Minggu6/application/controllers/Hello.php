<?php
class Hello extends CI_Controller{
	public function index() 
	{
		//echo "<h2>Hello World CI!</h2>";

		//c3 - membuat model "hello_model"
		$this->load->model("Hello_model");

		$model = $this->Hello_model;

		$a = $model->txt;

		$data["teks"] = $a;

        //memanggil file view
		$this->load->view("helloview", $data);//file view

	}

  }
  ?>
