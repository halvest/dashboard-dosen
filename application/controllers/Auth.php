<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		$this->load->view('auth/login');
        $this->load->view('templates/head');
        $this->load->view('templates/footer');
	}
    
    public function register()
	{
		$this->load->view('auth/register');
        $this->load->view('templates/head');
        $this->load->view('templates/footer');
	}
}
