<?php

class InstansiModel {
	
	private $table = 'pengajuan';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllInstansi()
	{
		$this->db->query("	SELECT 	mahasiswa.nim, 
									mahasiswa.nama_mahasiswa,
									pengajuan.kode_pengajuan, 
									pengajuan.status
      						FROM " . $this->table . " 
      						INNER JOIN candidate ON pengajuan.kode_pengajuan = candidate.kode_pengajuan 
      						INNER JOIN mahasiswa ON candidate.nim = mahasiswa.nim
							INNER JOIN kategori_pkl ON pengajuan.kategori_pkl = kategori_pkl.id
							WHERE kategori_pkl.id = 1
							ORDER BY mahasiswa.nim ASC");
		return $this->db->resultSet();
	}

	public function getInstansiById($kode_pengajuan)
	{
		$this->db->query("	SELECT 	berkas_instansi.*,
									pengajuan.kode_pengajuan,
									pengajuan.awal_pelaksanaan,
									pengajuan.akhir_pelaksanaan,
									pengajuan.status,
									berkas.khs,
									mahasiswa.*
							FROM " . $this->table . "	
							INNER JOIN berkas ON pengajuan.kode_pengajuan = berkas.kode_pengajuan
							INNER JOIN berkas_instansi ON pengajuan.kode_pengajuan = berkas_instansi.kode_pengajuan
							INNER JOIN candidate ON pengajuan.kode_pengajuan = candidate.kode_pengajuan 
      						INNER JOIN mahasiswa ON candidate.nim = mahasiswa.nim
							INNER JOIN kategori_pkl ON pengajuan.kategori_pkl = kategori_pkl.id 
							WHERE pengajuan.kode_pengajuan = :kode_pengajuan AND kategori_pkl.id = 1");
		$this->db->bind('kode_pengajuan',$kode_pengajuan);
		return $this->db->single();
	}

	public function getNilaiInstansi($kode_pengajuan)
	{
		$this->db->query("	SELECT 	*
							FROM nilai_instansi	
							WHERE kode_pengajuan=:kode_pengajuan");
		$this->db->bind('kode_pengajuan',$kode_pengajuan);
		return $this->db->single();
	}

	public function getObjekPkl($kode_pengajuan)
	{
		$this->db->query("	SELECT objek_pkl.nama_objek
							FROM berkas_instansi
							INNER JOIN objek_pkl ON berkas_instansi.id_objek_pkl = objek_pkl.id
							WHERE berkas_instansi.kode_pengajuan=:kode_pengajuan");
		$this->db->bind('kode_pengajuan',$kode_pengajuan);
		return $this->db->single();
	}
	
	public function penilaianInstansi($data)
	{
		$query = "	UPDATE nilai_instansi, pengajuan 
					SET nilai_instansi.nama_instansi			=:nama_instansi, 
						nilai_instansi.alamat					=:alamat,
						nilai_instansi.url_medsos_instansi		=:url_medsos_instansi,
						nilai_instansi.penerima_surat			=:penerima_surat,
						nilai_instansi.jabatan_penerima			=:jabatan_penerima, 
						nilai_instansi.objek_pkl				=:objek_pkl, 
						nilai_instansi.waktu_pelaksanaan		=:waktu_pelaksanaan, 
						nilai_instansi.khs						=:khs,
						nilai_instansi.sks						=:sks,
						pengajuan.status						=:status
					WHERE nilai_instansi.kode_pengajuan			=:kode_pengajuan
					AND pengajuan.kode_pengajuan				=:kode_pengajuan";
		$this->db->query($query);
		$this->db->bind('kode_pengajuan',$data['kode_pengajuan']);
		$this->db->bind('nama_instansi', $data['inlineRadioOptions']);
		$this->db->bind('alamat', $data['inlineRadioOptions1']);
		$this->db->bind('url_medsos_instansi', $data['inlineRadioOptions2']);
		$this->db->bind('penerima_surat', $data['inlineRadioOptions3']);
		$this->db->bind('jabatan_penerima', $data['inlineRadioOptions4']);
		$this->db->bind('objek_pkl', $data['inlineRadioOptions5']);
		$this->db->bind('waktu_pelaksanaan', $data['inlineRadioOptions6']);
		$this->db->bind('khs', $data['inlineRadioOptions7']);
		$this->db->bind('sks', $data['inlineRadioOptions8']);
		$this->db->bind('status', $data['status']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updatePenilaianInstansi($data)
	{
		$query = "	UPDATE nilai_instansi, pengajuan 
					SET nilai_instansi.nama_instansi			=:nama_instansi, 
						nilai_instansi.alamat					=:alamat,
						nilai_instansi.url_medsos_instansi		=:url_medsos_instansi,
						nilai_instansi.penerima_surat			=:penerima_surat,
						nilai_instansi.jabatan_penerima			=:jabatan_penerima, 
						nilai_instansi.objek_pkl				=:objek_pkl, 
						nilai_instansi.waktu_pelaksanaan		=:waktu_pelaksanaan, 
						nilai_instansi.khs						=:khs,
						nilai_instansi.sks						=:sks,
						pengajuan.status						=:status
					WHERE nilai_instansi.kode_pengajuan			=:kode_pengajuan
					AND pengajuan.kode_pengajuan				=:kode_pengajuan";
		$this->db->query($query);
		$this->db->bind('kode_pengajuan',$data['kode_pengajuan']);
		$this->db->bind('nama_instansi', $data['inlineRadioOptions']);
		$this->db->bind('alamat', $data['inlineRadioOptions1']);
		$this->db->bind('url_medsos_instansi', $data['inlineRadioOptions2']);
		$this->db->bind('penerima_surat', $data['inlineRadioOptions3']);
		$this->db->bind('jabatan_penerima', $data['inlineRadioOptions4']);
		$this->db->bind('objek_pkl', $data['inlineRadioOptions5']);
		$this->db->bind('waktu_pelaksanaan', $data['inlineRadioOptions6']);
		$this->db->bind('khs', $data['inlineRadioOptions7']);
		$this->db->bind('sks', $data['inlineRadioOptions8']);
		$this->db->bind('status', $data['status']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteInstansi($kode_pengajuan)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE kode_pengajuan=:kode_pengajuan');
		$this->db->bind('kode_pengajuan',$kode_pengajuan);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariInstansi()
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
							WHERE mahasiswa.nama_mahasiswa LIKE :key AND kategori_pkl.id = 1
							ORDER BY mahasiswa.nim ASC");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}
}