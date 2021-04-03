<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blotter extends CI_Controller {

    public function __construct(){
        parent:: __construct();
    
        $this->load->model('Blotter_model');
    }
    
	public function index(){ #DASHBOARD
        
  
        $data['result'] = $this->Blotter_model->getAllBlotterData();
        $this->load->view('blotters/blotter', $data);
  
    }
    
    public function createBlotters(){ #CREATING DATA TO VIEWLIST

        $this->Blotter_model->createBlotter(); 
        redirect("Blotter");
    }

    public function edit($id){ #EDITING DATA
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['setrows'] = $this->Blotter_model->getBlotterData($id);
        $this->load->view('blotters/edit', $data);
    }

    public function updateBlotter($id){ #UPDATING DATA
       
        $this->Blotter_model->updateBlotterData($id);
        redirect("Blotter");
    }

    
    public function generatepdf(){ #SHOW INDIVIDUAL DATA
       
        $this->load->view('blotters/generatepdf');
    }

    // public function deleteBlotter($id){ #DELETING DATA
    //     $this->Blotter_model->deleteBlotterData($id);
    //     redirect('BlotterController');
    // } 
    // public function readBlotter($id){ #SHOW INDIVIDUAL DATA
    //     $data['rows'] = $this->Blotter_model->getBlotterData($id);
    //     $this->load->view('crudRead', $data);
    // }
    // public function blotterList(){ #SHOWING THE LIST

    //     $data['result'] = $this->Blotter_model->getAllBlotterData();
    //     $this->load->view('BlotterController',$data);
  
    // }


}
