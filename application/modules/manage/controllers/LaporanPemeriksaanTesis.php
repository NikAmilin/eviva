<?php
//defined('BASEPATH') or exit('No direct script access allowed');

class LaporanPemeriksaanTesis extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peng_indeks');
        $this->load->helper(['url', 'form']);
        $this->load->library('session');
    }

public function pemeriksaan_tesis()
 {
     // Set the page title
     $this->template->title(" Laporan Pemeriksaan Tesis");
     $this->template->render();
 }





}
