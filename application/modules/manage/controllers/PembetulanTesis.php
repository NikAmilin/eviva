<?php
//defined('BASEPATH') or exit('No direct script access allowed');

class PembetulanTesis extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peng_indeks');
        session_start();
    }

       
    public function pembetulan_tesis() {
        // Load the model for accessing the data
        $this->load->model('Peng_indeks');
    
      
    
        // Get the student data from the model based on session user ID
        $student = $this->Peng_indeks->get_details();
    
        // Pass the data to the view
        $this->template->set('student', $student);
        $this->template->render();
    }



public function list_pem_tesis()
 {
     // Set the page title
     $this->template->title(" Pengesahan Pembetulan Tesis");
     $this->template->render();
 }

 public function endorse_pem_tesis()
 {
     // Set the page title
     $this->template->title(" Pengesahan Pembetulan Tesis");
     $this->template->render();
 }


}
