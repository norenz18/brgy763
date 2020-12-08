<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Officials extends CI_Controller {


	// public function __construct(){
    //     parent:: __construct();
       
    // }
	public function index(){

        $data['title'] = "BRGY OFFICIALS";
		$this->load->view('official/officials', $data);
	}
	

}
