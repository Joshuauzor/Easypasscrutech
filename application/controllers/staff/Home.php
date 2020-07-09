<?php defined ('BASEPATH') OR exit ('No direct access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('admin_model','staff_model','task_model','class_model','department_model','information_model','student_model','past_question_model', 'faculty_model', 'level_model', 'courses_model', 'semester_model'));
        $this->load->helper(array('url','form'));
        $this->load->library(array('form_validation','session'));

        if(!$this->session->staff){
            redirect(base_url('staff/login'));
        }
       
    }

    public function index(){
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
        $this->data['dept_name'] = $this->department_model->get_dept_name($this->session->staff->department_id);
        $this->load->view('staff/index', $this->data);
    }

    public function courses(){
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
        $this->data['dept_name'] = $this->department_model->get_dept_name($this->session->staff->department_id);
        $this->load->view('staff/sub_data/courses', $this->data);
    }

    public function past_question(){
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
        $this->data['dept_name'] = $this->department_model->get_dept_name($this->session->staff->department_id);
        $this->data['pq_staff'] = $this->past_question_model->get_pq_by_dept($this->session->staff->department_id);
        $this->load->view('staff/sub_data/past_question', $this->data);
    }

    public function post_info(){
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
        $this->data['dept_name'] = $this->department_model->get_dept_name($this->session->staff->department_id);
        $this->data['pq_staff'] = $this->past_question_model->get_pq_by_dept($this->session->staff->department_id);
        $this->data['email_information']  = $this->information_model->get_by_email($this->session->staff->email);
        $this->load->view('staff/sub_data/post_info', $this->data);
    }

    public function add_info(){
        if($this->input->post()){
            $this->form_validation->set_rules('title','Title','required');
            $this->form_validation->set_rules('information','Information','required');
            $this->form_validation->set_rules('level','Level','required');
            $this->form_validation->set_rules('semester','Semester','required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('staff/home/post_info'));
            }
            else{
            
                $data = array(
                    'admin' => 'no',
                    'title' => $_POST['title'],
                    'information' => $_POST['information'],
                    'firstname' => $this->session->staff->firstname,
                    'lastname' => $this->session->staff->lastname,
                    'email' => $this->session->staff->email,
                    'faculty_id' => $this->session->staff->faculty_id,
                    'department_id' => $this->session->staff->department_id,
                    'level' => $_POST['level'],
                    'semester' => $_POST['semester'],


                );

                $this->information_model->insert($data);
                $this->session->set_flashdata('success', 'Information Posted');
                redirect(base_url('staff/home/post_info'));

            }
        }

    }

    public function delete_info(){
        if($this->input->post()){
            $this->form_validation->set_rules('info','Information','required');
            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('staff/home/post_info'));

            }
            else{
                $this->information_model->delete($this->input->post('info'));
                $this->session->set_flashdata('success', 'Information Deleted');
                redirect(base_url('staff/home/post_info'));
            }
        }
    }

    public function view_info(){
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
        $this->data['dept_name'] = $this->department_model->get_dept_name($this->session->staff->department_id);
        $this->data['pq_staff'] = $this->past_question_model->get_pq_by_dept($this->session->staff->department_id);
        $this->data['email_information']  = $this->information_model->get_by_email($this->session->staff->email);
        $this->load->view('staff/sub_data/view_info', $this->data);
    }

    public function staff(){
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
        $this->data['dept_name'] = $this->department_model->get_dept_name($this->session->staff->department_id);
        $this->data['faculty_name'] =$this->faculty_model->get_name($this->session->staff->faculty_id);
        $this->data['pq_staff'] = $this->past_question_model->get_pq_by_dept($this->session->staff->department_id);
        $this->data['email_information']  = $this->information_model->get_by_email($this->session->staff->email);
        $this->data['all_staff'] = $this->staff_model->get_all();
        $this->data['department_staff'] = $this->staff_model->get_dept_staff($this->session->staff->department_id);
        $this->load->view('staff/sub_data/staff', $this->data);
    }

    public function student(){
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
        $this->data['dept_name'] = $this->department_model->get_dept_name($this->session->staff->department_id);
        $this->data['faculty_name'] =$this->faculty_model->get_name($this->session->staff->faculty_id);
        $this->data['pq_staff'] = $this->past_question_model->get_pq_by_dept($this->session->staff->department_id);
        $this->data['email_information']  = $this->information_model->get_by_email($this->session->staff->email);
        $this->data['all_staff'] = $this->staff_model->get_all();
        $this->data['all_dept_student'] = $this->student_model->get_by_dept($this->session->staff->department_id);
        $this->load->view('staff/sub_data/students', $this->data);
    }

    public function profile(){
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
        $this->data['dept_name'] = $this->department_model->get_dept_name($this->session->staff->department_id);
        $this->data['faculty_name'] =$this->faculty_model->get_name($this->session->staff->faculty_id);
        $this->data['pq_staff'] = $this->past_question_model->get_pq_by_dept($this->session->staff->department_id);
        $this->data['email_information']  = $this->information_model->get_by_email($this->session->staff->email);
        $this->data['all_staff'] = $this->staff_model->get_all();
        $this->data['all_dept_student'] = $this->student_model->get_by_dept($this->session->staff->department_id);
        $this->load->view('staff/sub_data/profile', $this->data);
    }

    public function edit_profile(){
        if($this->input->post()){
            $this->form_validation->set_rules('firstname','First Name', 'required');
            $this->form_validation->set_rules('lastname','Last Name', 'required');
            $this->form_validation->set_rules('email','Email', 'required');
            $this->form_validation->set_rules('faculty','Faculty', 'required');
            $this->form_validation->set_rules('department','Department', 'required');
            $this->form_validation->set_rules('phone','Mobile', 'required');
            $this->form_validation->set_rules('password','Password', 'required');
            $this->form_validation->set_rules('level','Level', 'required');
            $this->form_validation->set_rules('semester','Semester', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('staff/home/profile'));
            }
            else{
                $email = $this->staff_model->get_by_email($this->session->staff->email);
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
                            'faculty_name' =>  $faculty_name,
                            'department_name' =>  $department_name,
                            'phone' => $_POST['phone'],
                            'level' => $_POST['level'],
                            'semester' => $_POST['semester'],

                        );

                        $this->staff_model->update($this->session->staff->id, $data);
                        $this->session->set_flashdata('success', 'Profile Updated, Re-login your account ');
                        redirect(base_url('staff/home/profile'));

                    }
                    else{
                        $this->session->set_flashdata('wrong', 'Incorrect Password!');
                        $this->session->unset_userdata('staff');
                        redirect(base_url('staff/login'));
                    }
                }
                // else{
                //     $this->session->set_flashdata('email', 'An error occured!');
                //     redirect(base_url('admin/home/profile'));

                // }
            //}
        }
    }


    //===============================================

    public function manage_class(){
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
        $this->data['dept_name'] = $this->department_model->get_dept_name($this->session->staff->department_id);
        $this->data['pq_staff'] = $this->past_question_model->get_pq_by_dept($this->session->staff->department_id);
        $this->data['email_information']  = $this->information_model->get_by_email($this->session->staff->email);
        $this->data['email_class']  = $this->class_model->get_by_email($this->session->staff->email);
        // var_dump($this->datat['email_class'] ); die;
        $this->load->view('staff/sub_data/manage_class', $this->data);
    }

    public function upload_class(){
        if($this->input->post()){
            $this->form_validation->set_rules('topic', 'Topic', 'required');
            $this->form_validation->set_rules('link', 'Link', 'required');
            $this->form_validation->set_rules('faculty_id', 'Faculty', 'required');
            $this->form_validation->set_rules('department_id', 'Department', 'required');
            $this->form_validation->set_rules('level', 'Level', 'required');
            $this->form_validation->set_rules('semester', 'Semester', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('staff/home/manage_class'));
            }
            else{
                $data = array(
                    'title' => $_POST['topic'],
                    'link' => $_POST['link'],
                    'faculty_id' => $_POST['faculty_id'],
                    'department_id' => $_POST['department_id'],
                    'level' => $_POST['level'],
                    'semester' => $_POST['semester'],
                    'description' => $_POST['description'],
                    'email' => $this->session->staff->email,
                    'firstname' => $this->session->staff->firstname,
                    'lastname' => $this->session->staff->lastname,


                );

                $this->class_model->insert($data);
                $this->session->set_flashdata('success', 'Class Posted successfully');
                redirect(base_url('staff/home/manage_class'));

            }
        }
    }

    public function delete_class(){
        if($this->input->post()){
            $this->form_validation->set_rules('class', 'Class', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('staff/home/manage_class'));
            }
            else{
                $this->class_model->delete($this->input->post('class'));
                $this->session->set_flashdata('success', 'Class deleted!');
                redirect(base_url('staff/home/manage_class'));
            }
        }
    }

    public function preview_class(){
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
        $this->data['class'] = $this->class_model->get_by_email($this->session->staff->email);
        $this->load->view('staff/sub_data/view_class', $this->data);   
     }
    //===========================

    
    public function manage_task(){
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
        $this->data['dept_name'] = $this->department_model->get_dept_name($this->session->staff->department_id);
        $this->data['pq_staff'] = $this->past_question_model->get_pq_by_dept($this->session->staff->department_id);
        $this->data['email_information']  = $this->information_model->get_by_email($this->session->staff->email);
        $this->data['email_task']  = $this->task_model->get_by_email($this->session->staff->email);
        $this->load->view('staff/sub_data/manage_task', $this->data);
    }


    public function upload_task(){
        if($this->input->post()){
            $this->form_validation->set_rules('topic', 'Topic', 'required');
            $this->form_validation->set_rules('task', 'Task', 'required');
            $this->form_validation->set_rules('level', 'Level', 'required');
            $this->form_validation->set_rules('semester', 'Semester', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('staff/home/manage_task'));
            }
            else{
                $data = array(
                    'topic' => $_POST['topic'],
                    'task' => $_POST['task'],
                    'department_id' => $this->session->staff->department_id,
                    'level' => $_POST['level'],
                    'semester' => $_POST['semester'],
                    'email' => $this->session->staff->email,
                    'firstname' => $this->session->staff->firstname,
                    'lastname' => $this->session->staff->lastname,
                );

                $this->task_model->insert($data);
                $this->session->set_flashdata('success', 'Task Successfully Uploaded');
                redirect(base_url('staff/home/manage_task'));

            }
        }
    }

    public function delete_task(){
        if($this->input->post()){
            $this->form_validation->set_rules('topic', 'Topic', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('staff/home/manage_task'));
            }
            else{
                $this->task_model->delete($this->input->post('topic'));
                $this->session->set_flashdata('success', 'Task deleted!');
                redirect(base_url('staff/home/manage_task'));
            }
        }
    }

    public function view_task(){
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
        $this->data['dept_name'] = $this->department_model->get_dept_name($this->session->staff->department_id);
        $this->data['pq_staff'] = $this->past_question_model->get_pq_by_dept($this->session->staff->department_id);
        $this->data['email_information']  = $this->information_model->get_by_email($this->session->staff->email);
        $this->data['email_task']  = $this->task_model->get_by_email($this->session->staff->email);
        $this->load->view('staff/sub_data/view_task', $this->data);
    }

    
   
}