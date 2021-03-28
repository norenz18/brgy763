<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certs_model extends CI_Model {

    public function __construct(){
        $this->load->database();

    } 
    function createCerts() { #INSERTING DATA TO DATABASE

        $data = array(
            
            
            'fullName' => $this->input->post('fullName'),
            'address' => $this->input->post('address'),
            'purpose' => $this->input->post('purpose'),
            'date' => $this->input->post('date'),
            'punongBrgy' => $this->input->post('punongBrgy')
           
            
        );
        $this->db->insert('certificate', $data);

    }

    // function getAllBlotterData(){ #FETCHING ALL DATA
    //     // $this->db->order_by('date', 'DESC');
    //     $query = $this->db->query('SELECT * FROM blotter ORDER BY id DESC');
    //     return $query->result(); 
    // }

    function getCertsData($id){ #FETCH SINGLE DATA
         
         $query = $this->db->query('SELECT * FROM certificate WHERE `id` =' .$id);
         return $query->row();

    }

    // function updateBlotterData($id){ #updating data to database

       
    //     $data = array(
            
    //         'caseNo' => $this->input->post('caseNo'),
    //         'complainant' => $this->input->post('complainant'),
    //         'compResident' => $this->input->post('compResident'),
    //         'dateOfFiling' => $this->input->post('dateOfFiling'),
    //         'pic' => $this->input->post('pic'),
    //         'status' => $this->input->post('status'),
    //         'textArea' => $this->input->post('textArea')
    //     );
    //     $this->db->where('id', $id);
    //     $this->db->update('blotter', $data);
    // }
    // function deleteData($id){ #deleting data in database
 
    //     $this->db->where('id', $id);
    //     $this->db->delete('blotter');
        
    // }
    


    
}
