<?php

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['auth_model', 'siswa_model']);
		if($this->auth_model->current_user()){
			redirect('admin');
		} 
			
		if ($this->siswa_model->find($this->session->userdata('user_id'))) {
			redirect('admin/siswaDashboard');
		}
	}

	public function login()
	{
		$this->load->library('form_validation');

		$rules = $this->auth_model->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('login_form');
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->auth_model->login($username, $password)){
			redirect('admin');
		} else {
			$findUser = $this->siswa_model->get(['nis' => $username]);

			if (! $findUser) {
				$this->session->set_flashdata('message_login_error', 'User tidak ditemukan');
				return $this->load->view('login_form');
			}

			$isverifikasi = $this->siswa_model->get(['nis' => $username, 'verifikasi' => 1]);

			if (! $isverifikasi) {
				$this->session->set_flashdata('message_login_error', 'User belum diverifikasi!');
				return $this->load->view('login_form');
			}

			$siswa = $this->siswa_model->login($username, $password);

			if (! $siswa) {
				$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan password benar!');
				return $this->load->view('login_form');
			}

			redirect('admin/SiswaDashboard');
		}

		$this->load->view('login_form');
	}

	public function daftar()
	{
		$this->load->library('form_validation');
		if ($this->input->method() === 'post') {
			$this->load->model('siswa_model');

			$nis = $this->input->post('nis', TRUE);
			$nama = $this->input->post('nama', TRUE);
			$jenis_kelamin = $this->input->post('jenis_kelamin', TRUE);
			$alamat = $this->input->post('alamat', TRUE);
			$nama_wali = $this->input->post('nama_wali', TRUE);
			$telepon = $this->input->post('telepon', TRUE);
			$kelas = $this->input->post('kelas', TRUE);
			$tahun_daftar = $this->input->post('tahun_daftar', TRUE);
			$password = $this->input->post('password', TRUE);
			$repassword = $this->input->post('repassword', TRUE);

			$this->form_validation->set_rules('nis', 'NIS', 'required|is_unique[siswa.nis]', ['required' => 'Masukkan NIS', 'is_unique' => 'NIS sudah terdaftar']);
			$this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|is_unique[siswa.nama]', ['required' => 'Masukkan Nama Lengkap', 'is_unique' => 'Nama sudah terdaftar']);
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Pilih Jenis Kelamin']);
			$this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Masukkan Alamat']);
			$this->form_validation->set_rules('nama_wali', 'Nama Wali', 'required', ['required' => 'Masukkan Nama Wali']);
			$this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric', ['required' => 'Masukkan Nomor Telepon', 'numeric' => 'Nomor Telepon Harus Angka']);
			$this->form_validation->set_rules('kelas', 'Kelas', 'required', ['required' => 'Pilih Kelas']);
			$this->form_validation->set_rules('tahun_daftar', 'Tahun Daftar', 'required', ['required' => 'Masukkan Tahun Daftar']);
			$this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Masukkan Password']);
			$this->form_validation->set_rules('repassword', 'Ketik Ulang Password', 'required|matches[password]', ['required' => 'Ketik Ulang Password', 'matches' => 'Password tidak Cocok']);

			if($this->form_validation->run() == FALSE){
				$this->session->set_flashdata('message_register_error', validation_errors());
				return $this->load->view('register_form');
			}

			date_default_timezone_set('Asia/Jakarta');
			$isvalid = $this->db->where('tgl_mulai <=', date('Y-m-d'))->where('tgl_selesai >=', date('Y-m-d'))->get('range')->row();
			if (!$isvalid) {
				$this->session->set_flashdata('message_register_error', 'Pendaftaran sudah di tutup');
				return $this->load->view('register_form');
			}

			$simpan = $this->siswa_model->insert([
				'nis' => $nis,
				'nama' => $nama,
				'jenis_kelamin' => $jenis_kelamin,
				'alamat' => $alamat,
				'nama_wali' => $nama_wali,
				'telepon' => $telepon,
				'kelas' => $kelas,
				'tahun_daftar' => $tahun_daftar,
				'password' => $password
			]);

			if (! $simpan) {
				$this->session->set_flashdata('message_register_error', 'Pendaftaran Gagal');
				return $this->load->view('register_form');
			}

			$this->session->set_flashdata('message_register_success', 'Pendaftaran Berhasil');
			return $this->load->view('register_form');
		}

		$this->load->view('register_form');
	}
}
