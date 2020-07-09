<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('faculty_model','department_model','courses_model','past_question_model', 'student_model','level_model', 'semester_model'));
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation','session'));
       
    }

    public function get_courses(){
        $level = $this->input->post('level_id');
        $semester = $this->input->post('semester_id');

        $courses = $this->past_question_model->get_everything($semester, $level);
        if(count($courses)>0){

            $pro_select = '';
            $pro_select .= '<option value=""> Choose Course </option>';
            foreach($courses as $course){
                $pro_select .= '<option value="'.$course->course_code.'">'.$course->course_code.'</option>';
            }
            echo json_encode($pro_select);
        }
    }




    public function get_courses_for_admin(){
        $faculty = $this->input->post('faculty');
        $department = $this->input->post('department');

        $courses = $this->courses_model->get_courses_for_admin($faculty, $department);

        if(count($courses) > 0){
            
            $pro_choose = '';
            $pro_choose .=  '<option value=""> Select Course </option>';
            foreach($courses as $course){
                $pro_choose .= '<option value="'.$course->course_code.'">'.$course->course_code.'</option>';
            }
            echo json_encode($pro_choose);
        }else{
            $pro_choose = '';

                $pro_choose .= '<option value=""> Select Course </option>';
                        echo json_encode($pro_choose);
        }
    }



    public function get_department(){
        $faculty_id = $this->input->post('id');
        $departments = $this->department_model->get_everything($faculty_id);
        if(count($departments)>0){
 
            $pro_select_box = '';
            $pro_select_box .= '<option value=""> Select Department </option>';
            foreach ($departments  as $department ){
                $pro_select_box .= '<option value="'.$department->id.'">'.$department->name.'</option>';
            }
            echo json_encode($pro_select_box);
        }else{            
            $pro_select_box = '';

                        $pro_select_box .= '<option value=""> Select Department </option>';
                                   echo json_encode($pro_select_box);

        }
    }

    public function get_past_question_for_admin(){
        $faculty = $this->input->post('faculty');
        $department = $this->input->post('department');

        $courses = $this->past_question_model->get_courses_for_admin($faculty, $department);

        if(count($courses) > 0){
            $pro_choose = '';
            $pro_choose .=  '<option value=""> Select Course </option>';
            foreach($courses as $course){
                $pro_choose .= '<option value="'.$course->course_code.'">'.$course->course_code.'</option>';
            }
            echo json_encode($pro_choose);
        }else{
            $pro_choose = '';

                $pro_choose .= '<option value=""> Select Course </option>';
                        echo json_encode($pro_choose);
        }
    }

    public function get_staff(){
        $faculty = $this->input->post('faculty');
        $department = $this->input->post('department');

        $courses = $this->staff_model->get_staff($faculty, $department);

        if(count($courses) > 0){
            $pro_choose = '';
            $pro_choose .=  '<option value=""> Select Course </option>';
            foreach($courses as $course){
                $pro_choose .= '<option value="'.$course->course_code.'">'.$course->course_code.'</option>';
            }
            echo json_encode($pro_choose);
        }else{
            $pro_choose = '';

                $pro_choose .= '<option value=""> Select Course </option>';
                        echo json_encode($pro_choose);
        }
    }
   
    public function get_courses_staff(){
        $dept = $this->session->staff->department_id;
        $level = $this->input->post('level_id');
        $semester = $this->input->post('semester_id');

        $courses = $this->courses_model->get_dept_sem_lev($dept, $semester, $level);
        if(count($courses)>0){

            $pro_select = '';
            $pro_select .= '<option value=""> Choose Course </option>';
            foreach($courses as $course){
                $pro_select .= '<option value="'.$course->course_code.'">'.$course->course_code.'</option>';
            }
            echo json_encode($pro_select);
        }
    }

}