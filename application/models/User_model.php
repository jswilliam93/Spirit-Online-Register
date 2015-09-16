<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  User_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function add_user($data)
	{
		$this->db->insert('users',$data);
	}
	public function get_user($id)
	{
		$this->db->where('idUsers',$id);
		return $this->db->get('users')->result();
	}
	public function get_name($id)
	{
		$this->db->where('idUsers',$id);
		return $this->db->get('users')->row->name;
	}
	public function get_all_designers()
	{
		$this->db->where('position','Graphics Designer');
		return $this->db->get('users')->result();

	}
	public function get_all_managers()
	{
		$this->db->where('position','Manager');
		return $this->db->get('users')->result();

	}
	public function isManager($id)
	{
		$this->db->where('position','Manager');
		$this->db->where('idUsers',$id);
		$q = $this->db->get('users');
		if($q->num_rows() > 0)
			return true;
		else
			return false;
	}

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */
