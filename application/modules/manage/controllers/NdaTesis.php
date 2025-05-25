<?php
//defined('BASEPATH') or exit('No direct script access allowed');

class NdaTesis extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peng_indeks');
        $this->load->helper(['url', 'form']);
        $this->load->library('session');
    }

public function examiner_nda()
 {
     // Set the page title
     $this->template->title(" Non - Disclosure Agreement Thesis");
     $this->template->render();
 }

 public function chairman_nda()
 {
     // Set the page title
     $this->template->title(" Non - Disclosure Agreement Thesis");
     $this->template->render();
 }

 public function secretary_nda()
 {
     // Set the page title
     $this->template->title(" Non - Disclosure Agreement Thesis");
     $this->template->render();
 }

}