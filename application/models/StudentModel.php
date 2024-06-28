<?php
class StudentModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function newStudent()
    {
        $post = $this->input->post(null, true);
        $insert = array(
            'name' => $post['studentName'],
            'mobileNumber' => $post['phoneNumber'],
            'mailId' => $post['emailId'],
            'dob' => $post['dob']
        );
        $this->db->insert('student_details', $insert);
    }

}