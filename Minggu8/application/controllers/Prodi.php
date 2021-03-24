<?php

class Prodi extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this-> load ->model("Prodi_model");
	}
	public function index()
	{
		$data["prodi"] = $this -> Prodi_model -> getDataProdi();
		$this -> load -> view("view_prodi", $data);
	}
}
?>