<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah User</title>
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
</head>
<body>
	<div class='container'>
		<header class='text-center'>
			<h1>Tambah User Baru</h1>
		</header>
		<main>
			<form action ="<?= base_url('Mahasiswa/input') ?>"method='post'>
				<div class ="form-group">
					<label for="username">Username</label>
					<input class="form-control"
					maxlength="10" type='text' name='username' id='username'>
				</div>
				<div class ="form-group">
					<label for="password">Password</label>
					<input class="form-control"
					maxlength="6" type='password' name='pass' id='pass'>
				</div>
				<div class ="form-group">
					<label for="grup">Grup user</label>
					<select id ="grup" class="form-control" name="grup" required>
				<option value="0">Pilih Grup User..</option>
				<option value="1">Admin</option>
				<option value="2">User</option>
			</select>
		</div>      		
		<input type="submit" class="btn btn-primary" value="Simpan">
		<a href="index" class="btn text-danger">Batal</a> 
			</form>

		</main>
	</div>

</body>
</html>
