<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Notice_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */



    function setNotice($data) {
        $this->db->insert('tbl_notice', $data);

        if ($this->db->affected_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    function updateNotice($id,$data){
        $this->db->where('id', $id);
        $this->db->update('tbl_notice', $data);
        if ($this->db->affected_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
    function getAllNotice(){
        $this->db->select('tbl_notice.*,tbl_users.name,tbl_course.cname');
        $this->db->order_by('id');
        $this->db->join('tbl_users', 'tbl_users.userId = tbl_notice.lectureid', 'left');
        $this->db->join('tbl_course', 'tbl_course.cid = tbl_notice.courseid', 'left');
        $query = $this->db->get('tbl_notice');
        return $query->result_array();
    }
    function getANotice($id){
        $this->db->select('tbl_notice.*,tbl_users.name,tbl_course.cname');
        $this->db->order_by('id');
        $this->db->join('tbl_users', 'tbl_users.userId = tbl_notice.lectureid', 'left');
        $this->db->join('tbl_course', 'tbl_course.cid = tbl_notice.courseid', 'left');
        $this->db->where('id',$id);

        $query = $this->db->get('tbl_notice');
        return $query->row();
    }
    function getNoticeByCourses($id){
        $this->db->select('tbl_notice.*,tbl_users.name,tbl_course.cname,tbl_roles.role');
        $this->db->order_by('id');
        $this->db->join('tbl_users', 'tbl_users.userId = tbl_notice.lectureid', 'left');
        $this->db->join('tbl_course', 'tbl_course.cid = tbl_notice.courseid', 'left');
        $this->db->join('tbl_roles', 'tbl_roles.roleId = tbl_users.roleId', 'left');
        $this->db->where('courseid',$id);
        $query = $this->db->get('tbl_notice');
        return $query->result_array();
    }

    function deleteNotices($data) {
        $this->db->where('id', $data);
        $this->db->delete('tbl_notice');


        if ($this->db->affected_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

}

  