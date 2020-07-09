
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('faculty_model','department_model','courses_model','student_model','level_model', 'semester_model'));
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation','session'));
       
    }

    public function index(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['department'] = $this->department_model->get_all();
        $this->data['pastquestion'] = $this->courses_model->get_all();
        $this->data['depart'] = $this->department_model->get_one($this->input->post('department'));
        $this->data['displaylevel'] = $this->level_model->get_all();
        $this->data['displaysemester'] = $this->semester_model->get_all();
        if($this->input->post()){
            //validate form
            $this->form_validation->set_rules('firstname', 'First Name', 'required');
            $this->form_validation->set_rules('lastname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('faculty_id', 'Faculty', 'required');
            $this->form_validation->set_rules('department_id', 'Department', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|matches[password]');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('student/register'));
            }
            else{
                    $hide_password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

                    $data = array (
                        'firstname' => $_POST['firstname'],
                        'lastname' => $_POST['lastname'],
                        'email' => $_POST['email'],
                        'phone' => $_POST['phone'],
                        'password' =>    $hide_password,
                        'faculty_id' => $_POST['faculty_id'],
                        'reg_no' => '00/REG/OO',
                        'level' => '100',
                        'semester' => 'First semester',
                        'department_id' => $_POST['department_id'],
                    );
                    $email = $this->student_model->get_by_email($this->input->post('email'));

                    if($email){
                        $this->session->set_flashdata('email','Email already exist!');
                        redirect(base_url('student/register'));
                    }
                    else{
                        $this->student_model->insert($data);
                        $student = $this->student_model->get_by_email($this->input->post('email'));

                        $this->session->set_userdata('student', $student);
                        redirect(base_url('student/home'));
                    }
                   
                }
            }
            $this->load->view('student/register', $this->data);

        }

    }

