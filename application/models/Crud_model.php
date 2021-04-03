<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

    public function __construct(){
        $this->load->database();

    }

   
    function createData($profImage) { #INSERTING DATA TO DATABASE

        $data = array(
            
            'profImage' => $profImage,
            'lastName' => $this->input->post('lastName'),
            'firstName' => $this->input->post('firstName'),
            'mi' => $this->input->post('mi'),
            'birthdate' => $this->input->post('birthdate'),
            'contact' => $this->input->post('contact'),
            'age' => $this->input->post('age'),
            'voterStatus' => $this->input->post('voterStatus'),
            'gender' => $this->input->post('gender'),
            'civilStatus' => $this->input->post('civilStatus'),
            'address' => $this->input->post('address'),
            'pwd' => $this->input->post('pwd')
        );
        $this->db->insert('tbl_name', $data);

    }

    function getAllData(){ #FETCHING ALL DATA
        // $this->db->order_by('date', 'DESC');
        $query = $this->db->query('SELECT * FROM tbl_name ORDER BY date DESC');
        return $query->result(); 
    }

    function getData($id){ #FETCH SINGLE DATA
         
         $query = $this->db->query('SELECT * FROM tbl_name WHERE `id` =' .$id);
         return $query->row();

    }

    function updateData($id, $profImage){ #updating data to database

       
        $data = array(
            
            'profImage' => $profImage,
            'lastName' => $this->input->post('lastName'),
            'firstName' => $this->input->post('firstName'),
            'mi' => $this->input->post('mi'),
            'birthdate' => $this->input->post('birthdate'),
            'contact' => $this->input->post('contact'),
            'age' => $this->input->post('age'),
            'voterStatus' => $this->input->post('voterStatus'),
            'gender' => $this->input->post('gender'),
            'civilStatus' => $this->input->post('civilStatus'),
            'address' => $this->input->post('address'),
            'pwd' => $this->input->post('pwd')
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_name', $data);
    }
    function deleteData($id){ #deleting data in database
 
        $this->db->where('id', $id);
        $this->db->delete('tbl_name');
        
    }
    
    function getDatax($id){ #FETCH SINGLE DATA FOR PDF
         
         $query = $this->db->query('SELECT * FROM tbl_name WHERE `id` =' .$id);
         return $query->row();

    }

  
    

//     function readData($id){ #showing data 

//         $query = $this->db->query('SELECT * FROM tbl_name WHERE `id` =' .$id);
//         return $query->row();
//    }


    
}
