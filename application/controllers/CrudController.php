<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        $this->load->model('Crud_model');
    }
    
	public function index(){ #DASHBOARD
	
        $this->load->view('dashboard');
    }
    
    public function create(){ #CREATING DATA TO VIEWLIST

        // $config['upload_path'] = './asset/images';
        // $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = '2048';
        // $config['max_width'] = '500';
        // $config['max_height'] = '500';

        // $this->load->library('upload', $config);

        // if(!$this->upload->do_upload()){

        //     $errors = array('error' => $this->upload->display_errors());
        //     $profImage = 'noimage.jpg';
        // }else{

        //     $data = array('upload_data' => $this->upload->data());
        //     $profImage = $_FILES['userfile']['name'];
        // }

        $this->Crud_model->createData(); #$profImage
        redirect("CrudController/viewlist");
    }

    public function edit($id){ #EDITING DATA
        
        $data['row'] = $this->Crud_model->getData($id);
        $this->load->view('crudEdit', $data);
    }

    public function update($id){ #UPDATING DATA
       
        $this->Crud_model->updateData($id);
        redirect("CrudController/viewlist");
    }

    public function delete($id){ #DELETING DATA
        $this->Crud_model->deleteData($id);
        redirect('CrudController/viewlist');
    } 
    public function read($id){ #SHOW INDIVIDUAL DATA
        $data['row'] = $this->Crud_model->getData($id);
        $this->load->view('crudRead', $data);
    }
    public function viewlist(){ #SHOWING THE LIST

        $data['result'] = $this->Crud_model->getAllData();
        $this->load->view('crudView',$data);
  
    }

}
