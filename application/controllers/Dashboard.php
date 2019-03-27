<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index()
	{
		$this->load->view('pages/dashboard');
	}
	public function category()
	{
		$this->load->view('pages/category');
	}
	public function product()
	{
		$this->load->view('pages/product');
	}
}
