<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CertificateController extends CI_Controller {


	public function __construct(){
        parent:: __construct();

        $this->load->model('Certs_model');
       
    }
	public function index(){

        // $data['result'] = $this->Certs_model->getCertificateData();
        $this->load->view('certificates/permitsAndCertificates');

	}
    public function createCert(){

        $data['row'] = $this->Certs_model->getCertsData();
        // $this->load->view('certificates/indigencyPdf',$data);
        redirect("CertificateController", $data);

    }
    public function indigencySection(){

        $this->load->view('certificates/indigency');

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
