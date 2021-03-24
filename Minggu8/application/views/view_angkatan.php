<!DOCTYPE html>
<html>
<head>
	<title>Tabel Angkatan</title>
</head>
<body>
	<table border = "1">
			<th>No</th>
			<th>Tahun</th>

		<?php foreach ($angkatan as $row) : ?>
			<tr>
				<td><?= $row["no"] ?></td>
				<td><?= $row["tahun"] ?></td>
			</tr>
		<?php endforeach ?>
	</table>

</body>
</html>