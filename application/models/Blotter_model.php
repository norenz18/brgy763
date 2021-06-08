<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blotter_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    function createBlotter()
    { #INSERTING DATA TO DATABASE

        $data = array(

            // 'caseNo' => $this->input->post('caseNo'),
            'complainant' => $this->input->post('complainant'),
            'compResident' => $this->input->post('compResident'),
            'dateOfFiling' => $this->input->post('dateOfFiling'),
            'pic' => $this->input->post('pic'),
            'status' => $this->input->post('status'),
            'textArea' => $this->input->post('textArea')

        );
        $this->db->insert('blotter', $data);
    }

    function getAllBlotterData()
    { #FETCHING ALL DATA
        // $this->db->order_by('date', 'DESC');
        $query = $this->db->query('SELECT * FROM blotter ORDER BY id DESC');
        return $query->result();
    }

    function getBlotterData($id)
    { #FETCH SINGLE DATA

        $query = $this->db->query('SELECT * FROM blotter WHERE `id` =' . $id);
        return $query->row();
    }

    function updateBlotterData($id)
    { #updating data to database


        $data = array(

            // 'caseNo' => $this->input->post('caseNo'),
            'complainant' => $this->input->post('complainant'),
            'compResident' => $this->input->post('compResident'),
            'dateOfFiling' => $this->input->post('dateOfFiling'),
            'pic' => $this->input->post('pic'),
            'status' => $this->input->post('status'),
            'textArea' => $this->input->post('textArea')
        );
        $this->db->where('id', $id);
        $this->db->update('blotter', $data);
    }
    function deleteData($id)
    { #deleting data in database

        $this->db->where('id', $id);
        $this->db->delete('blotter');
    }


    //     function readData($id){ #showing data 

    //         $query = $this->db->query('SELECT * FROM tbl_name WHERE `id` =' .$id);
    //         return $query->row();
    //    }

}
