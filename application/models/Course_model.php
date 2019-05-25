<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Course_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */



    function setCourse($data) {
        $this->db->insert('tbl_course', $data);

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
    function getCourseDetails($id) {
        $this->db->select('*');
        $this->db->where('cid',$id);
        $query = $this->db->get('tbl_course');
        return $query->row();
    }

    function getAllCourses() {
//        $this->db->cache_on();
        $this->db->select('*');
//        $this->db->where('active', 1);
        $this->db->order_by('cid');
        $query = $this->db->get('tbl_course');
        return $query->result_array();
    }
    function setAssign($data) {
        $this->db->insert('tbl_assign', $data);

        if ($this->db->affected_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    function getActiveCourses() {
//        $this->db->cache_on();
        $this->db->select('*');
        $this->db->where('status', 1);
        $this->db->order_by('cid');
        $query = $this->db->get('tbl_course');
        return $query->result_array();
    }
}

  