<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdfs extends CI_Controller {


	public function index(){

		$this->load->library('Pdf');
		$this->load->view('makepdf');
	}
	
};
?>
