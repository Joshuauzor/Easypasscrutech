<?php 
defined ('BASEPATH') OR exit ('No direct access allowed');

class Courses_model extends CI_Model{
    public function construct(){
        parent::__construct();
    }
    private $table_name = 'courses';

    public function insert($data){
        return $this->db->insert($this->table_name, $data);
    }

    public function get_one($id){
        $this->db->where('no', $id);
        $this->db->join('faculty', 'courses.faculty_id = faculty.id');
        $this->db->join('department', 'courses.department_id = department.id');
        return $this->db->get($this->table_name)->row();
    }

    public function get_all(){
        $this->db->join('faculty', 'courses.faculty_id = faculty.id');
        $this->db->join('department', 'courses.department_id = department.id');
        return $this->db->get($this->table_name)->result();
    }

    public function get_by_course_code($course_code){
        $this->db->where('course_code', $course_code);
        $this->db->join('faculty', 'courses.faculty_id = faculty.id');
        $this->db->join('department', 'courses.department_id = department.id');
        return $this->db->get($this->table_name)->result();
    }

    public function get_courses_for_admin($faculty, $department){
        $this->db->where('faculty_id', $faculty);
        $this->db->where('department_id', $department);
        return $this->db->get($this->table_name)->result();
    }

    public function get_by_year($year){
        $this->db->where('year', $year);
        $this->db->join('faculty','courses.faculty_id = faculty_id.id');
        $this->db->join('department','courses.department.id = department.id');
        return $this->db->get($this->table_name)->result();
    }



    public function get_everything($semester, $level){
       $this->db->where('semester', $semester);
       $this->db->where('level', $level);
       return $this->db->get($this->table_name)->result();
    }
    
    

    public function update($id, $data){
    $this->db->where('no', $id);
    return $this->db->update($this->table_name, $data);
    }

    public function delete($no){
        $this->db->where('no', $no);
        return $this->db->delete($this->table_name);
     }

     public function delete_by_course_code($data){
        $this->db->where('course_code', $data);
        return $this->db->delete($this->table_name);
     }
     //testing model

     public function get_by_level($level){
         $this->db->where('level', $level);
        //  $this->db->join('faculty','courses.faculty_id = faculty_id.id');
        //  $this->db->join('department','courses.department.id = department.id');
         return $this->db->get($this->table_name)->result();
     }

     public function get_by_semester($semester){
        $this->db->where('semester', $semester);
        return $this->db->get($this->table_name)->result();
    }

    public function get_dept_sem_lev( $department, $level, $semester ){
        $this->db->where('department_id', $department);
        $this->db->where('level', $level);
        $this->db->where('semester', $semester);
        return $this->db->get($this->table_name)->result();
    }

}