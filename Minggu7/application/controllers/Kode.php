<?php 
class Kode extends CI_Controller{

	public function hello ($var){
		if (isset($var)) {
			switch (strtolower($var)) {
				case "php":
				$this-> load -> view("URI/phpview");
				break;
				case "python":
				$this-> load -> view("URI/pythonview");
				break;
				case "cpp":
				$this-> load -> view("URI/cppview");
				break;
				case "java":
				$this-> load -> view("URI/javaview");
				break;
				default:
				echo "Input URI Salah";
			}
		} else{
			echo "Input URI Salah";
		}
	}
}
?>