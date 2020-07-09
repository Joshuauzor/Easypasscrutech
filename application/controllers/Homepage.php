<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form','url'));

    }

    public function index(){
        $this->data['title'] = 'Easy Pass | Learning Made Easy ';
        // $this->data['faculties'] = $this->faculty_model->get_all();
        // $this->data['department'] = $this->department_model->get_all();
        // $this->data['level'] = $this->level_model->get_all();
        // $this->data['semester'] = $this->semester_model->get_all();
        // $this->data['pastquestion'] = $this->past_question_model->get_all();
        $this->load->view('homepage', $this->data);

    }
}
