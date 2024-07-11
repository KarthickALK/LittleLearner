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
            'dob' => $post['dob'],
            'address' => $post['address'],
            'standard' => $post['standard'],
            'section' => $post['section']
        );
        $this->db->insert('student_details', $insert);
    }

    public function getStudentList()
    {
        $details = "SELECT * FROM `student_details`;";
        $select = $this->db->query($details);
        return $select->result_array();
    }

    public function studentDetail($id)
    {
        $details = "SELECT * FROM `student_details` WHERE `id` = $id;";
        $select = $this->db->query($details);
        return $select->result_array();
    }

    public function updateStudent()
    {
        $post = $this->input->post(null, true);
        $update = array(
            'name' => $post['studentName'],
            'mobileNumber' => $post['phoneNumber'],
            'mailId' => $post['emailId'],
            'dob' => $post['dob'],
            'address' => $post['address'],
            'standard' => $post['standard'],
            'section' => $post['section']
        );
        $this->db->where('id', $post['id']);
        $this->db->update('student_details', $update);
    }

    public function deleteStudent($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('student_details');
    }


}