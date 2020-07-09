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
        header('Content-Type: application/json');
        if($this->input->post()){
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                echo json_encode(array('error' => validation_errors()));
            }
            else{
                $email = $this->student_model->get_by_email($this->input->post('email'));

                if($email){
                    if(password_verify($this->input->post('password'), $email->password)){
                       echo json_encode(array('success' => 'Data retrieved', 'data' => $email));
                    }
                    else{
                      
                        echo json_encode(array('error' => 'Incorrect Password'));
                    }
                }
                else{
            
                    echo json_encode(array('error' => 'Account does not Exist'));


                }
            }
        }
        else{
            echo json_encode(array('error' => 'Invalid request method'));

        }
      
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