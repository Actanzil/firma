<?php

class LombaModel {
	
	private $table = 'pengajuan_lomba';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllLomba()
	{
		$this->db->query("	SELECT pengajuan_lomba.*, penilaian_lomba.status_penilaian 
							FROM " . $this->table . "
							JOIN penilaian_lomba ON penilaian_lomba.id_pengajuan = pengajuan_lomba.id_pengajuan
							ORDER BY penilaian_lomba.status_penilaian DESC");
		return $this->db->resultSet();
	}

	public function getlombaById($id_pengajuan)
	{
		$this->db->query("	SELECT pengajuan_lomba.*, penilaian_lomba.status_penilaian 
							FROM " . $this->table . "
							JOIN penilaian_lomba ON penilaian_lomba.id_pengajuan = pengajuan_lomba.id_pengajuan 
							WHERE pengajuan_lomba.id_pengajuan=:id_pengajuan");
		$this->db->bind('id_pengajuan',$id_pengajuan);
		return $this->db->single();
	}

	public function getStatusPenilaian($id_pengajuan)
	{
		$this->db->query("	SELECT *
							FROM penilaian_lomba
							WHERE id_pengajuan=:id_pengajuan");
		$this->db->bind('id_pengajuan',$id_pengajuan);
		return $this->db->single();
	}

	public function penilaianLomba($data)
	{
		$query = "	UPDATE penilaian_lomba 
					SET kategori_lomba			=:kategori_lomba, 
						tingkat_lomba			=:tingkat_lomba,
						nama_lomba				=:nama_lomba,
						penyelenggara			=:penyelenggara,
						produk_lomba			=:produk_lomba, 
						hasil_lomba				=:hasil_lomba, 
						pembimbing				=:pembimbing, 
						url_informasi_lomba		=:url_informasi_lomba,
						tempat_pelaksanaan		=:tempat_pelaksanaan,
						waktu_pelaksanaan		=:waktu_pelaksanaan,
						sumber_dana				=:sumber_dana,
						proposal_lomba			=:proposal_lomba,
						sertifikat_lomba		=:sertifikat_lomba,
						sks_lulus				=:sks_lulus,
						status_penilaian		=:status_penilaian
					WHERE id_pengajuan			=:id_pengajuan";
		$this->db->query($query);
		$this->db->bind('id_pengajuan',$data['id_pengajuan']);
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
		$this->db->bind('sks_lulus', $data['inlineRadioOptions13']);
		$this->db->bind('status_penilaian', $data['status_penilaian']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updatePenilaianLomba($data)
	{
		$query = "	UPDATE penilaian_lomba 
					SET kategori_lomba			=:kategori_lomba, 
						tingkat_lomba			=:tingkat_lomba,
						nama_lomba				=:nama_lomba,
						penyelenggara			=:penyelenggara,
						produk_lomba			=:produk_lomba, 
						hasil_lomba				=:hasil_lomba, 
						pembimbing				=:pembimbing, 
						url_informasi_lomba		=:url_informasi_lomba,
						tempat_pelaksanaan		=:tempat_pelaksanaan,
						waktu_pelaksanaan		=:waktu_pelaksanaan,
						sumber_dana				=:sumber_dana,
						proposal_lomba			=:proposal_lomba,
						sertifikat_lomba		=:sertifikat_lomba,
						sks_lulus				=:sks_lulus,
						status_penilaian		=:status_penilaian
					WHERE id_pengajuan			=:id_pengajuan";
		$this->db->query($query);
		$this->db->bind('id_pengajuan',$data['id_pengajuan']);
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
		$this->db->bind('sks_lulus', $data['inlineRadioOptions13']);
		$this->db->bind('status_penilaian', $data['status_penilaian']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteLomba($id_pengajuan)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id_pengajuan=:id_pengajuan');
		$this->db->bind('id_pengajuan',$id_pengajuan);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariLomba()
	{
		$key = $_POST['key'];
		$this->db->query("	SELECT pengajuan_lomba.*, penilaian_lomba.status_penilaian 
							FROM " . $this->table . "
							JOIN penilaian_lomba ON penilaian_lomba.id_pengajuan = pengajuan_lomba.id_pengajuan 
							WHERE pengajuan_lomba.nama_mahasiswa
							LIKE :key
							ORDER BY penilaian_lomba.status_penilaian DESC");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}
}