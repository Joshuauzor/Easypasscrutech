<?php defined ('BASEPATH') OR exit ('No direct access allowed');

class Register extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('admin_model','staff_model','department_model', 'faculty_model', 'level_model', 'courses_model', 'semester_model'));
        $this->load->helper(array('url','form'));
        $this->load->library(array('form_validation','session'));

        if(!$this->session->admin){
            redirect(base_url('staff/login'));
        }
    }

    public function index(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['department'] = $this->department_model->get_all();
        $this->data['pastquestion'] = $this->courses_model->get_all();
        $this->data['depart'] = $this->department_model->get_one($this->input->post('department'));
        $this->data['displaylevel'] = $this->level_model->get_all();
        $this->data['displaysemester'] = $this->semester_model->get_all();
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';

        if($this->input->post()){
            $this->form_validation->set_rules('firstname', 'First Name', 'required');
            $this->form_validation->set_rules('lastname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('phone', 'First Name', 'required');
            $this->form_validation->set_rules('faculty', 'Faculty', 'required');
            $this->form_validation->set_rules('department', 'Department', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|matches[password]');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('staff/register'));
            }
            else{
                $hidden_pass = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                $faculty_name = $this->faculty_model->get_name($this->input->post('faculty'));
                $department_name = $this->department_model->get_name($this->input->post('department'));

                $data = array(
                    'firstname' => $_POST['firstname'],
                    'lastname' => $_POST['lastname'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'faculty_id' => $_POST['faculty'],
                    'department_id' => $_POST['department'],
                    'department_name' => $department_name,
                    'faculty_name' => $faculty_name,
                    'password' => $hidden_pass

                );
                $email = $this->staff_model->get_by_email($this->input->post('email'));

                if($email){
                    $this->session->set_flashdata('account','Account already exist');
                    redirect(base_url('staff/register'));

                }
                else{
                   
                    $this->staff_model->insert($data);
                    $this->session->set_flashdata('success','Staff successfully registered');
                    redirect(base_url('staff/home'));
                }
                
            }
        }

        $this->load->view('staff/register', $this->data);
    }
}