<?php defined ('BASEPATH') OR exit ('No direct access allowed');

class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('admin_model','department_model', 'faculty_model', 'level_model', 'courses_model', 'semester_model'));
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
                redirect(base_url('admin/login'));
            }
            else{
                //do the main stuff
                $admin = $this->admin_model->get_by_email($this->input->post('email'));
                if($admin){
                    if(password_verify($this->input->post('password'), $admin->password)){
                        //load dashboard
                        $this->session->set_userdata('admin', $admin);
                        redirect(base_url('admin/home'));
                        // var_dump($this->session->admin); die;
                    } 
                    else{
                        $this->session->set_flashdata('wrong', 'incorrect password');
                        redirect(base_url('admin/login'));
                    }
                }
                else{
                    $this->session->set_flashdata('account', 'Account does not exist');
                    redirect(base_url('admin/login'));
                }
            }
        }
        $this->load->view('admin/login', $this->data);
    }


    public function logout(){
        if(!$this->session->admin){
            redirect(base_url('admin/login'));
        }
        else{
            $this->session->unset_userdata('admin');
            redirect(base_url('admin/login'));
        }
    }
}