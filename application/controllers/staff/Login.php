<?php defined ('BASEPATH') OR exit ('No direct access allowed');

class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('admin_model','staff_model','department_model', 'faculty_model', 'level_model', 'courses_model', 'semester_model'));
        $this->load->helper(array('url','form'));
        $this->load->library(array('form_validation','session'));
    }
    
    public function index(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        if($this->input->post()){
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('staff/login'));
            }
            else{
              $email = $this->staff_model->get_by_email($this->input->post('email'));
                if($email){
                    if(password_verify($this->input->post('password'), $email->password)){
                        $this->session->set_userdata('staff', $email);
                        redirect(base_url('staff/home'));
                    }
                    else{
                        $this->session->set_flashdata('incorrect', 'Incorrect Password');
                        redirect(base_url('staff/login'));
                    }
                }
                else{
                    $this->session->set_flashdata('email', 'Account does not exist');
                    redirect(base_url('staff/login'));

                }
            }
        }
        $this->load->view('staff/login', $this->data);
    }

    public function logout(){
        if($this->session->staff){
            redirect(base_url('staff/login/logout'));
        }
        else{
            $this->session->unset_userdata('staff');
            redirect(base_url('staff/login/logout'));

        }
    }
}
