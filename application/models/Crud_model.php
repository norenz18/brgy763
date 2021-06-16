<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }


    function createData($profImage)
    { #INSERTING DATA TO DATABASE

        $data = array(

            'profImage' => $profImage,
            'id_number' => $this->input->post('id_number'),
            'lastName' => $this->input->post('lastName'),
            'firstName' => $this->input->post('firstName'),
            'mi' => $this->input->post('mi'),
            'birthdate' => $this->input->post('birthdate'),
            'contact' => $this->input->post('contact'),
            'age' => $this->input->post('age'),
            'seniorCitizen' => $this->input->post('seniorCitizen'),
            'voterStatus' => $this->input->post('voterStatus'),
            'gender' => $this->input->post('gender'),
            'civilStatus' => $this->input->post('civilStatus'),
            'address' => $this->input->post('address'),
            'pwd' => $this->input->post('pwd')
        );
        $this->db->insert('tbl_name', $data);
    }

    function getAllData()
    { #FETCHING ALL DATA
        // $this->db->order_by('date', 'DESC');
        $query = $this->db->query('SELECT * FROM tbl_name ORDER BY date DESC');
        return $query->result();
    }

    function getData($id)
    { #FETCH SINGLE DATA

        $query = $this->db->query('SELECT * FROM tbl_name WHERE `id` =' . $id);
        return $query->row();
    }

    function updateData($id, $profImage)
    { #updating data to database


        $data = array(

            'profImage' => $profImage,
            'id_number' => $this->input->post('id_number'),
            'lastName' => $this->input->post('lastName'),
            'firstName' => $this->input->post('firstName'),
            'mi' => $this->input->post('mi'),
            'birthdate' => $this->input->post('birthdate'),
            'contact' => $this->input->post('contact'),
            'age' => $this->input->post('age'),
            'seniorCitizen' => $this->input->post('seniorCitizen'),
            'voterStatus' => $this->input->post('voterStatus'),
            'gender' => $this->input->post('gender'),
            'civilStatus' => $this->input->post('civilStatus'),
            'address' => $this->input->post('address'),
            'pwd' => $this->input->post('pwd')
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_name', $data);
    }
    function deleteData($id)
    { #deleting data in database

        $this->db->where('id', $id);
        $this->db->delete('tbl_name');
    }

    function getDatax($id)
    { #FETCH SINGLE DATA FOR PDF

        $query = $this->db->query('SELECT * FROM tbl_name WHERE `id` =' . $id);
        return $query->row();
    }

    //EXCEL EXPORT
    function getUserDetails()
    {
        $response = array();
        $this->db->select('id_number, firstName, mi, lastName, address, contact, gender, birthdate, age, seniorCitizen, voterStatus, civilStatus, pwd');
        $q = $this->db->get('tbl_name');
        $response = $q->result_array();
        return $response;
    }
    function getUserVoter()
    {
        $response = array();
        $this->db->select('firstName, mi, lastName, address, contact, gender, birthdate, age, voterStatus');
        $this->db->like('voterStatus', 'Yes');
        $q = $this->db->get('tbl_name');
        $response = $q->result_array();
        return $response;
    }
    function getUserSenior()
    {
        $response = array();
        $this->db->select('id_number, firstName, mi, lastName, contact, address, gender, age, seniorCitizen');
        $this->db->like('seniorCitizen', 'Senior Citizen');
        $q = $this->db->get('tbl_name');
        $response = $q->result_array();
        return $response;
    }
    function getUserPwd()
    {
        $response = array();
        $this->db->select('id_number, firstName, mi, lastName, contact, address, gender, age, pwd');
        $this->db->like('pwd', 'Yes');
        $q = $this->db->get('tbl_name');
        $response = $q->result_array();
        return $response;
    }
    function getUserSolo()
    {
        $response = array();
        $this->db->select('id_number, firstName, mi, lastName, contact, address, gender, age, civilStatus');
        $this->db->like('civilStatus', 'Solo Parent');
        $q = $this->db->get('tbl_name');
        $response = $q->result_array();
        return $response;
    }
}
