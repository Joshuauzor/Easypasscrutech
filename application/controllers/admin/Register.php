<?php defined ('BASEPATH') OR exit ('No direct access allowed');

class Register extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('admin_model','department_model', 'faculty_model', 'level_model', 'courses_model', 'semester_model'));
        $this->load->helper(array('url','form'));
        $this->load->library(array('form_validation','session'));
    }

    public function index(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        if(!$this->session->admin){
            redirect(base_url('admin/login'));
        }
        if($this->input->post()){
            $this->form_validation->set_rules('firstname', 'First name', 'required');
            $this->form_validation->set_rules('lastname', 'Last name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('phone', 'Phone number', 'required');
            $this->form_validation->set_rules('password', ' Password', 'required');
            $this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|matches[password]');
            if($this->form_validation->run() == FALSE){
               $this->session->set_flashdata('error', validation_errors());
               redirect(base_url('admin/register'));
            } 
            else{
                $passwordencrypt = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $data = array(
                    'firstname' => $_POST['firstname'],
                    'lastname' => $_POST['lastname'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'password' =>  $passwordencrypt
                );
                $email = $this->admin_model->get_by_email($this->input->post('email'));
                
                if($email){
                    $this->session->set_flashdata('invalid', 'Email already exist');
                    redirect(base_url('admin/register'));
                }
                else{
                    $this->admin_model->insert($data);
                    $this->session->set_flashdata('success', 'you have successfully registered the user, remember to keep password safe!');
                    redirect(base_url('admin/home'));
                    //load dashboard
                }
            }
        }
        $this->load->view('admin/register', $this->data);
    }
}