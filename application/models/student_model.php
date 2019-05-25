<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class student_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    
    

    function setStudent($data) {
        $this->db->insert('tbl_student', $data);

        if ($this->db->affected_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    function CkStudent($id) {
        $this->db->select('*');
        $this->db->where('id',$id);
        $query = $this->db->get('tbl_student');
        return $query->row();
    }

    function getAllStudents() {
//        $this->db->cache_on();
        $this->db->select('*');
//        $this->db->where('active', 1);
        $this->db->order_by('id');
        $query = $this->db->get('tbl_student');
        return $query->result_array();
    }
}

  