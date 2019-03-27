<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('main/index');
	}
	public function signup()
	{
		$this->load->view('pages/signup');
	}
	public function signin()
	{
		$this->load->view('pages/signin');
	}
}
