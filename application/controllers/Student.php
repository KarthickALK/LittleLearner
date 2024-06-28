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
        $this->admissionForm();
    }
    

}