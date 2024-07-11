<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('StudentModel');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('homePage');
    }

    public function admissionForm()
    {
        $this->load->view('admissionForm');
    }

    public function admissionFormData()
    {
        $profileDetails = $this->StudentModel->newStudent();
        redirect('Student/admissionForm/');
    }

    public function studentList()
    {
        $this->data['method'] = "list";
        $student = $this->StudentModel->getStudentList();
        $this->data['studentList'] = $student;
        $this->load->view('studentList', $this->data);
    }

    public function studentUpdate()
    {
        $tableId = $this->uri->segment(3);
        $student = $this->StudentModel->studentDetail($tableId);
        $this->data['studentList'] = $student;
         $this->data['method'] = "updateForm";
        $this->load->view('studentList', $this->data);
    }

    public function admissionFormUpdate()
    {
        $profileDetails = $this->StudentModel->updateStudent();
        redirect('Student/studentList/');
    }

    public function studentDelete()
    {
        $tableId = $this->uri->segment(3);
        $this->StudentModel->deleteStudent($tableId);
        redirect('Student/studentList/');
    }

}