<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	public function index(){
        
		// $data['title'] = 'Welcome to Brgy. 763 Zone 83 District V, Manila';
		$this->load->view('users/login');
	}
	public function login(){
     

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE){
			$this->load->view('users/login');
		}else{


			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$user_id = $this->user_model->login($username, $password);

			if($user_id){
                //create session
                $this->session->set_flashdata('user_loggedin', 'You are logged In');
                redirect('CrudController');
				// die('SUCCESS');
			// 	//set message
			// 
			

			}else{
				//set message
			$this->session->set_flashdata('login_failed', 'Login Invalid');
			redirect('Users');

			}

			
		}

	}

	

}
