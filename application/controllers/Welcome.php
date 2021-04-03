<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct(){
        parent:: __construct();
       
    }
	public function index(){

		$data['title'] = 'Welcome to Brgy. 763 Zone 83 District V, Manila';
		$this->load->view('login', $data);
	}
	

}
