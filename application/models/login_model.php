<?php defined('BASEPATH') OR exit('No direct script access allowed');

//------------------------------------------------------------------
// Verifys Users - Inserts Users - Gets Session ID
//------------------------------------------------------------------

class login_model extends CI_Model{

  public function __construct()
{
    parent::__construct();
}

  public function verify(){
    $data['email'] = $this->input->post('email');
    $data['password'] = $this->input->post('password');
    return $this->db->get_where('users' , $data)->row();
  }

  public function getUserId(){
    $email = $this->input->post('email');
    $this->db->select('GUID');
    $this->db->from('users');
    $this->db->where('email',  $email);
    $query=$this->db->get()->row()->GUID;
    return $query;
  }

  public function signUp(){
    $username = $this->input->post('username');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $data = array(
      'username'=>$username,
      'email'=>$email,
      'password'=>$password);
    return $this->db->insert('users',$data);
    }

} // End of CI_Model
