<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Officials extends CI_Controller {


	public function __construct(){
        parent:: __construct();
		$this->load->model('Officials_model');
       
    }
	public function index(){

        // $data['title'] = "BRGY. OFFICIALS";
		$data['result'] = $this->Officials_model->getAllOfficialData();
		$this->load->view('Official/officials', $data);
	}
	public function createOfficials(){ #CREATING DATA TO VIEWLIST

        $this->Officials_model->createOfficial(); 
        redirect("Officials");
    }

    public function editOfficial($id){ #EDITING DATA
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['setrows'] = $this->Officials_model->getOfficialData($id);
        $this->load->view('official/editOfficial', $data);
    }

    public function updateOfficials($id){ #UPDATING DATA
       
        $this->Officials_model->updateOfficialData($id);
        redirect("Officials");
    }
    public function deleteOfficial($id){ #DELETING DATA
        $this->Officials_model->deleteOfficialData($id);
        redirect('officials');
    } 

 


}
