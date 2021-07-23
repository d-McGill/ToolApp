<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('results_model');

	}
	public function index(){

		$data['results'] = $this->results_model->findResults();
		$data['main_view'] = 'results';
		$this->load->view('template', $data);
	}

	public function toolView(){
		$data['results'] = $this->results_model->toolInfo();
		$data['main_view'] = 'tool';
		$this->load->view('template', $data);
	}


	public function addToolView(){
		$data['main_view'] = 'addTool';
		$this->load->view('template', $data);
	}

	public function updateTool(){
		$this->results_model->updatedTool();
		$this->session->set_flashdata('message','Tool Details Updated');
		redirect('dashboard');

	}

	public function changeStat(){
		$this->results_model->markTool();
		$this->session->set_flashdata('message','tool STAUST CHANGE');
		redirect('dashboard');

	}

	public function byeTool(){
		$this->results_model->deleteTool();
		$this->session->set_flashdata('message','Tool Deteted');
		redirect('dashboard');

	}

	public function addTool(){
		$this->results_model->insetTool();
		$this->session->set_flashdata('message','Tool Added');
		redirect('dashboard');

	}




}
