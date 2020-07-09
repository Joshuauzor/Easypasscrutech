<?php defined('BASEPATH') OR exit ('No access file allowed');

class level_model extends CI_Model{
 
    public function __construct()
    {
       parent::__construct();
    }
    
    private $table_name = 'level';

    public function get_all(){
        return $this->db->get($this->table_name)->result();
    }

    public function get_one($id){
        $this->db->where('level', $id);
        return $this->db->get($this->table_name)->row();
    }

}