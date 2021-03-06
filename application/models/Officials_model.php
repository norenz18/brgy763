<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Officials_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    function createOfficial($profImage)
    { #INSERTING DATA TO DATABASE

        $data = array(


            // 'id' => $this->input->post('id'),
            'profImage' => $profImage,
            'fullname' => $this->input->post('fullname'),
            // 'lastname' => $this->input->post('lastname'),
            // 'middlename' => $this->input->post('middlename'),
            'chairmanship' => $this->input->post('chairmanship'),
            'role' => $this->input->post('role')
            // 'rank' => $this->input->post('rank')


        );
        $this->db->insert('officials', $data);
    }

    function getAllOfficialData()
    { #FETCHING ALL DATA
        // $this->db->order_by('date', 'DESC');
        $query = $this->db->query('SELECT * FROM officials ORDER BY role ASC');
        return $query->result();
    }

    function getOfficialData($id)
    { #FETCH SINGLE DATA

        $query = $this->db->query('SELECT * FROM officials WHERE `id` =' . $id);
        return $query->row();
    }

    function updateOfficialData($id, $profImage)
    { #updating data to database


        $data = array(


            // 'id' => $this->input->post('id'),
            'profImage' => $profImage,
            'fullname' => $this->input->post('fullname'),
            // 'lastname' => $this->input->post('lastname'),
            // 'middlename' => $this->input->post('middlename'),
            'chairmanship' => $this->input->post('chairmanship'),
            'role' => $this->input->post('role')
            // 'rank' => $this->input->post('rank')

        );
        $this->db->where('id', $id);
        $this->db->update('officials', $data);
    }
    function deleteOfficialData($id)
    { #deleting data in database

        $this->db->where('id', $id);
        $this->db->delete('officials');
    }
}
