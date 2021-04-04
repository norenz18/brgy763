<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificate extends CI_Controller {


	public function __construct(){
        parent:: __construct();

        $this->load->model('Certs_model');
       
    }
	public function index(){

        $data['result'] = $this->Certs_model->getAllCertsData();
        $this->load->view('certificates/permitsAndCertificates', $data);

	}
    public function createCert(){

        $this->Certs_model->createCerts();
        redirect("Certificate");

    }
    public function edit($id){ #EDITING DATA
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['setrows'] = $this->Certs_model->getCertsData($id);
        $this->load->view('certificates/editPdf', $data);
    }
    public function updateCerts($id){ #UPDATING DATA
       
        $this->Certs_model->updateCertsData($id);
        redirect("Certificate");
    }

    public function indigencyPdf($id){ #SHOW INDIVIDUAL DATA
        $data['setrows'] = $this->Certs_model->getCertsData($id);
        $this->load->view('certificates/indigencyPdf', $data);
    }
    public function clearancePdf($id){ #SHOW INDIVIDUAL DATA
        $data['setrows'] = $this->Certs_model->getCertsData($id);
        $this->load->view('certificates/clearancePdf', $data);
    }
    public function businessPdf($id){ #SHOW INDIVIDUAL DATA
        $data['setrows'] = $this->Certs_model->getCertsData($id);
        $this->load->view('certificates/businessPdf', $data);
    }


    public function CreateCertPdf($id)
    {
        $live_mpdf = new \Mpdf\Mpdf();
        $data['setrows'] = $this->Certs_model->getCertsData($id);
        $all_html = $this->load->view('certificates/indigencyPdf',$data,true); //CodeIgniter view file name
        $live_mpdf->WriteHTML($all_html);
        $live_mpdf->Output(); // simple run and opens in browser
        // $live_mpdf->Output('pakainfo_details.pdf','D'); // it CodeIgniter downloads the file into the main dynamic system, with give your file name
       
    }
    public function CreateCertPdfs($id)
    {
        $live_mpdf = new \Mpdf\Mpdf();
        $data['setrows'] = $this->Certs_model->getCertsData($id);
        $all_html = $this->load->view('certificates/clearancePdf',$data,true); //CodeIgniter view file name
        $live_mpdf->WriteHTML($all_html);
        $live_mpdf->Output(); // simple run and opens in browser
        // $live_mpdf->Output('pakainfo_details.pdf','D'); // it CodeIgniter downloads the file into the main dynamic system, with give your file name
       
    }
    public function CreateCertPdfPermit($id)
    {
        $live_mpdf = new \Mpdf\Mpdf();
        $data['setrows'] = $this->Certs_model->getCertsData($id);
        $all_html = $this->load->view('certificates/businessPdf',$data,true); //CodeIgniter view file name
        $live_mpdf->WriteHTML($all_html);
        $live_mpdf->Output(); // simple run and opens in browser
        // $live_mpdf->Output('pakainfo_details.pdf','D'); // it CodeIgniter downloads the file into the main dynamic system, with give your file name
       
    }



    

    // public function create(){ #CREATING DATA TO VIEWLIST

    //     $this->Certificate_model->createCertificate(); 
    //     redirect("Certificate/indigencyPdf");
    //     // $this->load->view("indgency");
    // }
    // public function view(){

    //         $this->load->view('certificates/indigencyPdf');
    // }
    // public function indigencyPdf(){ #SHOW INDIVIDUAL DATA

    //     $data['row'] = $this->Certs_model->createCertificate($id);
    //     $this->load->view('indigencyPdf', $data);
    // }
	// public function createPdf($id)
    // {
    //     $live_mpdf = new \Mpdf\Mpdf();
    //     $data['row'] = $this->Certificate_model->getCertificateData($id);
    //     $all_html = $this->load->view('indigencyPdf',$data,true); //CodeIgniter view file name
    //     $live_mpdf->WriteHTML($all_html);
    //     $live_mpdf->Output(); // simple run and opens in browser
    //     // $live_mpdf->Output('pakainfo_details.pdf','D'); // it CodeIgniter downloads the file into the main dynamic system, with give your file name
       
    // }

}
