<?php

class Prodi_model extends CI_Model {

	public function getDataProdi()
	{
		$prodi = [
			[
				"no" => "1",
				"prodi" => "2016",
				"keterangan" => "Manajemen Informatika"
			],
			[
				"no" => "2",
				"prodi" => "2017",
				"keterangan" => "Teknik Komputer Kontrol"
			],
			[
				"no" => "3",
				"prodi" => "2018",
				"keterangan" => "Teknik Informatika"  
			],
		];
		return $prodi;
	}
}
?>