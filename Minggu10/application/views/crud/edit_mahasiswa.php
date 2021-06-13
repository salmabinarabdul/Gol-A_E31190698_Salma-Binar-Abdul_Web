<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit User</title> <!--memberikan judul tabel-->
</head>
<body>
	<div class="row">
		<div class="col-lg-7">
			<div class="p-5">
				<div class="text-center">
					<h1 class="h4 text-gray-900 mb-4">Edit User</h1></div> <!--memberikan judul tabel-->
					<?php foreach ($user as $baris): ?>
					<form class="user" action="<?php echo base_url('Mahasiswa/updatedata');?>" method="post"> <!-- untuk meload ke controller-->
						<input type= "hidden" name=" id" value="<?= $baris->id ?>">
						<div class="form-group"> <!--untuk membuat sebuah form-->
							<input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username Maximal 10 Character" value="<?= $baris->username ?>" require> 
						</div> 
						<div class="form-group">
							<input type="password" class="form-control form-control-user" id="pass" name="pass" placeholder="Password Maximal 6 Character" value="<?= $baris->password ?>"require>
						</div>
						<div class="form-group">
							<select id="grup" class="form-control rounded-pill" name="grup"require>
								<?php foreach ($grup as $item) : ?>
								  <option value="<?= $item->id_grup ?>" <?= $baris->grup == $item->id_grup ? 'selected' : ''; ?> ><?= $item->grup ?></option>
								 <?php endforeach ?>
							</select>
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
