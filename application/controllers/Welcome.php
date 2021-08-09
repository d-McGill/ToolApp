<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('results_model');

	}
	public function index(){
		$this->load->view('index');
	}

	public function dash(){
	$data['r']=$this->results_model->toolDates();
	if($this->session->userdata('login')){
		$data['main_view'] = 'dashboard';
		$this->load->view('template', $data);

	} else{
			redirect('');
		}
	}

	public function verify(){
		$check=$this->login_model->verify();
		if($check){
			$userId =$this->login_model->getUserId();
			$email = $this->input->post('email');
			$arraydata = array(
						'userID'  => $userId,
						'username'  => $email,
						'login'     => TRUE);
			$this->session->set_userdata($arraydata);

						redirect('dashboard');}

				else{
					$this->session->set_flashdata('message',' Invalid email or password');
					redirect('');
				}

					}

	function logout(){
		$this->session->sess_destroy();
		redirect('');
	}



function services(){
	$data['r']=$this->results_model->toolDates();
	$data['main_view'] = 'services';
	$this->load->view('template', $data);
}



}
