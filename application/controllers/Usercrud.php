<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usercrud extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('user_model');

	}

	public function index()
	{
		$data['content'] = 'usercrud/index';

		$this->load->view('template',$data);
	}

	public function save($id=0)
	{
		$data = $this->input->post();
		if ($id){
		
			$result = $this->user_model->update($id,$data);
		}else{

			$result = $this->user_model->save($data);
		}
		
		if ($result){

			redirect('usercrud/list');

		}else{

			redirect('usercrud/error');
		}
	}

	public function list()
	{
		$data['data'] 		= $this->user_model->get_all();
		$data['content'] 	= 'usercrud/list';

		$this->load->view('template',$data);
	
	}

	public function edit($id)
	{
		$data['data'] 	 = $this->user_model->get($id);
		$data['action']  = 'edit';
		$data['content'] = 'usercrud/index';

		$this->load->view('template',$data);
	}

	public function delete($id)
	{
		$result = $this->user_model->delete($id);
		if ($result){

			redirect('usercrud/list');

		}else{

			redirect('usercrud/error');
		}

	}

	
	public function error()
	{
		echo 'Error al procesar registro...';
	}
}
