<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Tables User</h6>
    </div>
    <div class="card-body"><div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><!--untuk membuat tabel-->
        <thead>
          <tr>
            <th>No</th><!--membuat judul kolom-->
            <th>Username</th>
            <th>Grup</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Username</th>
            <th>Grup</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
          $no = 1;
          foreach ($user as $baris) { // untuk melakukan perulangan
            ?>
          <tr><td><?php echo $no++; ?></td> <!-- untuk memberikan nomer-->
            <td><?php echo $baris->username; ?></td> <!-- untuk memnggil data dari field username-->
            <td><?php echo $baris->grup; ?></td><!-- untuk memnggil data dari field grup-->
          </tr>
          <?php } ?>
        </tbody>
      </table>  
      <a href="<?php echo base_url('Mahasiswa/tambah')?>" class="btn btn-success btn-icon-split"><!-- untuk berpindah ke tampilan tambah_mahasiswa-->
      <span class="text">Tambah Data</span></a>   
    </div>
  </div>
  </div>
</div>

