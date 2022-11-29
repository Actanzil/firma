<?php

class Lomba extends Controller {
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
		$data['title'] = 'Data Lomba';
		$data['lomba'] = $this->model('LombaModel')->getAllLomba();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('templates/navbar', $data);
		$this->view('lomba/index', $data);
		$this->view('templates/footer');
	}
	public function cari()
	{
		$data['title'] = 'Data Lomba';
		$data['lomba'] = $this->model('LombaModel')->cariLomba();
		$data['key'] = $_POST['key'];
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('templates/navbar', $data);
		$this->view('lomba/index', $data);
		$this->view('templates/footer');
	}

	public function penilaian($id_pengajuan) 
	{
		$data['title'] = 'Penilaian Berkas Lomba';
		$data['pengajuan_lomba'] = $this->model('LombaModel')->getLombaById($id_pengajuan);		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('templates/navbar', $data);
		$this->view('lomba/penilaian', $data);
		$this->view('templates/footer');
	}

	public function edit($id_pengajuan)
	{
		$data['title'] = 'Detail Lomba';
		$data['pengajuan_lomba'] = $this->model('LombaModel')->getLombaById($id_pengajuan);
		$data['penilaian_lomba'] = $this->model('LombaModel')->getStatusPenilaian($id_pengajuan);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('templates/navbar', $data);
		$this->view('lomba/edit', $data);
		$this->view('templates/footer');
	}

	public function simpanLomba()
	{		
		if( $this->model('LombaModel')->penilaianLomba($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. BASE_URL . '/lomba');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. BASE_URL . '/lomba');
			exit;	
		}
	}

	public function updateLomba(){	
		if( $this->model('LombaModel')->updatePenilaianLomba($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','diupdate','success');
			header('location: '. BASE_URL . '/lomba');
			exit;			
		}else{
			Flasher::setMessage('Gagal','diupdate','danger');
			header('location: '. BASE_URL . '/lomba');
			exit;	
		}
	}

	public function hapus($id_pengajuan){
		if( $this->model('LombaModel')->deleteLomba($id_pengajuan) > 0 ) {
			Flasher::setMessage('Berhasil','dihapus','success');
			header('location: '. BASE_URL . '/lomba');
			exit;			
		}else{
			Flasher::setMessage('Gagal','dihapus','danger');
			header('location: '. BASE_URL . '/lomba');
			exit;	
		}
	}
}