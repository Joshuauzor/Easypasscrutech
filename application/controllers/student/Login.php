<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('faculty_model','department_model','student_model','level_model', 'semester_model'));
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation','session'));
       
    }

    public function index(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';

        if($this->input->post()){
            //validate form
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('student/login'));
            }
            else{
                $email = $this->student_model->get_by_email($this->input->post('email'));

                if($email){
                    if(password_verify($this->input->post('password'), $email->password)){
                        $this->session->set_userdata('student', $email);
                       
                        redirect(base_url('student/home'));
                    }
                    else{
                        $this->session->set_flashdata('incorrect', 'incorrect password');
                        redirect(base_url('student/login'));
                    }
                }
                else{
                    //error
                    $this->session->set_flashdata('account', 'Account does not exist!');
                    redirect(base_url('student/login'));

                }
            }
        }
        $this->load->view('student/login', $this->data);
    }

    public function logout(){
        if(!$this->session->student){
            redirect(base_url());
        }
        else{
            $this->session->unset_userdata('student');
            redirect(base_url());
        }
    }
}