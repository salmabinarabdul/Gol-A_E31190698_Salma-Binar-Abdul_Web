<?php

class Angkatan extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this-> load ->model("Angkatan_model");
	}
	public function index()
	{
		$data["angkatan"] = $this -> Angkatan_model -> getDataAngkatan();
		$this -> load -> view("view_angkatan", $data);
	}
}
?>