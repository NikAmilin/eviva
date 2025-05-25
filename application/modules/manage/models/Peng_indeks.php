<?php
//defined('BASEPATH') or exit('No direct script access allowed');

class Peng_indeks extends CI_Model
{
    // Retrieve details from the database
    public function get_details()
    {
        /*$query = $this->db->get("VV_T01_STUDENT");
        return $query;*/

        $this->db->select('*');
        $this->db->from('VV_T01_STUDENT');
       
        $query = $this->db->get();
        
        // Return the result as an object
        return $query->row();
    }
     
    public function add_document_type()
    {
        $this->db->query ("
        INSERT INTO VV_TO2_DOCUMENT (T02_DOC_TYPE)
        VALUES (?)",
        [
            $this->input->post("document_type[]",true),
        ]
        );
    }

    

}



   /*public function get_student_data($uid) {
        $this->db->select('*');
        $this->db->from('STUDENTS');
       
        $query = $this->db->get();
        
        // Return the result as an object
        return $query->row();*/
    

