<?php

class LombaModel {
	
	private $table = 'pengajuan';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllLomba()
	{
		$this->db->query("	SELECT 	mahasiswa.nim, 
									mahasiswa.nama_mahasiswa,
									pengajuan.kode_pengajuan, 
									pengajuan.status
      						FROM " . $this->table . " 
      						INNER JOIN candidate ON pengajuan.kode_pengajuan = candidate.kode_pengajuan 
      						INNER JOIN mahasiswa ON candidate.nim = mahasiswa.nim
							INNER JOIN kategori_pkl ON pengajuan.kategori_pkl = kategori_pkl.id
							WHERE kategori_pkl.id = 2
							ORDER BY mahasiswa.nim ASC");
		return $this->db->resultSet();
	}

	public function getlombaById($kode_pengajuan)
	{
		$this->db->query("	SELECT 	berkas_lomba.*,
									pengajuan.kode_pengajuan,
									pengajuan.awal_pelaksanaan,
									pengajuan.akhir_pelaksanaan,
									pengajuan.status,
									berkas.khs,
									berkas.proposal_lomba,
									berkas.sertifikat_lomba,
									mahasiswa.*
							FROM " . $this->table . "	
							INNER JOIN berkas ON pengajuan.kode_pengajuan = berkas.kode_pengajuan
							INNER JOIN berkas_lomba ON pengajuan.kode_pengajuan = berkas_lomba.kode_pengajuan
							INNER JOIN candidate ON pengajuan.kode_pengajuan = candidate.kode_pengajuan 
      						INNER JOIN mahasiswa ON candidate.nim = mahasiswa.nim
							INNER JOIN kategori_pkl ON pengajuan.kategori_pkl = kategori_pkl.id 
							WHERE pengajuan.kode_pengajuan = :kode_pengajuan AND kategori_pkl.id = 2");
		$this->db->bind('kode_pengajuan',$kode_pengajuan);
		return $this->db->single();
	}

	public function getNilaiLomba($kode_pengajuan)
	{
		$this->db->query("	SELECT 	*
							FROM nilai_lomba
							WHERE kode_pengajuan=:kode_pengajuan");
		$this->db->bind('kode_pengajuan',$kode_pengajuan);
		return $this->db->single();
	}

	public function penilaianLomba($data)
	{
		$query = "	UPDATE nilai_lomba, pengajuan 
					SET nilai_lomba.kategori_lomba			=:kategori_lomba, 
						nilai_lomba.tingkat_lomba			=:tingkat_lomba,
						nilai_lomba.nama_lomba				=:nama_lomba,
						nilai_lomba.penyelenggara			=:penyelenggara,
						nilai_lomba.produk_lomba			=:produk_lomba, 
						nilai_lomba.hasil_lomba				=:hasil_lomba, 
						nilai_lomba.pembimbing				=:pembimbing, 
						nilai_lomba.url_informasi_lomba		=:url_informasi_lomba,
						nilai_lomba.tempat_pelaksanaan		=:tempat_pelaksanaan,
						nilai_lomba.waktu_pelaksanaan		=:waktu_pelaksanaan,
						nilai_lomba.sumber_dana				=:sumber_dana,
						nilai_lomba.proposal_lomba			=:proposal_lomba,
						nilai_lomba.sertifikat_lomba		=:sertifikat_lomba,
						nilai_lomba.khs						=:khs,
						nilai_lomba.sks						=:sks,
						pengajuan.status					=:status
					WHERE nilai_lomba.kode_pengajuan		=:kode_pengajuan
					AND pengajuan.kode_pengajuan			=:kode_pengajuan";
		$this->db->query($query);
		$this->db->bind('kode_pengajuan',$data['kode_pengajuan']);
		$this->db->bind('kategori_lomba', $data['inlineRadioOptions']);
		$this->db->bind('tingkat_lomba', $data['inlineRadioOptions1']);
		$this->db->bind('nama_lomba', $data['inlineRadioOptions2']);
		$this->db->bind('penyelenggara', $data['inlineRadioOptions3']);
		$this->db->bind('produk_lomba', $data['inlineRadioOptions4']);
		$this->db->bind('hasil_lomba', $data['inlineRadioOptions5']);
		$this->db->bind('pembimbing', $data['inlineRadioOptions6']);
		$this->db->bind('url_informasi_lomba', $data['inlineRadioOptions7']);
		$this->db->bind('tempat_pelaksanaan', $data['inlineRadioOptions8']);
		$this->db->bind('waktu_pelaksanaan', $data['inlineRadioOptions9']);
		$this->db->bind('sumber_dana', $data['inlineRadioOptions10']);
		$this->db->bind('proposal_lomba', $data['inlineRadioOptions11']);
		$this->db->bind('sertifikat_lomba', $data['inlineRadioOptions12']);
		$this->db->bind('khs', $data['inlineRadioOptions13']);
		$this->db->bind('sks', $data['inlineRadioOptions14']);
		$this->db->bind('status', $data['status']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updatePenilaianLomba($data)
	{
		$query = "	UPDATE nilai_lomba, pengajuan 
					SET nilai_lomba.kategori_lomba			=:kategori_lomba, 
						nilai_lomba.tingkat_lomba			=:tingkat_lomba,
						nilai_lomba.nama_lomba				=:nama_lomba,
						nilai_lomba.penyelenggara			=:penyelenggara,
						nilai_lomba.produk_lomba			=:produk_lomba, 
						nilai_lomba.hasil_lomba				=:hasil_lomba, 
						nilai_lomba.pembimbing				=:pembimbing, 
						nilai_lomba.url_informasi_lomba		=:url_informasi_lomba,
						nilai_lomba.tempat_pelaksanaan		=:tempat_pelaksanaan,
						nilai_lomba.waktu_pelaksanaan		=:waktu_pelaksanaan,
						nilai_lomba.sumber_dana				=:sumber_dana,
						nilai_lomba.proposal_lomba			=:proposal_lomba,
						nilai_lomba.sertifikat_lomba		=:sertifikat_lomba,
						nilai_lomba.khs						=:khs,
						nilai_lomba.sks						=:sks,
						pengajuan.status					=:status
					WHERE nilai_lomba.kode_pengajuan		=:kode_pengajuan
					AND pengajuan.kode_pengajuan			=:kode_pengajuan";
		$this->db->query($query);
		$this->db->bind('kode_pengajuan',$data['kode_pengajuan']);
		$this->db->bind('kategori_lomba', $data['inlineRadioOptions']);
		$this->db->bind('tingkat_lomba', $data['inlineRadioOptions1']);
		$this->db->bind('nama_lomba', $data['inlineRadioOptions2']);
		$this->db->bind('penyelenggara', $data['inlineRadioOptions3']);
		$this->db->bind('produk_lomba', $data['inlineRadioOptions4']);
		$this->db->bind('hasil_lomba', $data['inlineRadioOptions5']);
		$this->db->bind('pembimbing', $data['inlineRadioOptions6']);
		$this->db->bind('url_informasi_lomba', $data['inlineRadioOptions7']);
		$this->db->bind('tempat_pelaksanaan', $data['inlineRadioOptions8']);
		$this->db->bind('waktu_pelaksanaan', $data['inlineRadioOptions9']);
		$this->db->bind('sumber_dana', $data['inlineRadioOptions10']);
		$this->db->bind('proposal_lomba', $data['inlineRadioOptions11']);
		$this->db->bind('sertifikat_lomba', $data['inlineRadioOptions12']);
		$this->db->bind('khs', $data['inlineRadioOptions13']);
		$this->db->bind('sks', $data['inlineRadioOptions14']);
		$this->db->bind('status', $data['status']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteLomba($kode_pengajuan)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE kode_pengajuan=:kode_pengajuan');
		$this->db->bind('kode_pengajuan',$kode_pengajuan);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariLomba()
	{
		$key = $_POST['key'];
		$this->db->query("	SELECT 	mahasiswa.nim, 
									mahasiswa.nama_mahasiswa,
									pengajuan.kode_pengajuan, 
									pengajuan.status
      						FROM " . $this->table . " 
      						INNER JOIN candidate ON pengajuan.kode_pengajuan = candidate.kode_pengajuan 
      						INNER JOIN mahasiswa ON candidate.nim = mahasiswa.nim
							INNER JOIN kategori_pkl ON pengajuan.kategori_pkl = kategori_pkl.id
							WHERE mahasiswa.nama_mahasiswa LIKE :key AND kategori_pkl.id = 2
							ORDER BY mahasiswa.nim ASC");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}
}