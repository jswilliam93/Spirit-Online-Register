<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('register_model');
		$this->load->model('user_model');
		$this->load->model('job_model');
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	public function index()
	{
		
	}
	public function get_name($id)
	{
		return $this->user_model->get_name($id);
	}
	public function add_employee()
	{
		$this->form_validation->set_rules('username', 'Your Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('position', 'Position', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view("signup"); 
			$this->load->view("preload");
		}
		else
		{
			$data['username'] = $this->input->post('username');
			$data['password'] = md5($this->input->post('password'));
			$data['name'] = $this->input->post('name');
			$data['position'] = $this->input->post('position');
			$this->user_model->add_user($data);
			$this->index();
		}
	}

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */