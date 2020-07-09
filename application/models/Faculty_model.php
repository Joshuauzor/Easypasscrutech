<?php
defined ('BASEPATH') OR exit ('No direct access found');


 class faculty_model extends CI_MODEL{

      public function __construct()
      {
      parent::__construct();
      }

      private $table_name = 'faculty';

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

      // public function get_faculty($id){
      //    $this->db->where('id', $id);
      //    return $this->db->get($this->table_name)->row()->name;
      // }
   }