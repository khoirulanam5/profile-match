<?php

class Jenis_kriteria extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('jenis_model');
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['title'] = 'Jenis Kriteria';
		$data['jenis'] = $this->jenis_model->get();
		$data['current_user'] = $this->auth_model->current_user();

		$this->load->view('admin/jenis_list.php', $data);
	}

	public function edit($id = null)
	{
		$data['title'] = 'Edit Jenis Kriteria';
		$data['jenis'] = $this->jenis_model->find($id);

		if (!$data['jenis'] || !$id) {
			show_404();
		}

		if ($this->input->method() === 'post') {
			
			$nilai_factor = $this->input->post('nilai_factor');
			$validasi = $this->jenis_model->validasi($id);
			if (($validasi->nilai_factor + $nilai_factor) > 100) {
				$this->session->set_flashdata('message', 'Total kriteria melebihi 100%');
				$this->session->set_flashdata('type', 'error');
				redirect('admin/jenis_kriteria');
			}

			$jenis = [
				'id' => $id,
				'jenis' => $this->input->post('jenis'),
				'nilai_factor' => $nilai_factor,
			];
			$updated = $this->jenis_model->update($jenis);
			if ($updated) {
				$this->session->set_flashdata('message', 'Jenis Kriteria berhasil diupdate');
				$this->session->set_flashdata('type', 'success');
			} else {
				$this->session->set_flashdata('message', 'Jenis Kriteria gagal diupdate');
				$this->session->set_flashdata('type', 'error');
			}
			redirect('admin/jenis_kriteria');
		}

		$this->load->view('admin/jenis_edit_form.php', $data);
	}

}
