<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	public function index(){
        
		$data['title'] = 'Welcome to Brgy. 763 Zone 83 District V, Manila';
		$this->load->view('users/register', $data);
	}
	public function register(){

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Confirm Password2', 'matches[password]');

		if($this->form_validation->run() === FALSE){

			$this->load->view('includes/header');
			$this->load->view('users/register');
			$this->load->view('includes/footer');
		}else{
			// encrypting password
			$enc_password = md5($this->input->post('password'));
			$this->user_model->register($enc_password);
		
			// Setting flash message
			$this->session->set_flashdata('user_registered', 'You are now Registered and Proceed to Log in');
			redirect('users/register');

		}
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
