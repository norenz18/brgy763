<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Residents extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); //load database libray manually
        $this->load->model('Crud_model');
    }
    public function index()
    {
        $data['result'] = $this->Crud_model->getUserDetails();
        $data['result'] = $this->Crud_model->getUserSenior();
        $data['result'] = $this->Crud_model->getUserPwd();
        $data['result'] = $this->Crud_model->getUserSolo();
        $data['result'] = $this->Crud_model->getUserVoter();
        $this->load->view('Residents/viewlist', $data);
    }

    public function create()
    { #CREATING DATA TO VIEWLIST

        $config['upload_path'] = './img';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5048';


        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {

            $errors = array('error' => $this->upload->display_errors());
            $profImage = 'noimage.jpg';
        } else {

            $data = array('upload_data' => $this->upload->data());
            $profImage = $_FILES['userfile']['name'];
        }

        $this->Crud_model->createData($profImage);
        redirect("Residents/viewlist");
    }

    public function edit($id)
    { #EDITING DATA

        $config['upload_path'] = './img';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5048';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {

            $errors = array('error' => $this->upload->display_errors());
            $profImage = 'noimage.jpg';
        } else {

            $data = array('upload_data' => $this->upload->data());
            $profImage = $_FILES['userfile']['name'];
        }

        $data['row'] = $this->Crud_model->getData($id);
        $this->load->view('resident/residentEdit', $data);
    }

    public function update($id)
    { #UPDATING DATA

        $config['upload_path'] = './img';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5048';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {

            $errors = array('error' => $this->upload->display_errors());
            $profImage = 'noimage.jpg';
        } else {

            $data = array('upload_data' => $this->upload->data());
            $profImage = $_FILES['userfile']['name'];
        }

        $this->Crud_model->updateData($id, $profImage);
        $data['row'] = $this->Crud_model->getData($id);
        $this->load->view('resident/residentRead', $data);
    }

    public function delete($id)
    { #DELETING DATA
        $this->Crud_model->deleteData($id);
        redirect('Residents/viewlist');
    }
    public function read($id)
    { #SHOW INDIVIDUAL DATA
        $data['row'] = $this->Crud_model->getData($id);
        $this->load->view('resident/residentRead', $data);
    }
    public function viewlist()
    { #SHOWING THE LIST

        $data['result'] = $this->Crud_model->getAllData();
        $this->load->view('resident/residentView', $data);
    }


    public function html_to_pdf($id)
    { #SHOW INDIVIDUAL DATA
        $data['row'] = $this->Crud_model->getDatax($id);
        $this->load->view('html_to_pdf', $data);
    }
    public function createPdf($id)
    {
        $live_mpdf = new \Mpdf\Mpdf();
        $data['row'] = $this->Crud_model->getDatax($id);
        $all_html = $this->load->view('html_to_pdf', $data, true); //CodeIgniter view file name
        $live_mpdf->WriteHTML($all_html);
        $live_mpdf->Output(); // simple run and opens in browser
        // $live_mpdf->Output('pakainfo_details.pdf','D'); // it CodeIgniter downloads the file into the main dynamic system, with give your file name

    }



    // EXCEL EXPORT
    public function export_csv()
    {
        // file name 
        $filename = 'Residents_' . date('Ymd') . '.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");
        // get data 
        $result = $this->Crud_model->getUserDetails();
        // file creation 
        $file = fopen('php://output', 'w');
        $header = array("First Name", "Mi", "Last Name", "Address", "Contact Number", "Gender", "Birthdate", "Age", "Senior Citizenship", "Voter Status", "Civil Status", "Differently Abled Person");
        fputcsv($file, $header);
        foreach ($result as $key => $line) {
            fputcsv($file, $line);
        }
        fclose($file);
        exit;
    }

    // EXCEL EXPORT SENIOR CITIZENS
    public function export_csvs()
    {
        // file name 
        $filename = 'Seniors_' . date('Ymd') . '.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");
        // get data 
        $result = $this->Crud_model->getUserSenior();
        // file creation 
        $file = fopen('php://output', 'w');
        $header = array("ID Number", "First Name", "Mi", "Last Name", "Contact", "Address", "Gender", "Age", "Senior Citizenship");
        fputcsv($file, $header);
        foreach ($result as $key => $line) {
            fputcsv($file, $line);
        }
        fclose($file);
        exit;
    }

    // EXCEL EXPORT PWD
    public function export_csvpwd()
    {
        // file name 
        $filename = 'DiffentlyAbledPersons_' . date('Ymd') . '.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");
        // get data 
        $result = $this->Crud_model->getUserPwd();
        // file creation 
        $file = fopen('php://output', 'w');
        $header = array("ID Number", "First Name", "Mi", "Last Name", "Contact", "Address", "Gender", "Age", "Differently Abled Person");
        fputcsv($file, $header);
        foreach ($result as $key => $line) {
            fputcsv($file, $line);
        }
        fclose($file);
        exit;
    }
    // EXCEL EXPORT SOLO PARENT
    public function export_csvsp()
    {
        // file name 
        $filename = 'DiffentlyAbledPersons_' . date('Ymd') . '.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");
        // get data 
        $result = $this->Crud_model->getUserSolo();
        // file creation 
        $file = fopen('php://output', 'w');
        $header = array("ID Number", "First Name", "Mi", "Last Name", "Contact", "Address", "Gender", "Age", "Civil Status");
        fputcsv($file, $header);
        foreach ($result as $key => $line) {
            fputcsv($file, $line);
        }
        fclose($file);
        exit;
    }
    // EXCEL EXPORT VOTER
    public function export_csvrv()
    {
        // file name 
        $filename = 'DiffentlyAbledPersons_' . date('Ymd') . '.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");
        // get data 
        $result = $this->Crud_model->getUserVoter();
        // file creation 
        $file = fopen('php://output', 'w');
        $header = array("First Name", "Mi", "Last Name", "Address", "Contact", "Gender", "Birthdate", "Age", "Voter Status");
        fputcsv($file, $header);
        foreach ($result as $key => $line) {
            fputcsv($file, $line);
        }
        fclose($file);
        exit;
    }
}
