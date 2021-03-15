<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 //CodeIgniter Controller
class Mpdf extends CI_Controller {
    public function index()
    {
        $live_mpdf = new \Mpdf\Mpdf();
        $all_html = $this->load->view('html_to_pdf',[],true); //CodeIgniter view file name
        $live_mpdf->WriteHTML($all_html);
        $live_mpdf->Output(); // simple run and opens in browser
        //$live_mpdf->Output('pakainfo_details.pdf','D'); // it CodeIgniter downloads the file into the main dynamic system, with give your file name
    }
 
}