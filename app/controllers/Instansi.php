<?php

class Instansi extends Controller {
	public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. BASE_URL . '/login');
			exit;
		}
	}

	public function index()
	{
		$data['title'] = 'Data Instansi';
		$data['instansi'] = $this->model('InstansiModel')->getAllInstansi();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('templates/navbar', $data);
		$this->view('instansi/index', $data);
		$this->view('templates/footer');
	}
	
	public function cari()
	{
		$data['title'] = 'Data Instansi';
		$data['instansi'] = $this->model('InstansiModel')->cariInstansi();
		$data['key'] = $_POST['key'];
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('templates/navbar', $data);
		$this->view('instansi/index', $data);
		$this->view('templates/footer');
	}

	public function penilaian($kode_pengajuan) 
	{
		$data['title'] = 'Penilaian Berkas Instansi';
		$data['pengajuan'] = $this->model('InstansiModel')->getInstansiById($kode_pengajuan);
		$data['objek'] = $this->model('InstansiModel')->getObjekPkl($kode_pengajuan);		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('templates/navbar', $data);
		$this->view('instansi/penilaian', $data);
		$this->view('templates/footer');
	}

	public function edit($kode_pengajuan)
	{
		$data['title'] = 'Ubah Penilaian Berkas Instansi';
		$data['pengajuan'] = $this->model('InstansiModel')->getInstansiById($kode_pengajuan);
		$data['nilai'] = $this->model('InstansiModel')->getNilaiInstansi($kode_pengajuan);
		$data['objek'] = $this->model('InstansiModel')->getObjekPkl($kode_pengajuan);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('templates/navbar', $data);
		$this->view('instansi/edit', $data);
		$this->view('templates/footer');
	}

	public function simpanInstansi()
	{		
		if( $this->model('InstansiModel')->penilaianInstansi($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. BASE_URL . '/instansi');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. BASE_URL . '/instansi');
			exit;	
		}
	}

	public function updateInstansi(){	
		if( $this->model('InstansiModel')->updatePenilaianInstansi($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. BASE_URL . '/instansi');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. BASE_URL . '/instansi');
			exit;	
		}
	}

	public function hapus($id_pengajuan){
		if( $this->model('InstansiModel')->deleteInstansi($id_pengajuan) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. BASE_URL . '/instansi');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. BASE_URL . '/instansi');
			exit;	
		}
	}
}