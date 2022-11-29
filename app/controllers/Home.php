<?php

class Home extends Controller {
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
		$data['title'] = 'Halaman Home';

		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('templates/navbar', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
}