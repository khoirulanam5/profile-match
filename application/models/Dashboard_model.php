<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
	function count_k()
	{
		$this->db->select('*');
		$this->db->from('kriteria');

		return $this->db->get()->num_rows();
	}

	function count_sk()
	{
		$this->db->select('*');
		$this->db->from('sub_kriteria');

		return $this->db->get()->num_rows();
	}

	function count_s()
	{
		$this->db->select('*');
		$this->db->from('siswa');

		return $this->db->get()->num_rows();
	}

	function count_p()
	{
		$this->db->select('*');
		$this->db->from('penilaian');
		$this->db->group_by('id_siswa');

		return $this->db->get()->num_rows();
	}
}
