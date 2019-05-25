<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Assignment_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */



    function setAssignment($data) {
        $this->db->insert('tbl_assignment', $data);

        if ($this->db->affected_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    function getAssignment() {
        $this->db->select('tbl_assignment.*,tbl_users.name,tbl_course.cname');
        $this->db->order_by('id');
        $this->db->join('tbl_users', 'tbl_users.userId = tbl_assignment.postlecture', 'left');
        $this->db->join('tbl_course', 'tbl_course.cid = tbl_assignment.courseid', 'left');

        $query = $this->db->get('tbl_assignment');
        return $query->result_array();
    }
    function getAssignmentByCourses($id) {
        $this->db->select('tbl_assignment.*,tbl_users.name,tbl_course.cname');
        $this->db->order_by('id');
        $this->db->join('tbl_users', 'tbl_users.userId = tbl_assignment.postlecture', 'left');
        $this->db->join('tbl_course', 'tbl_course.cid = tbl_assignment.courseid', 'left');
        $this->db->where('courseid',$id);
        $query = $this->db->get('tbl_assignment');
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

    function deleteAssignment($data) {
        $this->db->where('id', $data);
        $this->db->delete('tbl_assignment');


        if ($this->db->affected_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
}

  