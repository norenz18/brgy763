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

        
        $config['upload_path'] = './img';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5048';
        // $config['max_width'] = '1600';
        // $config['max_height'] = '1600';

        // $img = $_POST['userfile'];
        // $folderPath = "img";

        // $image_parts = explode(";base64,", $img);
        // $image_type_aux = explode("userfile/", $image_parts[0]);
        // $image_type = $image_type_aux[1];
      
        // $image_base64 = base64_decode($image_parts[1]);
        // $fileName = uniqid() . '.jpeg';
      
        // $file = $folderPath . $fileName;
        // file_put_contents($file, $image_base64);
      
        // print_r($fileName);


        $this->load->library('upload', $config);

        if(!$this->upload->do_upload()){

            $errors = array('error' => $this->upload->display_errors());
            $profImage = 'noimage.jpg';
        }else{

            $data = array('upload_data' => $this->upload->data());
            $profImage = $_FILES['userfile']['name'];
        }

        $this->Officials_model->createOfficial($profImage); 
        redirect("Officials");
    }

    public function editOfficial($id){ #EDITING DATA
        $this->load->helper('form');
        $this->load->library('form_validation');

        $config['upload_path'] = './img';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5048';

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload()){

            $errors = array('error' => $this->upload->display_errors());
            $profImage = 'noimage.jpg';
        }else{

            $data = array('upload_data' => $this->upload->data());
            $profImage = $_FILES['userfile']['name'];
        }
        
        $data['setrows'] = $this->Officials_model->getOfficialData($id);
        $this->load->view('official/editOfficial', $data);
    }

    public function updateOfficials($id){ #UPDATING DATA


        $config['upload_path'] = './img';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5048';

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload()){

            $errors = array('error' => $this->upload->display_errors());
            $profImage = 'noimage.jpg';
        }else{

            $data = array('upload_data' => $this->upload->data());
            $profImage = $_FILES['userfile']['name'];
        }
       
        $this->Officials_model->updateOfficialData($id,$profImage);
         $data['setrows'] = $this->Officials_model->getOfficialData($id);
         $this->load->view('official/officialInfo', $data);
       
        // redirect('Officials', $data);
    }
    public function deleteOfficial($id){ #DELETING DATA
        $this->Officials_model->deleteOfficialData($id);
        redirect('officials');
    } 
    public function read($id){ #SHOW INDIVIDUAL DATA
        $data['setrows'] = $this->Officials_model->getOfficialData($id);
        $this->load->view('official/officialInfo', $data);
       
    }
    public function BrgyOfficials(){ #SHOWING THE LIST

        $data['result'] = $this->Officials_model->getAllOfficialData();
        $this->load->view('official/officials',$data);
  
    }

 


}
