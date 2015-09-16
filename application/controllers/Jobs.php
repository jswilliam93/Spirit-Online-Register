<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Register_model');
		$this->load->model('user_model');
		$this->load->model('job_model');
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['me'] = $this->user_model->get_user($this->session->userdata('user_id'));
		$this->load->view('sidebar',$data);
		$this->load->view('header',$data);
		if($this->isManager($this->session->userdata('user_id')))
		{
			$data['jobs'] = $this->job_model->get_all_due_admin();
			$this->load->view('due_admin',$data);
		}
		else
		{	
			$data['jobs'] = $this->job_model->get_all_due($this->session->userdata('user_id'));
			$this->load->view('due',$data);
		}

		$this->load->view('footer');
		$this->load->view('quickview');
		$this->load->view('search');
		$this->load->view('preload');
	}
	public function add_job()
	{
		$this->form_validation->set_rules('company', 'Client', 'required');
		$this->form_validation->set_rules('startDate', 'Start Date', 'required');
		$this->form_validation->set_rules('designer', 'Designer', 'required');
		$this->form_validation->set_rules('addedBy', 'Manager', 'required');
		if($this->form_validation->run() == FALSE)
		{
			$data['me'] = $this->user_model->get_user($this->session->userdata('user_id'));
			$this->load->view('sidebar',$data);
			$this->load->view('header',$data);

			$data['designer'] = $this->user_model->get_all_designers();
			$data['Manager'] = $this->user_model->get_all_managers();
			$this->load->view('add_job',$data);

			$this->load->view('footer');
			$this->load->view('quickview');
			$this->load->view('search');
			$this->load->view('preload');
		}
		else
		{
			$data['title'] = $this->input->post('title');
			$data['company'] = $this->input->post('company');
			$data['companyEmail'] = $this->input->post('companyEmail');
			$data['startDate'] = $this->input->post('startDate');
			$data['endDate'] = $this->input->post('endDate');
			$data['designer'] = $this->input->post('designer');
			$data['description'] = $this->input->post('description');
			$data['ctp'] = $this->input->post('ctp');
			$data['design'] = $this->input->post('design');
			$data['digital'] = $this->input->post('digital');
			$data['separation'] = $this->input->post('separation');
			$data['addedBy'] = $this->input->post('addedBy');
			$this->job_model->add_job($data);
			$this->index();
		}
	}
	public function done()
	{
		$data['me'] = $this->user_model->get_user($this->session->userdata('user_id'));
		$this->load->view('sidebar',$data);
		$this->load->view('header',$data);

		if($this->isManager($this->session->userdata('user_id')))
		{
			$data['jobs'] = $this->job_model->get_all_done_admin();
			$this->load->view('done_admin',$data);
		}
		else
		{
			$data['jobs'] = $this->job_model->get_all_done($this->session->userdata('user_id'));
			$this->load->view('done',$data);
		}

		$this->load->view('footer');
		$this->load->view('quickview');
		$this->load->view('search');
		$this->load->view('preload');
	}
	public function onHold()
	{
		$data['me'] = $this->user_model->get_user($this->session->userdata('user_id'));
		$this->load->view('sidebar',$data);
		$this->load->view('header',$data);

		if($this->isManager($this->session->userdata('user_id')))
		{
			$data['jobs'] = $this->job_model->get_all_hold_admin();
			$this->load->view('hold_admin',$data);
		}
		else
		{
			$data['jobs'] = $this->job_model->get_all_hold($this->session->userdata('user_id'));
			$this->load->view('hold',$data);
		}

		$this->load->view('footer');
		$this->load->view('quickview');
		$this->load->view('search');
		$this->load->view('preload');
	}

	public function isManager($id)
	{
		return $this->user_model->isManager($id);
	}
	public function mark_done($id)
	{
		$data['done'] = '1';
		$this->job_model->done($id,$data);
		$this->index();
	}
	public function unDone($id)
	{
		$data['done'] = '';
		$this->job_model->done($id,$data);
		$this->index();
	}
	public function hold($id)
	{
		$data['hold'] = '1';
		$this->job_model->hold($id,$data);
		$this->index();
	}
	public function unHold($id)
	{
		$data['hold'] = '';
		$this->job_model->hold($id,$data);
		$this->index();
	}
	public function delete($id)
	{
		$data['deleted'] = '1';
		$this->job_model->delete($id,$data);
		$this->index();
	}

}

/* End of file Jobs.php */
/* Location: ./application/controllers/Jobs.php */
