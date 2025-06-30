<?php

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['auth_model', 'siswa_model', 'Dashboard_model']);
		if (!$this->auth_model->current_user()) {
			if ($this->siswa_model->find($this->session->userdata('user_id'))) {
				redirect('admin/siswaDashboard');
			}

			redirect('auth/login');
		}
	}

	public function index()
	{
		$data = [];

		$data['title'] = 'Dashboard';
		$data['total_k'] = $this->Dashboard_model->count_k();
		$data['total_sk'] = $this->Dashboard_model->count_sk();
		$data['total_s'] = $this->Dashboard_model->count_s();
		$data['total_n'] = $this->Dashboard_model->count_p();

		$this->load->view('admin/dashboard.php', $data);
	}
}
