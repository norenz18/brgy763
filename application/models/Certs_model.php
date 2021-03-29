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

    function getAllCertsData(){ #FETCHING ALL DATA
        // $this->db->order_by('date', 'DESC');
        $query = $this->db->query('SELECT * FROM certificate ORDER BY id DESC');
        return $query->result(); 
    }

    function getCertsData($id){ #FETCH SINGLE DATA
         
         $query = $this->db->query('SELECT * FROM certificate WHERE `id` =' .$id);
         return $query->row();

    }

    function updateCertsData($id){ #updating data to database

       
        $data = array(
            
            
            'fullName' => $this->input->post('fullName'),
            'address' => $this->input->post('address'),
            'purpose' => $this->input->post('purpose'),
            'date' => $this->input->post('date'),
            'punongBrgy' => $this->input->post('punongBrgy')
           
            
        );
        $this->db->where('id', $id);
        $this->db->update('certificate', $data);
    }
    function deleteCertsData($id){ #deleting data in database
 
        $this->db->where('id', $id);
        $this->db->delete('certificate');
        
    }
    


    
}
