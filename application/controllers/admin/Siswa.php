<?php
date_default_timezone_set('Asia/Jakarta');

class Siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model');
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['title'] = 'Siswa';
		$data['siswa'] = $this->siswa_model->get();
		$data['current_user'] = $this->auth_model->current_user();

		$this->load->view('admin/siswa_list.php', $data);
	}

	public function new()
	{
		if ($this->input->method() === 'post') {
			// TODO: Lakukan validasi sebelum menyimpan ke model

			$siswa = [
				'nama' => $this->input->post('nama'),
			];

			$saved = $this->siswa_model->insert($siswa);

			if ($saved) {
				$this->session->set_flashdata('message', 'Siswa was created');
				return redirect('admin/siswa');
			}
		}

		$this->load->view('admin/siswa_new_form.php');
	}

	public function edit($id = null)
	{
		$data['title'] = 'Edit Siswa';
		$data['siswa'] = $this->siswa_model->find($id);

		if (!$data['siswa'] || !$id) {
			show_404();
		}

		if ($this->input->method() === 'post') {
			// TODO: lakukan validasi data seblum simpan ke model
			$siswa = [
				'id' => $id,
				'nama' => $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'alamat' => $this->input->post('alamat'),
				'nama_wali' => $this->input->post('nama_wali'),
				'telepon' => $this->input->post('telepon'),
				'kelas' => $this->input->post('kelas'),
				'tahun_daftar' => $this->input->post('tahun_daftar'),
				
			];

			if ($this->input->post('pass')){
				$siswa['password']=md5($this->input->post('pass'));
			}

			$updated = $this->siswa_model->update($siswa);
			if ($updated) {
				$this->session->set_flashdata('message', 'Siswa was updated');
				redirect('admin/siswa');
			}
		}

		$this->load->view('admin/siswa_edit_form.php', $data);
	}

	public function delete($id = null)
	{
		if (!$id) {
			show_404();
		}

		$deleted = $this->siswa_model->delete($id);
		if ($deleted) {
			$this->session->set_flashdata('message', 'Siswa was deleted');
			redirect('admin/siswa');
		}
	}

	public function verifikasi($id = null)
	{
		if (!$id) {
			show_404();
		}

		$siswa = [
			'id' => $id,
			'verifikasi' => 1,
			'tgl_verifikasi' => date('Y-m-d H:i:s')
		];

		$updated = $this->siswa_model->update($siswa);
		if ($updated) {
			$this->session->set_flashdata('message', 'Verifikasi Berhasil');
			redirect('admin/siswa');
		}
	}
}
