<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gap_model extends CI_Model {

	private $_table = 'gap';

	public function get($condition = [])
	{
		if ($condition) {
			$this->db->where($condition);
		}

		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function count(){
		return $this->db->count_all($this->_table);
	}

	public function find($gap)
	{
		$query = $this->db->get_where($this->_table, array('gap' => $gap));
		return $query->row();
	}

	public function find_id($id)
	{
		if (!$id) {
			return;
		}

		$query = $this->db->get_where($this->_table, array('id' => $id));
		return $query->row();
	}

	public function update($gap)
	{
		if (!isset($gap['id'])) {
			return;
		}

		return $this->db->update($this->_table, $gap, ['id' => $gap['id']]);
	}
}

/* End of file Gap_model.php */
/* Location: ./application/models/Gap_model.php */
