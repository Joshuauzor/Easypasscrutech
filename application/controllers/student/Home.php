<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('faculty_model','admin_model','task_model', 'class_model','staff_model','past_question_model','department_model','information_model','courses_model', 'student_model','level_model', 'semester_model'));
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation','session'));

        if(!$this->session->student){
            redirect(base_url());
        }
       
    }

    public function index(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['faculties'] = $this->faculty_model->get_one($this->session->student->faculty_id);
        $this->data['departments'] = $this->department_model->get_one($this->session->student->department_id);
        $this->data['department'] = $this->department_model->get_all();
        $this->data['pastquestion'] = $this->courses_model->get_all();
        $this->data['depart'] = $this->department_model->get_one($this->input->post('department'));
        $this->data['displaylevel'] = $this->level_model->get_all();
        $this->data['displaysemester'] = $this->semester_model->get_all();
        $faculty = $this->session->student->faculty_id;
        $department = $this->session->student->department_id;
        $level = $this->session->student->level;
        $semester = $this->session->student->semester;
        $this->data['lecturer_info'] = $this->information_model->get_by_dept_lev_sem($department, $level, $semester);
        $this->data['gss_info'] = $this->information_model->get_by_gss($level);
        $this->data['admin_info'] = $this->information_model->get_by_admin();
        $this->data['class'] = $this->class_model->get_by_dept_lev_sem($department, $level, $semester);
        $this->data['task'] = $this->task_model->get_by_dept_lev_sem($department, $level, $semester);

        $this->load->view('student/index', $this->data);
    }

    public function search(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['faculties'] = $this->faculty_model->get_one($this->session->student->faculty_id);
        $this->data['departments'] = $this->department_model->get_one($this->session->student->department_id);
        $this->data['department'] = $this->department_model->get_all();
        $this->data['pastquestion'] = $this->courses_model->get_all();
        $this->data['depart'] = $this->department_model->get_one($this->input->post('department'));
        $this->data['displaylevel'] = $this->level_model->get_all();
        $this->data['displaysemester'] = $this->semester_model->get_all();
        $department = $this->session->student->department_id;
        $level = $this->session->student->level;
        $semester = $this->session->student->semester;
        $this->data['class'] = $this->class_model->get_by_dept_lev_sem($department, $level, $semester);
        $this->data['task'] = $this->task_model->get_by_dept_lev_sem($department, $level, $semester);

        $this->load->view('student/search', $this->data);
    }

    public function past_question(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['title'] = 'Easy Pass';
        $this->data['facult'] = $this->faculty_model->get_one($this->session->student->faculty_id);
        $this->data['departments'] = $this->department_model->get_one($this->session->student->department_id);
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['department'] = $this->department_model->get_all();
        $this->data['pastquestion'] = $this->courses_model->get_all();
        $this->data['depart'] = $this->department_model->get_one($this->input->post('department'));
        $this->data['displaylevel'] = $this->level_model->get_one($this->input->post('level'));
        $this->data['displaysemester'] = $this->semester_model->get_one($this->input->post('semester'));

        // $this->load->view('student/search', $this->data);

        if($this->input->post()){
            $this->form_validation->set_rules('course_code','Course code', 'required');

        }
        if($this->form_validation->run()== FALSE){
            
            $this->session->set_flashdata('search', validation_errors());
            redirect(base_url('student/home/search'));
        }
        else{
            // $this->data['pdf'] = $this->input->POST('course_code');
            // $this->data['pdf'] ='easypass/assets/courses/'.$this->input->POST('course_code').'.pdf';
            $this->data['pdf'] = base_url('assets/courses/').$this->input->POST('course_code').'.pdf';
            
            // var_dump($this->data['pdf'] ); die;
            $this->load->view('student/past_question', $this->data);
        }
    }

    //======================================================================================================

    public function information(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['facult'] = $this->faculty_model->get_one($this->session->student->faculty_id);
        $this->data['departments'] = $this->department_model->get_one($this->session->student->department_id);
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['department'] = $this->department_model->get_all();
        $this->data['pastquestion'] = $this->courses_model->get_all();
        $this->data['depart'] = $this->department_model->get_one($this->input->post('department'));
        $this->data['displaylevel'] = $this->level_model->get_one($this->input->post('level'));
        $this->data['displaysemester'] = $this->semester_model->get_one($this->input->post('semester'));
        $this->data['information'] = $this->information_model->get_all();
        $faculty = $this->session->student->faculty_id;
        $department = $this->session->student->department_id;
        $level = $this->session->student->level;
        $semester = $this->session->student->semester;
        $this->data['lecturer_info'] = $this->information_model->get_by_dept_lev_sem($department, $level, $semester);
        $this->data['gss_info'] = $this->information_model->get_by_gss($level);
        $this->data['admin_info'] = $this->information_model->get_by_admin();
        $this->load->view('student/sub_data/information', $this->data);

    }

    public function profile(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['admin'] = $this->admin_model->get_all();
        $this->data['student'] = $this->student_model->get_all();
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['department'] = $this->department_model->get_all();
        $this->data['level'] = $this->level_model->get_all();
        // $this->data['one_level'] = $this->level_model->get_one($thi)
        $this->data['semester'] = $this->semester_model->get_all();
        $this->data['courses'] = $this->courses_model->get_all();
        $this->data['past_question'] = $this->past_question_model->get_all();
        $this->data['information'] = $this->information_model->get_all();
        // $this->data['dept_name'] = $this->department_model->get_dept_name($this->session->staff->department_id);
        $this->data['all_staff'] = $this->staff_model->get_all();
        $this->data['department_name'] = $this->department_model->get_dept_name($this->session->student->department_id);
        $this->data['faculty_name'] = $this->faculty_model->get_name($this->session->student->faculty_id);
        $this->load->view('student/sub_data/profile', $this->data);
    }

    public function edit_profile(){
        // var_dump($this->input->post()); die;
        if($this->input->post()){
            $this->form_validation->set_rules('firstname','First Name', 'required');
            $this->form_validation->set_rules('lastname','Last Name', 'required');
            $this->form_validation->set_rules('email','Email', 'required');
            $this->form_validation->set_rules('reg_no','Reg No', 'required');
            $this->form_validation->set_rules('level','Level', 'required');
            $this->form_validation->set_rules('faculty','Faculty', 'required');
            $this->form_validation->set_rules('department','Department', 'required');
            $this->form_validation->set_rules('phone','Mobile', 'required');
            $this->form_validation->set_rules('password','Password', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('student/home/profile'));
            }
            else{
                $email = $this->student_model->get_by_email($this->session->student->email);
                // if($email){
                    if(password_verify($this->input->post('password'), $email->password)){
                        $faculty_name = $this->faculty_model->get_name($this->input->post('faculty'));
                        $department_name = $this->department_model->get_name($this->input->post('department'));

                        $data = array(
                            'firstname' => $_POST['firstname'],
                            'lastname' => $_POST['lastname'],
                            'email' => $_POST['email'],
                            'faculty_id' => $_POST['faculty'],
                            'department_id' => $_POST['department'],
                            'reg_no' => $_POST['reg_no'],
                            'level' => $_POST['level'],
                            'phone' => $_POST['phone'],

                        );

                        $this->student_model->update($this->session->student->id, $data);
                        $this->session->set_flashdata('success', 'Profile Updated, Re-login your account ');
                        redirect(base_url('student/home/profile'));

                    }
                    else{
                        $this->session->set_flashdata('wrong', 'Incorrect Password!');
                        $this->session->unset_userdata('student');
                        redirect(base_url('student/login'));
                    }
                }
        }
    }

    public function register_courses(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['admin'] = $this->admin_model->get_all();
        $this->data['student'] = $this->student_model->get_all();
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['department'] = $this->department_model->get_all();
        $this->data['level'] = $this->level_model->get_all();
        $this->data['semester'] = $this->semester_model->get_all();
        $this->data['courses'] = $this->courses_model->get_all();
        $this->data['past_question'] = $this->past_question_model->get_all();
        $this->data['information'] = $this->information_model->get_all();
        $this->data['all_staff'] = $this->staff_model->get_all();
        $this->data['department_name'] = $this->department_model->get_dept_name($this->session->student->department_id);
        $this->data['faculty_name'] = $this->faculty_model->get_name($this->session->student->faculty_id);
        $this->data['dept_courses'] = $this->courses_model->get_dept_sem_lev($this->session->student->department_id, $this->session->student->level, $this->session->student->semester);
        $this->load->view('student/sub_data/register_course', $this->data);   
     }


     //=========================================

     public function class(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['admin'] = $this->admin_model->get_all();
        $this->data['student'] = $this->student_model->get_all();
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['department'] = $this->department_model->get_all();
        $this->data['level'] = $this->level_model->get_all();
        $this->data['semester'] = $this->semester_model->get_all();
        $this->data['courses'] = $this->courses_model->get_all();
        $this->data['past_question'] = $this->past_question_model->get_all();
        $this->data['information'] = $this->information_model->get_all();
        $this->data['all_staff'] = $this->staff_model->get_all();
        $this->data['admin_info'] = $this->information_model->get_by_admin();
        $department = $this->session->student->department_id;
        $level = $this->session->student->level;
        $semester = $this->session->student->semester;
        $this->data['lecturer_info'] = $this->information_model->get_by_dept_lev_sem($department, $level, $semester);
        $this->data['department_name'] = $this->department_model->get_dept_name($this->session->student->department_id);
        $this->data['faculty_name'] = $this->faculty_model->get_name($this->session->student->faculty_id);
        $this->data['dept_courses'] = $this->courses_model->get_dept_sem_lev($this->session->student->department_id, $this->session->student->level, $this->session->student->semester);
        $this->data['class'] = $this->class_model->get_by_dept_lev_sem($department, $level, $semester);
        $this->load->view('student/sub_data/class', $this->data);   
     }

     public function task(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['admin'] = $this->admin_model->get_all();
        $this->data['student'] = $this->student_model->get_all();
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['department'] = $this->department_model->get_all();
        $this->data['level'] = $this->level_model->get_all();
        $this->data['semester'] = $this->semester_model->get_all();
        $this->data['courses'] = $this->courses_model->get_all();
        $this->data['past_question'] = $this->past_question_model->get_all();
        $this->data['information'] = $this->information_model->get_all();
        $this->data['all_staff'] = $this->staff_model->get_all();
        $this->data['admin_info'] = $this->information_model->get_by_admin();
        $department = $this->session->student->department_id;
        $level = $this->session->student->level;
        $semester = $this->session->student->semester;
        $this->data['lecturer_info'] = $this->information_model->get_by_dept_lev_sem($department, $level, $semester);
        $this->data['department_name'] = $this->department_model->get_dept_name($this->session->student->department_id);
        $this->data['faculty_name'] = $this->faculty_model->get_name($this->session->student->faculty_id);
        $this->data['dept_courses'] = $this->courses_model->get_dept_sem_lev($this->session->student->department_id, $this->session->student->level, $this->session->student->semester);
        $this->data['class'] = $this->class_model->get_by_dept_lev_sem($department, $level, $semester);
        $this->data['task'] = $this->task_model->get_by_dept_lev_sem($department, $level, $semester);
        $this->load->view('student/sub_data/task', $this->data);   
     }
}