<?php defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$data['title'] = 'dashboard';
		$data['layout'] = 'dashboard';
		$this->load->view('layout', $data);
	}
}
