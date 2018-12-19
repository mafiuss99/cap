<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function menu()
	{
		$this->load->view('administracao/template/header');
		$this->load->view('administracao/template/nav');
		$this->load->view('administracao/menu-principal');
		$this->load->view('administracao/template/footer');
	}

	public function index()
	{
		$this->load->view('administracao/template/header_home');
		$this->load->view('administracao/login');
		$this->load->view('administracao/template/footer_home');
	}

}