<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Penilaian Berkas</h1>
        <div class="align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: transparent;">
                    <li class="breadcrumb-item"><a href="<?= BASE_URL; ?>/instansi">Data Pengajuan Instansi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Penilaian Berkas</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Formulir Update Penilaian Berkas</h6>
            <div class="card-tools">
                <a href="<?= BASE_URL; ?>/instansi" class="btn btn-sm btn-warning float-right">
                    <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            </div>
        </div>
        </br>
        <form class="form-horizontal" method="POST" action="<?= BASE_URL;?>/instansi/updateInstansi" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <input type="hidden" name="id_pengajuan" value="<?= $data['pengajuan_instansi']['id_pengajuan']; ?>">
                    <div class="col-md-1">
                        <img src="" alt="">
                    </div>
                    <div class="col-md-3">
                        <table class="table table-responsive">
                            <tbody>
                                <tr>
                                    <td width="50%"><strong>Nama<strong></td>
                                    <td width="50%"><?= $data['pengajuan_instansi']['nama_mahasiswa']; ?></td>
                                </tr>
                                <tr>
                                    <td width="40%"><strong>NIM<strong></td>
                                    <td width="60%"><?= $data['pengajuan_instansi']['nim_mahasiswa']; ?></td>
                                </tr>
                                 <tr>
                                    <td width="40%"><strong>Email<strong></td>
                                    <td width="60%"><?= $data['pengajuan_instansi']['email_mahasiswa']; ?></td>
                                </tr>
                                 <tr>
                                    <td width="40%"><strong>No HP<strong></td>
                                    <td width="60%"><?= $data['pengajuan_instansi']['telp_mahasiswa']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">Berkas</th>
                                    <th scope="col">Nama Data</th>
                                    <th scope="col">Penilaian</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">Nama Instansi</td>
                                    <td><?= $data['pengajuan_instansi']['nama_instansi']; ?></td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Valid" <?php if ($data['penilaian_instansi']['nama_instansi'] == "Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio1">Valid</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Tidak Valid" <?php if ($data['penilaian_instansi']['nama_instansi'] == "Tidak Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio2">Tidak Valid</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Alamat Instansi</td>
                                    <td scope="row"><?= $data['pengajuan_instansi']['alamat_instansi']; ?></td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio1" value="Valid" <?php if ($data['penilaian_instansi']['alamat_instansi'] == "Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio1">Valid</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="inlineRadio2" value="Tidak Valid" <?php if ($data['penilaian_instansi']['alamat_instansi'] == "Tidak Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio2">Tidak Valid</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Media Sosial Instansi</td>
                                    <td scope="row"><?= $data['pengajuan_instansi']['url_medsos_instansi']; ?></td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio1" value="Valid" <?php if ($data['penilaian_instansi']['url_medsos_instansi'] == "Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio1">Valid</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="inlineRadio2" value="Tidak Valid" <?php if ($data['penilaian_instansi']['url_medsos_instansi'] == "Tidak Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio2">Tidak Valid</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Penerima Surat</td>
                                    <td scope="row"><?= $data['pengajuan_instansi']['penerima_surat']; ?></td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio1" value="Valid" <?php if ($data['penilaian_instansi']['penerima_surat'] == "Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio1">Valid</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="inlineRadio2" value="Tidak Valid" <?php if ($data['penilaian_instansi']['penerima_surat'] == "Tidak Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio2">Tidak Valid</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Jabatan Penerima Surat</td>
                                    <td scope="row"><?= $data['pengajuan_instansi']['jabatan_penerima_surat']; ?></td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio1" value="Valid" <?php if ($data['penilaian_instansi']['jabatan_penerima_surat'] == "Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio1">Valid</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="inlineRadio2" value="Tidak Valid" <?php if ($data['penilaian_instansi']['jabatan_penerima_surat'] == "Tidak Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio2">Tidak Valid</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Objek PKL</td>
                                    <td scope="row"><?= $data['pengajuan_instansi']['objek_pkl']; ?></td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio1" value="Valid" <?php if ($data['penilaian_instansi']['objek_pkl'] == "Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio1">Valid</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="inlineRadio2" value="Tidak Valid" <?php if ($data['penilaian_instansi']['objek_pkl'] == "Tidak Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio2">Tidak Valid</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Waktu Pelaksanaan</td>
                                    <td scope="row"><?= $data['pengajuan_instansi']['waktu_pelaksanaan']; ?></td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio1" value="Valid" <?php if ($data['penilaian_instansi']['waktu_pelaksanaan'] == "Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio1">Valid</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions6" id="inlineRadio2" value="Tidak Valid" <?php if ($data['penilaian_instansi']['waktu_pelaksanaan'] == "Tidak Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio2">Tidak Valid</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">KHS Terakhir</td>
                                    <td scope="row"><?= $data['pengajuan_instansi']['khs']; ?></td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions7" id="inlineRadio1" value="Valid" <?php if ($data['penilaian_instansi']['khs'] == "Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio1">Valid</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions7" id="inlineRadio2" value="Tidak Valid" <?php if ($data['penilaian_instansi']['khs'] == "Tidak Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio2">Tidak Valid</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">SKS Lulus</td>
                                    <td scope="row"><?= $data['pengajuan_instansi']['sks_lulus']; ?></td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions8" id="inlineRadio1" value="Valid" <?php if ($data['penilaian_instansi']['sks_lulus'] == "Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio1">Valid</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions8" id="inlineRadio2" value="Tidak Valid" <?php if ($data['penilaian_instansi']['sks_lulus'] == "Tidak Valid") { echo "checked"; } ?>>
                                            <label class="form-check-label" for="inlineRadio2">Tidak Valid</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">Status Penilaian</td>
                                    <td>
                                        <div class="form-group">
                                            <select id="inputState" class="form-control form-control-sm" name="status_penilaian">
                                                <option value="">Pilih Status Penilaian</option>
                                                <?php var_dump($data['penilaian_instansi']['status_penilaian']); ?>
                                                <option value="Pengajuan Berkas" <?php if ($data['pengajuan_instansi']['status_penilaian'] == "Pengajuan Berkas") { echo "selected"; } ?>>Pengajuan Berkas</option>
                                                <option value="Berkas Revisi" <?php if ($data['pengajuan_instansi']['status_penilaian'] == "Berkas Revisi") { echo "selected"; } ?>>Berkas Revisi</option>
                                                <option value="Berkas Tervalidasi" <?php if ($data['pengajuan_instansi']['status_penilaian'] == "Berkas Tervalidasi") { echo "selected"; } ?>>Berkas Tervalidasi</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <!-- Pembuka Card-footer -->
            <div class="card-footer py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-sm btn-success float-right"><i class="fas fa-simpan"></i>
                        Simpan
                    </button>
                </div>
            </div>
            <!-- Penutup Card-footer -->
        </form>
    </div>