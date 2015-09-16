<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function onHold($id)
	{
		$this->db->where("idJobs",$id);
		$this->db->where("hold",'1');
		if($this->db->get("jobs")->num_rows()>0)
			return true;
		else
			return false;

	}
	public function get_all_due($id)
	{
		$this->db->where("designer",$id);
		$this->db->where("done",'0');
		$this->db->where("deleted",'0');
		$this->db->where("hold",'0');
		return $this->db->get("jobs")->result();
	}
	public function get_all_due_admin()
	{
		return $this->db->query("select * from jobs j, users u where j.designer = u.idUsers and j.done='0' and j.deleted='0' and j.hold = '0'")->result();
		/*$this->db->where("done",'0');
		$this->db->where("deleted",'0');
		return $this->db->get("jobs")->result();*/
	}
	public function get_all_done($id)
	{
		$this->db->where("designer",$id);
		$this->db->where("done",'1');
		$this->db->where("deleted",'0');
		return $this->db->get("jobs")->result();
	}
	public function get_all_done_admin()
	{
		return $this->db->query("select * from jobs j, users u where j.designer = u.idUsers and j.done='1' and j.deleted='0'")->result();
		/*$this->db->where("done",'1');
		$this->db->where("deleted",'0');
		return $this->db->get("jobs")->result();*/
	}
	public function get_all_hold($id)
	{
		$this->db->where("designer",$id);
		$this->db->where("hold",'1');
		$this->db->where("deleted",'0');
		return $this->db->get("jobs")->result();
	}
	public function get_all_hold_admin()
	{
		return $this->db->query("select * from jobs j, users u where j.designer = u.idUsers and j.hold='1' and j.deleted='0'")->result();
		/*$this->db->where("done",'1');
		$this->db->where("deleted",'0');
		return $this->db->get("jobs")->result();*/
	}
	public function add_job($data)
	{
		$this->db->insert("jobs",$data);
	}
	public function done($id,$data)
	{
		$this->db->where('idJobs',$id);
		$this->db->update('jobs',$data);
	}
	public function hold($id,$data)
	{
		$this->db->where('idJobs',$id);
		$this->db->update('jobs',$data);
	}
	public function delete($id,$data)
	{
		$this->db->where('idJobs',$id);
		$this->db->update('jobs',$data);
	}

}

/* End of file job_model.php */
/* Location: ./application/models/job_model.php */
