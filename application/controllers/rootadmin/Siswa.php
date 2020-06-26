<?php defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'siswa';
		$data['title2'] = 'siswa list';
		$data['layout'] = 'siswa/list_siswa';
		$this->load->view('layout', $data);
	}
	
	public function add()
	{
		if ($this->input->post('submit')) {

			$this->validation('add');
		} else {
			$data['title'] = 'Siswa';
			// $data['satuan'] = get_satuan();
			$data['page'] = 'add';
			$data['layout'] = 'siswa/form_siswa';
			$this->load->view('layout', $data);
		}
	}

	public function laporan()
	{

		$data['title'] = 'siswa';
		$data['title2'] = 'siswa laporan';

		$data['layout'] = 'siswa/laporan_siswa';
		$this->load->view('layout', $data);
	}

	public function filter_laporan()
	{

		if ($this->input->post('submit')) {

			$start = $this->input->post('start');
			$to = $this->input->post('end');

			$data['list_laporan'] = $this->siswa_model->list_laporan($start, $to);

			$data['title'] = 'siswa';

			$data['title2'] = 'siswa laporan';

			$data['layout'] = 'siswa/laporan_siswa';
			$this->load->view('layout', $data);
		}
	}


}
