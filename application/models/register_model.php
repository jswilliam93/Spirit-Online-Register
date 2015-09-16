<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class register_model extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function login($username,$password)
  {
    $this->db->where("username",$username);
    $this->db->where("password",$password);
    $query=$this->db->get("users");
    if($query->num_rows()>0)
    {
     foreach($query->result() as $rows)
     {
      //add all data to session
      $newdata = array(
        'user_id'  => $rows->idUsers,
        'username'  => $rows->username,
        'logged_in'  => TRUE,
        );
    }
    $this->session->set_userdata($newdata);
    return true;
  }
  return false;
  }
  
}
