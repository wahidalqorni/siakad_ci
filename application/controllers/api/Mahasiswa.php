<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Mahasiswa extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}

	public function index_get()
	{

		$id = $this->get('id');
		if($id === null) {
			$mahasiswa = $this->Mahasiswa_model->getMahasiswa();
		} else {
			$mahasiswa = $this->Mahasiswa_model->getMahasiswa($id);
		}

		if($mahasiswa) {
			$this->response([
				'status'	=> true,
				'message'	=> 'Data tersedia',
				'data'		=> $mahasiswa,
			], REST_Controller::HTTP_OK);
		} else {
			$this->response([
				'status'	=> false,
				'message'	=> 'Data tidak tersedia',
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}

	public function index_delete()
	{
		$id = $this->delete('id');

		if($id === null) {
			$this->response([
				'status'	=> false,
				'message'	=> 'Id harus diisi!',
			], REST_Controller::HTTP_BAD_REQUEST);
		} else {
			if($this->Mahasiswa_model->deleteMahasiswa($id) > 0) {
				$this->response([
					'status'	=> true,
					'message'	=> 'Data berhasil dihapus',
					'id'		=> $id,
				], REST_Controller::HTTP_OK);
			} else {
				$this->response([
					'status'	=> false,
					'message'	=> 'Id tidak ditemukan!',
				], REST_Controller::HTTP_BAD_REQUEST);
			}
		}
	}

	public function index_post()
	{
		$data = [
			'nrp' 		=> $this->post('nrp'),
			'nama' 		=> $this->post('nama'),
			'email' 	=> $this->post('email'),
			'jurusan' 	=> $this->post('jurusan'),
		];

		if($this->Mahasiswa_model->createMahasiswa($data) > 0) {
			$this->response([
				'status'	=> true,
				'message'	=> 'Simpan data berhasil',
			], REST_Controller::HTTP_CREATED);
		} else {
			$this->response([
				'status'	=> false,
				'message'	=> 'Gagal simpan data!',
			], REST_Controller::HTTP_BAD_REQUEST);
		}
	}

	public function index_put()
	{
		$id = $this->put('id');

		$data = [
			'nrp' 		=> $this->put('nrp'),
			'nama' 		=> $this->put('nama'),
			'email' 	=> $this->put('email'),
			'jurusan' 	=> $this->put('jurusan'),
		];

		if($this->Mahasiswa_model->updateMahasiswa($data, $id) > 0) {
			$this->response([
				'status'	=> true,
				'id'		=> $id,
				'message'	=> 'Update data berhasil',
			], REST_Controller::HTTP_OK);
		} else {
			$this->response([
				'status'	=> false,
				'message'	=> 'Gagal update data!',
			], REST_Controller::HTTP_BAD_REQUEST);
		}
	}

}