<?php

class Range extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model([
			'auth_model',
			'range_model'
		]);
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data = [
			'setting' => $this->range_model->find()
		];
		$data['title'] = 'Durasi Daftar';

		if ($this->input->method() === 'post') {
			$data = [
				'id' => $this->input->post('id', TRUE),
				'tgl_mulai' => $this->input->post('tgl_mulai', TRUE),
				'tgl_selesai' => $this->input->post('tgl_selesai', TRUE)
			];

			$updated = $this->range_model->update($data);
			if ($updated) {
				$this->session->set_flashdata('message', 'Setting was updated');
				redirect('admin/range');
			}
		}

		$this->load->view('admin/range', $data);
	}
}
