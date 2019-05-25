<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Comments_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */





    function getComments() {
//        $this->db->cache_on();
        $this->db->select('*');
//        $this->db->where('active', 1);
        $this->db->order_by('id');
        $this->db->join('tbl_course', 'tbl_course.cid = tbl_comments.courseid', 'left');

        $query = $this->db->get('tbl_comments');
        return $query->result_array();
    }
    function getCommentsByCourse($id) {
//        $this->db->cache_on();
        $this->db->select('tbl_comments.*,tbl_course.*,tbl_comments.studnetid as stname');
        $this->db->where('courseid', $id);
        $this->db->order_by('timestamp');
        $this->db->join('tbl_course', 'tbl_course.cid = tbl_comments.courseid', 'left');

        $query = $this->db->get('tbl_comments');
        return $query->result_array();
    }

    function setComments($data) {
        $this->db->insert('tbl_comments', $data);

        if ($this->db->affected_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    function deleteComment($data) {
        $this->db->where('id', $data);
        $this->db->delete('tbl_comments');


        if ($this->db->affected_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

}

  