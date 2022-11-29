<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Mahasiswa Pengajuan PKL Lomba</h1>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pengajuan</h6>
    </div>
    <div class="card-body">
      <div class="col-md-5">
        <form class="navbar-search" method="POST" action="<?= BASE_URL;?>/instansi/cari">
          <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
              aria-label="Search" aria-describedby="basic-addon2" name="key">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">
                <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
          </div>
        </form>
      </div><br>
      <div class="table-responsive">
        <div class="col-sm-12">
          <?php
            Flasher::Message();
          ?>
        </div>
        <table class="table table-bordered">
          <thead class="text-center">
            <tr>
              <th width="5%">No</th>
              <th width="20%">NIM</th>
              <th width="30%">Nama Mahasiswa</th>
              <th width="20%">Status</th>
              <th width="15%">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 1;
              foreach($data['lomba'] as $row){
            ?>
            <tr>
              <td align="center"><?= $no; ?></td>
              <td align="center"><?= $row['nim_mahasiswa']; ?></td>
              <td align="center"><?= $row['nama_mahasiswa']; ?></td>
              <td align="center"><?= $row['status_penilaian']; ?></td>
              <td align="center">
                <?php if ($row['status_penilaian']=="Berkas Revisi"||$row['status_penilaian']=="Berkas Tervalidasi"){?>
                <a href="<?= BASE_URL;?>/lomba/edit/<?= $row['id_pengajuan']; ?>" class="btn btn-sm btn-success" title="Berikan Penilaian Ulang"><i class="fas fa-edit"></i></a>
                <?php } ?>
                <?php if ($row['status_penilaian']=="Pengajuan Berkas") {?>
                <a href="<?= BASE_URL;?>/lomba/penilaian/<?= $row['id_pengajuan']; ?>" class="btn btn-sm btn-warning" title="Berikan Penilaian"><i class="fas fa-edit"></i></a>
                <?php } ?>
                <a href="<?= BASE_URL;?>/lomba/hapus/<?= $row['id_pengajuan']; ?>" class="btn btn-sm btn-danger" title="Hapus Pengajuan"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
            <?php 
            $no++; }
          ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>