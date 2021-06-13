<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Tables User</h6>
    </div>
    <div class="card-body"><div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><!--untuk membuat tabel-->
        <thead>
          <tr>
            <th>ID</th><!--membuat judul kolom-->
            <th>Nama Grup</th>
            <?php if ($_SESSION['session_grup'] == 1) : ?>
            <th>Opsi</th>
            <?php endif ?>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>Nama Grup</th>
            <?php if ($_SESSION['session_grup'] == 1) : ?>
            <th>Opsi</th>
            <?php endif ?>
          </tr>
        </tfoot>
        <tbody>
          <?php
          $no = 1;
          foreach ($user as $baris) { // untuk melakukan perulangan
            ?>
          <tr><td><?php echo $baris->id_grup ?></td> <!-- untuk memberikan nomer-->
            <td><?php echo $baris->grup; ?></td><!-- untuk memnggil data dari field grup-->
            <?php if ($_SESSION['session_grup'] == 1) : ?>
             <td class="text-center">
              <a class="btn btn-sm btn-outline-primary" href="<?= base_url()?>/grup/edit/<?= $baris->id_grup ?>">Edit</a>
              <a class="btn btn-sm btn-outline-primary" href="<?= base_url()?>/grup/hapus/<?= $baris->id_grup ?>">Hapus</a>
            </td>
          <?php endif ?>
          </tr>
          <?php } ?>
        </tbody>
      </table>  
      <a href="<?php echo base_url('Grup/tambah')?>" class="btn btn-success btn-icon-split"><!-- untuk berpindah ke tampilan tambah_mahasiswa-->
      <span class="text">Tambah Data</span></a>   
    </div>
  </div>
  </div>
</div>

