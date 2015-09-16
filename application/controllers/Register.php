<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Register extends CI_Controller{

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
    if(($this->session->userdata('user_id')!=""))
    {
      $this->welcome();
    }
    else
    {
      $this->load->view("login");

    }
  }
  public function register()
  {
    if(($this->session->userdata('user_id')!=""))
    {
      $this->welcome();
    }
    else
    {   
      $this->load->view("signup"); 
      $this->load->view("preload");
    }
  }
  public function welcome()
  {
    if(($this->session->userdata('user_id')!=""))
    {     
      $this->dashboard();
    }
    else 
    {
      $this->load->view("login");
    }
  }
  public function login()
  {

    $this->form_validation->set_rules('username', 'Your Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|max_length[32]');
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));

    $result=$this->register_model->login($username,$password);
    if($result)
    { 
      $query = $this->db->get_where('users', array('username' => $username));
      $userdata = $query->row();
      $newdata = array(
       'user_id' => $userdata->idUsers,
       'username' => $userdata->username,
       'logged_in' => TRUE
       );

      $this->session->set_userdata($newdata);
      $this->welcome();
    }
    else
      $this->welcome();
  }
  public function lock()
  {
    $username = $this->session->userdata('username');
    $data['me'] = $this->user_model->get_user($this->session->userdata('user_id'));
    $password=md5($this->input->post('password'));
    $this->load->view('lock',$data);
    $this->load->view('preload');
    $result=$this->register_model->login($username,$password);
    if($result)
    { 
      $query = $this->db->get_where('users', array('username' => $username));
      $userdata = $query->row();
      $newdata = array(
       'user_id' => $userdata->idUsers,
       'username' => $userdata->username,
       'logged_in' => TRUE
       );

      $this->session->set_userdata($newdata);
      redirect($this->dashboard());
    }
  }
  public function thank()
  {
    $this->login();
  }
  public function registration()
  {
    $this->form_validation->set_rules('username', 'Your Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|max_length[32]');
    $this->form_validation->set_rules('position', 'Position', 'required');
    $this->form_validation->set_rules('name', 'Name', 'required');
    if($this->form_validation->run() == FALSE)
    {
     $this->register();
    }
    else
    {
      $data['username'] = $this->input->post('username');
      $data['password'] = md5($this->input->post('password'));
      $data['name'] = $this->input->post('name');
      $data['position'] = $this->input->post('position');
      $this->user_model->add_user($data);
      $this->logout();
    }
}
public function logout()
{
  $newdata = array(
    'user_id'   =>'',
    'logged_in' => FALSE,
    );
  $this->session->unset_userdata($newdata);
  $this->session->sess_destroy();
  redirect('Register');
}
public function dashboard()
{
  
  redirect('Jobs','refresh');
}
}

