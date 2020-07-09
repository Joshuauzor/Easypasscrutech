<?php defined('BASEPATH') OR exit ('No direct access found');

class semester_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    private $table_name = 'semester';

    public function get_all(){
        return $this->db->get($this->table_name)->result();
    }

    public function get_one($id){
        $this->db->where('semester', $id);
        return $this->db->get($this->table_name)->row();
    }
}