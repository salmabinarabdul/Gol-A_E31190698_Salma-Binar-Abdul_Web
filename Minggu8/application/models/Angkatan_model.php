<?php

class Angkatan_model extends CI_Model {

	public function getDataAngkatan()
	{
		$angkatan = [
			[
				"no" => "1",
				"tahun" => "2016"],
			[
				"no" => "2",
				"tahun" => "2017"],
			[
				"no" => "3",
				"tahun" => "2018"],
		];
		return $angkatan;
	}
}
?>