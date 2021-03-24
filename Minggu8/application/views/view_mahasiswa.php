<!DOCTYPE html>
<html>
<head>
	<title>Tabel Mahasiswa</title>
</head>
<body>
	<table border = "1">
			<th>Nama</th>
			<th>Prodi</th>

		<?php foreach ($mahasiswa as $row) : ?>
			<tr>
				<td><?= $row["nama"] ?></td>
				<td><?= $row["prodi"] ?></td>
			</tr>
		<?php endforeach ?>
	</table>

</body>
</html>