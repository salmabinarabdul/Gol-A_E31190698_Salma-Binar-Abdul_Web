<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Grup</title> <!--memberikan judul tabel-->
</head>
<body>
	<div class="row">
		<div class="col-lg-7">
			<div class="p-5">
				<div class="text-center">
					<h1 class="h4 text-gray-900 mb-4">Edit Grup</h1></div> <!--memberikan judul tabel-->
					<?php foreach ($grup as $baris): ?>
					<form class="grup" action="<?php echo base_url('Grup/updatedata');?>" method="post"> <!-- untuk meload ke controller-->
						<input type= "hidden" name="id_grup" value="<?= $baris->id_grup ?>">
						<div class="form-group"> <!--untuk membuat sebuah form-->
							<input type="text" class="form-control form-control-grup" id="nama_grup" name="nama_grup" placeholder="Nama Grup" value="<?= $baris->grup ?>" require> 
						</div> 
						<input type="submit" class="btn btn-success" name="submit" value="Simpan"><!--untuk menambahkan sebuah button-->
					</form>
					<?php endforeach ?>
					<hr> 
					<div class="text-center">
						<a class="small" href="index">Kembali</a>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>
