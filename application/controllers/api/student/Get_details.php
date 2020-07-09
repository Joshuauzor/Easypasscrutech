<?php defined('BASEPATH') OR exit ('No direct access allowed');

class Get_details extends CI_Controller{
      
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('faculty_model','department_model','student_model','level_model', 'semester_model'));
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation','session'));
    }

    public function get_faculty(){
        header('Content-Type: application/json');
        if($this->input->get()){
            $data = $this->faculty_model->get_all();

            echo json_encode(array('success' => 'Gotten', 'data' => $data));
        }
        else{
            echo json_encode(array('error' => 'invalid request'));
        }
    }

    public function get_department(){
        header('Content-Type: application/json');
        if($this->input->get()){
            $data = $this->department_model->get_all();

            echo json_encode(array('success' => 'Gotten', 'data' => $data));
        }
        else{
            echo json_encode(array('error' => 'invalid request'));
        }
    }

    public function get_one_faculty(){
        header('Content-Type: application/json');
        if($this->input->get()){
            $data = $this->faculty_model->get_one($this->input->get('id'));
            if($data){
                echo json_encode(array('success' => 'Gotten', 'data' => $data));
            }
            else{
                echo json_encode(array('error' => 'No faculty with this id'));
            }
        }
        else{
            echo json_encode(array('error' => 'invalid request'));
        }
    }

    public function get_one_department(){
        header('Content-Type: application/json');
        if($this->input->get()){
           
                $data = $this->department_model->get_dept_with_fac_id($this->input->get('faculty_id'));

                if($data){
                    echo json_encode(array('success' => 'Gotten', 'data' => $data));
                }
                else{
                    echo json_encode(array('error' => 'There is no department attributed to this faculty'));
                }
        }
        else{
            echo json_encode(array('error' => 'invalid request'));
        }
    }

    public function get_student_by_id(){
        header('Content-Type: application/json');

        if($this->input->get()){
          
                $data = $this->student_model->get_one($this->input->get('id'));

                if($data){
                    echo json_encode(array('success' => 'Gotten', 'data' => $data));
                }
                else{
                    echo json_encode(array('error' => 'Student is unregistered'));
                }
        }
        else{
            echo json_encode(array('error' => 'Invalid request'));
        }
    }

}