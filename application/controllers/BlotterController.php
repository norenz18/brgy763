<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlotterController extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model('Blotter_model');
    }
    
	public function index(){ #DASHBOARD
        
  
        $data['result'] = $this->Blotter_model->getAllBlotterData();
        $this->load->view('blotter/blotter', $data);
  
    }
    
    public function createBlotters(){ #CREATING DATA TO VIEWLIST

        $this->Blotter_model->createBlotter(); 
        redirect("BlotterController");
    }

    public function editBlotter($id){ #EDITING DATA
        
        $data['setrows'] = $this->Blotter_model->getBlotterData($id);
        $this->load->view('crudEdit', $data);
    }

    public function updateBlotter($id){ #UPDATING DATA
       
        $this->Blotter_model->updateBlotterData($id);
        redirect("BlotterController");
    }

    public function deleteBlotter($id){ #DELETING DATA
        $this->Blotter_model->deletBlotterData($id);
        redirect('BlotterController');
    } 
    // public function readBlotter($id){ #SHOW INDIVIDUAL DATA
    //     $data['rows'] = $this->Blotter_model->getBlotterData($id);
    //     $this->load->view('crudRead', $data);
    // }
    public function blotterList(){ #SHOWING THE LIST

        $data['result'] = $this->Blotter_model->getAllBlotterData();
        $this->load->view('BlotterController',$data);
  
    }

}
