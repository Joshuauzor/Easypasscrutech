<?php defined ('BASEPATH') OR exit ('No direct access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('admin_model','staff_model','department_model','information_model','student_model','past_question_model', 'faculty_model', 'level_model', 'courses_model', 'semester_model'));
        $this->load->helper(array('url','form'));
        $this->load->library(array('form_validation','session'));

        if(!$this->session->admin){
            redirect(base_url('admin/login'));
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
        $this->data['staff'] = $this->staff_model->get_all();
        $this->load->view('admin/index', $this->data);
    }

    public function faculty_info(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['admin'] = $this->admin_model->get_all();
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['department'] = $this->department_model->get_all();
        $this->load->view('admin/sub_data/faculties', $this->data);
    }

    public function department_info(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['admin'] = $this->admin_model->get_all();
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['department'] = $this->department_model->get_all();
        $this->load->view('admin/sub_data/departments', $this->data);
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
        $this->load->view('admin/sub_data/courses', $this->data);

    }

    
    public function pastquestions(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['admin'] = $this->admin_model->get_all();
        $this->data['student'] = $this->student_model->get_all();
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['departments'] = $this->department_model->get_all();
        $this->data['level'] = $this->level_model->get_all();
        $this->data['semester'] = $this->semester_model->get_all();
        $this->data['course_option'] = $this->courses_model->get_all();
        $this->data['past_question'] = $this->past_question_model->get_all();
        $this->load->view('admin/sub_data/pastquestions', $this->data);
    }

    public function admin(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['admin'] = $this->admin_model->get_all();
        $this->data['student'] = $this->student_model->get_all();
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['department'] = $this->department_model->get_all();
        $this->data['level'] = $this->level_model->get_all();
        $this->data['semester'] = $this->semester_model->get_all();
        $this->data['courses'] = $this->courses_model->get_all();
        $this->load->view('admin/sub_data/admin', $this->data);
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
        $this->data['all_staff'] = $this->staff_model->get_all();
       $this->load->view('admin/sub_data/staff', $this->data);
    }

    public function manage_courses(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['admin'] = $this->admin_model->get_all();
        $this->data['student'] = $this->student_model->get_all();
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['departments'] = $this->department_model->get_all();
        $this->data['level'] = $this->level_model->get_all();
        $this->data['semester'] = $this->semester_model->get_all();
        $this->data['course_option'] = $this->courses_model->get_all();
        $this->load->view('admin/sub_data/manage_courses', $this->data);
    }

    
    public function add_course(){
        // var_dump($this->input->post()); die;
        if($this->input->post()){
            //validate form
           
            $this->form_validation->set_rules('faculty', 'Faculty', 'required');
            $this->form_validation->set_rules('department', 'Department', 'required');
            $this->form_validation->set_rules('level', 'Level', 'required');
            $this->form_validation->set_rules('semester', 'Semester', 'required');
            $this->form_validation->set_rules('course_code', 'Course code', 'required');
            $this->form_validation->set_rules('course_title', 'Course title', 'required');
            $this->form_validation->set_rules('credit_unit', 'Course Credit Unit', 'required');
            $this->form_validation->set_rules('gss', 'GSS', 'required');

            if($this->form_validation->run() == FALSE){
                //throw error
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('admin/home/manage_courses'));
            }
            else{
                //do logic
                $department_name = $this->department_model->get_name($this->input->post('department'));
                $faculty_name = $this->faculty_model->get_name($this->input->post('faculty'));
                // var_dump($faculty_name); die;
                $data = array(
               
                    'faculty_id' => $_POST['faculty'],
                    'department_id' => $_POST['department'],
                    'level' => $_POST['level'],
                    'semester' => $_POST['semester'],
                    'course_code' => $_POST['course_code'],
                    'course_title' => $_POST['course_title'],
                    'credit_unit' => $_POST['credit_unit'],
                    'gss' => $_POST['gss'],
                    'department_name' => $department_name,
                    'faculty_name' => $faculty_name
                );
                $this->courses_model->insert($data);
                $this->session->set_flashdata('success', 'you have successfully added a new course');
                redirect(base_url('admin/home/manage_courses'));            }
        }
        //load view
    }


    public function remove_course(){
        if($this->input->post()){
            $this->form_validation->set_rules('course_code', 'Course Code', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('admin/home/manage_courses'));
            }
            else{
               
                $this->courses_model->delete_by_course_code($this->input->post('course_code'));
                $this->session->set_flashdata('success', 'Department successfully deleted!');
                redirect(base_url('admin/home/manage_courses'));

            }
        }
    }
    //remove course field=============================================================

    public function manage_faculties(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['admin'] = $this->admin_model->get_all();
        $this->data['student'] = $this->student_model->get_all();
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['departments'] = $this->department_model->get_all();
        $this->data['level'] = $this->level_model->get_all();
        $this->data['semester'] = $this->semester_model->get_all();
        $this->data['course_option'] = $this->courses_model->get_all();
        $this->load->view('admin/sub_data/manage_faculties', $this->data);
    }

    public function add_faculties(){
        // var_dump($this->input->post()); die;
       if($this->input->post()){
           $this->form_validation->set_rules('faculty', 'Faculty', 'required');

           if($this->form_validation->run() == FALSE){
               $this->session->set_flashdata('error', validation_errors());
               redirect(base_url('admin/home/manage_faculties'));
           }

           else{
               $data = array(
                   'name' => $_POST['faculty'],
               );

               $this->faculty_model->insert($data);
               $this->session->set_flashdata('success', 'New Faculty successfully added');
               redirect(base_url('admin/home/manage_faculties'));

           }
       }
    }

    public function remove_faculties(){


        if($this->input->post()){
            $this->form_validation->set_rules('faculty', 'Faculty', 'required');

            if($this->form_validation->run() == FALSE){
                    $this->session->set_flashdata('error', validation_errors());
                    redirect(base_url('admin/home/manage_faculties'));
                }
            else{
                $this->faculty_model->delete($this->input->post('faculty'));
                $this->session->set_flashdata('success', 'Faculty deleted!');
                redirect(base_url('admin/home/manage_faculties'));
            }
        }
    }
    //=================================================================================

    public function manage_departments(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['admin'] = $this->admin_model->get_all();
        $this->data['student'] = $this->student_model->get_all();
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['departments'] = $this->department_model->get_all();
        $this->data['level'] = $this->level_model->get_all();
        $this->data['semester'] = $this->semester_model->get_all();
        $this->data['course_option'] = $this->courses_model->get_all();
        $this->load->view('admin/sub_data/manage_departments', $this->data);
    }

    public function add_department(){
        // var_dump($this->input->post()); die;
       if($this->input->post()){
        $this->form_validation->set_rules('faculty', 'Faculty', 'required');
        $this->form_validation->set_rules('department', 'Department', 'required');

           if($this->form_validation->run() == FALSE){
               $this->session->set_flashdata('error', validation_errors());
               redirect(base_url('admin/home/manage_departments'));
           }

           else{
               $data = array(
                   'name' => $_POST['department'],
                   'faculty_id' => $_POST['faculty']
               );

               $this->department_model->insert($data);
               $this->session->set_flashdata('success', 'New Department successfully added!');
               redirect(base_url('admin/home/manage_departments'));

           }
       }
    }

    public function remove_department(){


        if($this->input->post()){
            $this->form_validation->set_rules('department', 'Department', 'required');

            if($this->form_validation->run() == FALSE){
                    $this->session->set_flashdata('error', validation_errors());
                    redirect(base_url('admin/home/manage_departments'));
                }
            else{
                $this->department_model->delete($this->input->post('department'));
                $this->session->set_flashdata('success', 'Department deleted!');
                redirect(base_url('admin/home/manage_departments'));
            }
        }
    }
    //============================================================================================================

    public function manage_pastquestions(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['admin'] = $this->admin_model->get_all();
        $this->data['student'] = $this->student_model->get_all();
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['departments'] = $this->department_model->get_all();
        $this->data['level'] = $this->level_model->get_all();
        $this->data['semester'] = $this->semester_model->get_all();
        $this->data['course_option'] = $this->courses_model->get_all();
        $this->data['past_question'] = $this->past_question_model->get_all();
        $this->load->view('admin/sub_data/manage_pastquestions', $this->data);
    }

    public function add_pastquestions(){
        $config['upload_path'] = './assets/courses';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '7000';

        $this->load->library('upload', $config);
        $this->upload->do_upload('file_name');
        $file_name = $this->upload->data();

        //posting to db
        $data = array(
            'file_name' => $file_name['file_name'],
            'course_code' => $this->input->post('course_code'),
            'faculty_id' => $this->input->post('faculty'),
            'department_id' => $this->input->post('department'),
            'level' => $this->input->post('level'),
            'semester' => $this->input->post('semester'),
            'gss' => $this->input->post('gss'),
        );

        $this->past_question_model->insert($data);
        $this->session->set_flashdata('success', 'Past Question Successfully added');
        redirect(base_url('admin/home/manage_pastquestions'));
    }

    public function remove_past_questions(){
        $file = 'assets/courses/'.$this->input->post('course_code').'.pdf';

        if(is_readable($file) && unlink($file)){
            $this->past_question_model->delete_by_course_code($this->input->post('course_code'));
            $this->session->set_flashdata('success', 'File was successfully deleted');
            redirect(base_url('admin/home/manage_pastquestions'));
        }
        else{
            $this->session->set_flashdata('error', 'File was not deleted!');
            redirect(base_url('admin/home/manage_pastquestions'));

        }
    }
    //========================================================================================================

    public function view_info(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['admin'] = $this->admin_model->get_all();
        $this->data['student'] = $this->student_model->get_all();
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['departments'] = $this->department_model->get_all();
        $this->data['level'] = $this->level_model->get_all();
        $this->data['semester'] = $this->semester_model->get_all();
        $this->data['course_option'] = $this->courses_model->get_all();
        $this->data['past_question'] = $this->past_question_model->get_all();
        $this->data['information'] = $this->information_model->get_all();
        $this->load->view('admin/sub_data/view_info', $this->data);
    }


    public function modify_info(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['admin'] = $this->admin_model->get_all();
        $this->data['student'] = $this->student_model->get_all();
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['departments'] = $this->department_model->get_all();
        $this->data['level'] = $this->level_model->get_all();
        $this->data['semester'] = $this->semester_model->get_all();
        $this->data['course_option'] = $this->courses_model->get_all();
        $this->data['past_question'] = $this->past_question_model->get_all();
        $this->data['information'] = $this->information_model->get_all();
        $this->data['email_information']  = $this->information_model->get_by_email($this->session->admin->email);
        $this->load->view('admin/sub_data/post_info', $this->data);

    }
    public function post_info(){
     // var_dump($this->input->post); die;
        if($this->input->post()){

            $this->form_validation->set_rules('title','Title', 'required');
            $this->form_validation->set_rules('information','Information', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('admin/home/modify_info'));
            }
            else{
                $firstname = $this->session->admin->firstname;
                $lastname =  $this->session->admin->lastname;
                $email = $this->session->admin->email;

                $data = array(
                    'admin' => ('yes'),
                    'information' => $_POST['information'],
                    'title' => $_POST['title'],
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'email' => $email
                );

                $this->information_model->insert($data);
                $this->session->set_flashdata('success', 'Information successfully uploaded');
                redirect(base_url('admin/home/modify_info'));
            }

        }
    }

    public function delete_info(){
        if($this->input->post()){
            $this->form_validation->set_rules('info', 'Information', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('admin/home/modify_info'));
            }
            else{
               $this->information_model->delete($this->input->post('info'));
               $this->session->set_flashdata('success', 'information deleted!');
               redirect(base_url('admin/home/modify_info'));

            }
        }
    }


    //===============================================================================================================

    public function profile(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['admin'] = $this->admin_model->get_all();
        $this->data['student'] = $this->student_model->get_all();
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['departments'] = $this->department_model->get_all();
        $this->data['level'] = $this->level_model->get_all();
        $this->data['semester'] = $this->semester_model->get_all();
        $this->data['course_option'] = $this->courses_model->get_all();
        $this->data['past_question'] = $this->past_question_model->get_all();
        $this->data['information'] = $this->information_model->get_all();
        $this->data['email_information']  = $this->information_model->get_by_email($this->session->admin->email);
        $this->load->view('admin/sub_data/profile', $this->data);
    }

    public function edit_profile(){
        if($this->input->post()){
            $this->form_validation->set_rules('firstname','First Name', 'required');
            $this->form_validation->set_rules('lastname','Last Name', 'required');
            $this->form_validation->set_rules('email','Email', 'required');
            $this->form_validation->set_rules('phone','Mobile', 'required');
            $this->form_validation->set_rules('password','Password', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('admin/home/profile'));
            }
            else{
                $email = $this->admin_model->get_by_email($this->session->admin->email);
                // if($email){
                    if(password_verify($this->input->post('password'), $email->password)){
                        $data = array(
                            'firstname' => $_POST['firstname'],
                            'lastname' => $_POST['lastname'],
                            'email' => $_POST['email'],
                            'phone' => $_POST['phone'],
                        );

                        $this->admin_model->update($this->session->admin->id, $data);
                        $this->session->set_flashdata('success', 'Profile Updated, Re-login your account ');
                        redirect(base_url('admin/home/profile'));

                    }
                    else{
                        $this->session->set_flashdata('wrong', 'Incorrect Password!');
                        $this->session->unset_userdata('admin');
                        redirect(base_url('admin/login'));
                    }
                }
            //     else{
            //         $this->session->set_flashdata('email', 'An error occured!');
            //         redirect(base_url('admin/home/profile'));

            //     }
            // }
        }
    }

    public function delete_staff_account(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        $this->data['admin'] = $this->admin_model->get_all();
        $this->data['student'] = $this->student_model->get_all();
        $this->data['faculties'] = $this->faculty_model->get_all();
        $this->data['departments'] = $this->department_model->get_all();
        $this->data['level'] = $this->level_model->get_all();
        $this->data['semester'] = $this->semester_model->get_all();
        $this->data['course_option'] = $this->courses_model->get_all();
        $this->data['past_question'] = $this->past_question_model->get_all();
        $this->data['information'] = $this->information_model->get_all();
        $this->data['email_information']  = $this->information_model->get_by_email($this->session->admin->email);
        // $this->data['staff'] = $this->staff_model->get_staff('1', '1');

        if($this->input->post()){
            $this->form_validation->set_rules('email', 'Email', 'required');

            if($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('admin/home/delete_staff_account'));
            }
            else{
                $this->staff_model->delete_by_email($this->input->post('email'));
                $this->session->set_flashdata('success', 'Account deleted');
                redirect(base_url('admin/home/delete_staff_account'));
            }
        }
        $this->load->view('admin/sub_data/delete_account', $this->data);

    }
}