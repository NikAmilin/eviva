<?php

class Kenderaan extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("vehicle_model");
    }
    
    
    public function listkend()
    
    {
        $data = $this->vehicle_model->get_all_kenderaan();
        //$data = $this->db->get("T01_KENDERAAN")->result_array();
        $this->template->set("data", $data);

        $this->template->title("Senarai Kenderaan");
        $this->template->render();
    }
    
    public function delete($id_kenderaan)
    {
        $this->db->where("T01_ID", $id_kenderaan)->delete("T01_KENDERAAN"); 

        // Redirect or show a flash message after deletion
        $this->session->set_flashdata("success", "Kenderaan deleted successfully!");
        redirect("kenderaan/listkend");
    }

    public function form_edit($id_kenderaan)
    {
        $vehicle = $this->db->where("T01_ID", $id_kenderaan)->get("T01_KENDERAAN")->row_array();

        if (!$vehicle) {
            show_404();
        }

        $this->template->set("vehicle", $vehicle);
        $this->template->title("Edit Kenderaan");
        $this->template->render();
    }

    public function save($id_kenderaan = null)
    {
        $data = [
            "no_plat" => $this->input->post("no_plat"),
            "nama_kend" => $this->input->post("nama"),
            "kod_kend" => $this->input->post("kod"),
        ];

        if ($id_kenderaan) {
            // Update existing record
            $this->db->where("T01_ID", $id_kenderaan)->update("T01_KENDERAAN", $data);
            $this->session->set_flashdata("success", "Kenderaan updated successfully!");
        } else {
            // Insert new record
            $this->db->insert("T01_KENDERAAN", $data);
            $this->session->set_flashdata("success", "Kenderaan added successfully!");
        }

        redirect("kenderaan/listkend");
    }
}
