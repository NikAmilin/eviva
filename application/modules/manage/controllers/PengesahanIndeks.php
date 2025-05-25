<?php
//defined('BASEPATH') or exit('No direct script access allowed');

class PengesahanIndeks extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peng_indeks');
        session_start();
    }
    
    public function create_student() {
        // Load the model for accessing the data
        $this->load->model('Peng_indeks');
    
      
    
        // Get the student data from the model based on session user ID
        $student = $this->Peng_indeks->get_details();
    
        // Pass the data to the view
        $this->template->set('student', $student);
        $this->template->render();
    }

    public function kemaskini_peng_indeks()
 {

    
     // Set the page title
     $this->template->title("Kemaskini Pengesahan Indeks Kesamaan Tesis");
     $this->template->render();
 }

 public function confirm_peng_indeks()
 {

    
     // Set the page title
     $this->template->title("Pengesahan Indeks Kesamaan Tesis");
     $this->template->render();
 }

 public function save_peng_indeks()

 {
     // Set the page title
     $this->template->title("Save Pengesahan Indeks Kesamaan Tesis");
     $this->template->render();
 }

    // Display the main form (pengesahan_indeks.php)
   // Display the form with student details and document type
   /*public function pengesahan_indeks($indeks_id)
   {
       // Fetch the student details
       $indeks = $this->Peng_indeks->get_student_details($indeks_id);

       if (!$indeks) {
           show_error('Student record not found.', 404);
       }

       // Pass data to the view
       $this->template->set("indeks", $indeks);
       $this->template->title("Pengesahan Indeks Kesamaan Tesis");
       $this->template->render();
   }*/

   // Save the updated document type
  /* public function update_document_type($indeks_id)
   {
       // Validate ID
       if (!$indeks_id) {
           show_error('Invalid student ID.', 400);
       }

       // Fetch and sanitize input
       $document_type = $this->input->post('document_type') ?? [];
       $document_type_str = implode(', ', $document_type);

       // Update in the database
       $result = $this->Peng_indeks->update_document_type($indeks_id, $document_type_str);

       if ($result) {
           $this->session->set_flashdata('success', 'Document type updated successfully!');
       } else {
           $this->session->set_flashdata('error', 'Failed to update document type.');
       }

       // Redirect back to the page
       redirect('PengesahanIndeks/pengesahan_indeks/' . $indeks_id);
   }*/

 //try 
 /*{public function pengesahan_indeks($indeks_id = null)
 
     if (!$indeks_id) {
         show_error('Invalid request: Missing student ID.', 400);
     }
 
     // Fetch student data
     $indeks = $this->Peng_indeks->get_student_details($indeks_id);
 
     if (!$indeks) {
         show_error('Student record not found.', 404);
     }
 
     $this->template->set('indeks', $indeks);
     $this->template->title('Pengesahan Indeks');
     $this->template->render();
 }*/


    // Handle the "Kemaskini" button action
   /* public function update()
    {
        // Redirect to the update form
        redirect('PengesahanIndeks/update_peng_indeks');
    }

    // Display the update form (update_peng_indeks.php)
    public function update_peng_indeks($indeks_id = null)
    {
        // Ensure the indeks_id is provided
        if (!$indeks_id) {
            show_error('Invalid request: Missing student ID.', 400);
        }

        // Fetch the student details based on the provided indeks_id
        $indeks = $this->db
            ->where("T01_STUDENT_ID", $indeks_id)
            ->get("VV_T01_STUDENT")
            ->row();

        if (!$indeks) {
            show_error('Student record not found.', 404);
        }

        // Pass the data to the update form
        $this->template->set("indeks", $indeks);
        $this->template->title("Kemaskini Pengesahan Indeks");
        $this->template->render();
    }

    // Save the updated details
    public function save_update($indeks_id)
    {
       

        // Prepare the updated data
        $updated_data = [
            'T01_STUDENT_NAME' => $this->input->post('name'),
            'T01_STUDENT_EMAIL' => $this->input->post('email'),
            'T01_STUDENT_MATRICNUM' => $this->input->post('matric'),
            'T01_PROGRAMME' => $this->input->post('program'),
            'T01_SEMESTER' => $this->input->post('semester'),
            'T01_SV_NAME' => $this->input->post('sv_name'),
            'T01_SV_EMAIL' => $this->input->post('sv_email'),
            'T01_THESIS_NAME' => $this->input->post('thesis_name'),
            'T01_DOC_TYPE' => $this->input->post('document_type'),
        ];

        // Update the student record in the database
        $this->db->where('T01_STUDENT_ID', $indeks_id);
        $this->db->update('VV_T01_STUDENT', $updated_data);

        // Set a success message and redirect
        $this->session->set_flashdata('success', 'Details updated successfully!');
        redirect('PengesahanIndeks/pengesahan_indeks');
    }

   

public function save_updatee($indeks_id)
{
    // Fetch posted data
    $updated_data = [
        'T01_STUDENT_NAME' => $this->input->post('name'),
        'T01_STUDENT_EMAIL' => $this->input->post('email'),
        'T01_STUDENT_MATRICNUM' => $this->input->post('matric'),
        'T01_PROGRAMME' => $this->input->post('program'),
        'T01_SEMESTER' => $this->input->post('semester'),
        'T01_SV_NAME' => $this->input->post('sv_name'),
        'T01_SV_EMAIL' => $this->input->post('sv_email'),
        'T01_THESIS_NAME' => $this->input->post('thesis_name'),
        'T01_DOC_TYPE' => implode(', ', $this->input->post('document_type') ?? []),
    ];

    // Update details via the model
    $result = $this->Peng_indeks->update_student_details($indeks_id, $updated_data);

    if ($result) {
        $this->session->set_flashdata('success', 'Details updated successfully!');
    } else {
        $this->session->set_flashdata('error', 'Failed to update details.');
    }

    redirect('PengesahanIndeks/pengesahan_indeks/' . $indeks_id);
}

public function confirm_peng_indeks()
 {

    
     // Set the page title
     $this->template->title("Pengesahan Indeks Kesamaan Tesis");
     $this->template->render();
 }

 public function kemaskini_peng_indeks()
 {

    
     // Set the page title
     $this->template->title("Kemaskini Pengesahan Indeks Kesamaan Tesis");
     $this->template->render();
 }

 

//create 
 // Display the create form for a new student
 public function create_student()
 {

    
     // Set the page title
     $this->template->title("Pengesahan Indeks Kesamaan Tesis - Create New Student");
     $this->template->render();
 }

 // Save the new student record
 public function save_new_student()
 {
     // Fetch and sanitize input data
     $new_student_data = [
         'T01_STUDENT_NAME' => $this->input->post('name'),
         'T01_STUDENT_EMAIL' => $this->input->post('email'),
         'T01_STUDENT_MATRICNUM' => $this->input->post('matric'),
         'T01_PROGRAMME' => $this->input->post('program'),
         'T01_SEMESTER' => $this->input->post('semester'),
         'T01_SV_NAME' => $this->input->post('sv_name'),
         'T01_SV_EMAIL' => $this->input->post('sv_email'),
         'T01_THESIS_NAME' => $this->input->post('thesis_name'),
         'T01_DOC_TYPE' => implode(', ', $this->input->post('document_type') ?? []),
     ];

     // Insert the new student record into the database
     $result = $this->Peng_indeks->create_new_student($new_student_data);

     // Provide feedback on success/failure
     if ($result) {
         $this->session->set_flashdata('success', 'Student created successfully!');
         redirect('PengesahanIndeks/pengesahan_indeks/' . $result);
     } else {
         $this->session->set_flashdata('error', 'Failed to create student record.');
         redirect('PengesahanIndeks/create_student');
     }
     $this->template->render();
 }*/
}
