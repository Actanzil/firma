<?php

class InstansiModel {
	
	private $table = 'pengajuan_instansi';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllInstansi()
	{
		$this->db->query("	SELECT pengajuan_instansi.*, penilaian_instansi.status_penilaian 
							FROM " . $this->table . "
							JOIN penilaian_instansi ON penilaian_instansi.id_pengajuan = pengajuan_instansi.id_pengajuan
							ORDER BY penilaian_instansi.status_penilaian DESC");
		return $this->db->resultSet();
	}

	public function getInstansiById($id_pengajuan)
	{
		$this->db->query("	SELECT pengajuan_instansi.*, penilaian_instansi.status_penilaian 
							FROM " . $this->table . "
							JOIN penilaian_instansi ON penilaian_instansi.id_pengajuan = pengajuan_instansi.id_pengajuan 
							WHERE pengajuan_instansi.id_pengajuan=:id_pengajuan");
		$this->db->bind('id_pengajuan',$id_pengajuan);
		return $this->db->single();
	}

	public function getStatusPenilaian($id_pengajuan)
	{
		$this->db->query("	SELECT *
							FROM penilaian_instansi
							WHERE id_pengajuan=:id_pengajuan");
		$this->db->bind('id_pengajuan',$id_pengajuan);
		return $this->db->single();
	}
	
	public function penilaianInstansi($data)
	{
		$query = "	UPDATE penilaian_instansi 
					SET nama_instansi			=:nama_instansi, 
						alamat_instansi			=:alamat_instansi,
						url_medsos_instansi		=:url_medsos_instansi,
						penerima_surat			=:penerima_surat,
						jabatan_penerima_surat	=:jabatan_penerima_surat, 
						objek_pkl				=:objek_pkl, 
						waktu_pelaksanaan		=:waktu_pelaksanaan, 
						khs						=:khs,
						sks_lulus				=:sks_lulus,
						status_penilaian		=:status_penilaian
					WHERE id_pengajuan			=:id_pengajuan";
		$this->db->query($query);
		$this->db->bind('id_pengajuan',$data['id_pengajuan']);
		$this->db->bind('nama_instansi', $data['inlineRadioOptions']);
		$this->db->bind('alamat_instansi', $data['inlineRadioOptions1']);
		$this->db->bind('penerima_surat', $data['inlineRadioOptions2']);
		$this->db->bind('jabatan_penerima_surat', $data['inlineRadioOptions3']);
		$this->db->bind('url_medsos_instansi', $data['inlineRadioOptions4']);
		$this->db->bind('objek_pkl', $data['inlineRadioOptions5']);
		$this->db->bind('waktu_pelaksanaan', $data['inlineRadioOptions6']);
		$this->db->bind('khs', $data['inlineRadioOptions7']);
		$this->db->bind('sks_lulus', $data['inlineRadioOptions8']);
		$this->db->bind('status_penilaian', $data['status_penilaian']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updatePenilaianInstansi($data)
	{
		$query = "	UPDATE penilaian_instansi 
					SET nama_instansi			=:nama_instansi, 
						alamat_instansi			=:alamat_instansi,
						url_medsos_instansi		=:url_medsos_instansi,
						penerima_surat			=:penerima_surat,
						jabatan_penerima_surat	=:jabatan_penerima_surat, 
						objek_pkl				=:objek_pkl, 
						waktu_pelaksanaan		=:waktu_pelaksanaan, 
						khs						=:khs,
						sks_lulus				=:sks_lulus,
						status_penilaian		=:status_penilaian
					WHERE id_pengajuan			=:id_pengajuan";
		$this->db->query($query);
		$this->db->bind('id_pengajuan',$data['id_pengajuan']);
		$this->db->bind('nama_instansi', $data['inlineRadioOptions']);
		$this->db->bind('alamat_instansi', $data['inlineRadioOptions1']);
		$this->db->bind('penerima_surat', $data['inlineRadioOptions2']);
		$this->db->bind('jabatan_penerima_surat', $data['inlineRadioOptions3']);
		$this->db->bind('url_medsos_instansi', $data['inlineRadioOptions4']);
		$this->db->bind('objek_pkl', $data['inlineRadioOptions5']);
		$this->db->bind('waktu_pelaksanaan', $data['inlineRadioOptions6']);
		$this->db->bind('khs', $data['inlineRadioOptions7']);
		$this->db->bind('sks_lulus', $data['inlineRadioOptions8']);
		$this->db->bind('status_penilaian', $data['status_penilaian']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteInstansi($id_pengajuan)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id_pengajuan=:id_pengajuan');
		$this->db->bind('id_pengajuan',$id_pengajuan);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariInstansi()
	{
		$key = $_POST['key'];
		$this->db->query("	SELECT pengajuan_instansi.*, penilaian_instansi.status_penilaian 
							FROM " . $this->table . "
							JOIN penilaian_instansi ON penilaian_instansi.id_pengajuan = pengajuan_instansi.id_pengajuan 
							WHERE pengajuan_instansi.nama_mahasiswa
							LIKE :key
							ORDER BY penilaian_instansi.status_penilaian DESC");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}
}