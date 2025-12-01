<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gap extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model([
			'gap_model', 'auth_model'
		]);
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}

		if ($this->session->userdata('level') != 1) {
			show_404();
		}
	}

	public function index()
	{
		$data['title'] = 'GAP';
		$data['gap'] = $this->gap_model->get();

		$this->load->view('admin/gap.php', $data);
	}

	public function edit($id = null)
	{
		$data['title'] = 'Edit GAP';
		$data['gap'] = $this->gap_model->find_id($id);

		if (!$data['gap'] || !$id) {
			show_404();
		}

		if ($this->input->method() === 'post') {
			
			$gap = [
				'id' => $id,
				'gap' => $this->input->post('gap'),
				'bobot' => $this->input->post('bobot'),
				'keterangan' => $this->input->post('keterangan'),
				
			];
			$updated = $this->gap_model->update($gap);
			if ($updated) {
				$this->session->set_flashdata('message', 'GAP berhasil diupdate');
				$this->session->set_flashdata('type', 'success');
			} else {
				$this->session->set_flashdata('message', 'GAP gagal diupdate');
				$this->session->set_flashdata('type', 'error');
			}
			redirect('admin/gap');
		}

		$this->load->view('admin/gap_edit_form.php', $data);
	}
}