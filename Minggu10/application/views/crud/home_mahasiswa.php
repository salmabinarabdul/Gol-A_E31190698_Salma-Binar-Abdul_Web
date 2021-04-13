<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
</head>

<body>
  <header class="container-fluid p-5">
    <h1 class="font-weight-bold">Data Table User</h1>
    <a href="<?= base_url() ?>Mahasiswa/tambah" class="btn btn-primary my-2">Tambah data</a>
  </header>
  <main class="container">
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th>No</th>
          <th>Username</th>
          <th>Grup</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($user as $baris) : ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $baris->username ?></td>
            <td><?= $baris->grup ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </main>
</body>

</html>