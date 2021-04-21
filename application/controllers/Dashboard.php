<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    { #DASHBOARD

        $this->load->view('dashboard');
    }
    public function database_backup()
    {


        $this->load->dbutil();
        $db_format = array('format' => 'zip', 'filename' => 'db-763_backup.sql');
        $backup = &$this->dbutil->backup($db_format);
        $dbname = 'backup-on-' . date('Y-m-d') . '.zip';
        $save = 'asset/db_backup/' . $dbname;
        write_file($save, $backup);
        force_download($dbname, $backup);
    }
}
