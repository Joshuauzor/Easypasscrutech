<?php
defined ('BASEPATH') OR exit ('No access file allowed');


 class department_model extends CI_MODEL{

    
    public function __construct()
    {
    parent::__construct();
    }
   
    private $table_name = 'department';

    public function insert($data) {
      return $this->db->insert($this->table_name, $data);
    }

    public function get_one($id){
       $this->db->where('id', $id);
       return $this->db->get($this->table_name)->row();
    }

    public function get_name($id){
      $this->db->where('id', $id);
      return $this->db->get($this->table_name)->row()->name;
   }

    public function get_all(){
       return $this->db->get($this->table_name)->result();
    }

    public function update($id, $data){
       $this->db->where('id', $id);
       return $this->db->update($this->table_name, $data);
    }

    public function delete($id){
       $this->db->where('id', $id);
       return $this->db->delete($this->table_name);
    }

    public function get_everything( $faculty_id){
      $query = $this->db->get_where('department', array ('faculty_id' => $faculty_id));
      return $query->result(); 
   }

   public function get_us($faculty_id){
      $this->db->where('faculty_id', $faculty_id);
      return $this->db->get($this->table_name)->result();
   }

   public function get_dept_name($dept_id ){
      $this->db->where('id', $dept_id);
      return $this->db->get($this->table_name)->row()->name;
   }

   public function get_dept_with_fac_id($id){
      $this->db->where('faculty_id', $id);
      return $this->db->get($this->table_name)->result();
   }

}