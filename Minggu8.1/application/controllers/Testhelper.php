<?php
defined("BASEPATH") OR exit("No direct script access allowed");
class Testhelper extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this -> load -> helper("html");
	$this -> load -> helper("url");
}
public function index(){
	$this -> load -> view("view_helper");
}
public function template(){
	$this -> load -> view("view_template");
}
}

?>
