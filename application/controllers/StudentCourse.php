<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class StudentCourse extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Course_model','course');
        $this->load->model('Comments_model','comments');
        $this->load->model('Notice_model','notice');
        $this->load->model('Assignment_model','assignment');





    }

    public function index()
    {
        $this->global['pageTitle'] = 'LMS : Dashboard';
        $this->load->model('user_model');
        $this->isLoggedIn();
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );

        $this->loadViewsStudent("student/course", $this->global, NULL, NULL);
    }


    function set_course()
    {

    }
    function viewCourse()
    {
        $this->global['pageTitle'] = 'LMS : Dashboard';
        $this->load->model('user_model');
        $this->isLoggedIn();
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );
        $data['id'] = $this->uri->segment(2);

        log_message('error',   json_encode($data['id'] ));
//            log_message('error',   json_encode($data['id'] ));


        $this->loadViewsStudent("student/previewCourse", $this->global, $data, NULL);
    }

    function get_Course_details()
    {
        header('Content-Type: application/x-json; charset=utf-8');
        $id =$this->input->post('id');
        echo(json_encode($this->course->getCourseDetails($id)));

    }
    function get_comments()
    {
        header('Content-Type: application/x-json; charset=utf-8');
        $id =$this->input->post('id');
        echo(json_encode($this->comments->getCommentsByCourse($id)));

    }
    function get_notices()
    {
        header('Content-Type: application/x-json; charset=utf-8');
        $id =$this->input->post('id');
        echo(json_encode($this->notice->getNoticeByCourses($id)));

    }
    function get_assignment()
    {
        header('Content-Type: application/x-json; charset=utf-8');
        $id =$this->input->post('id');
        echo(json_encode($this->assignment->getAssignmentByCourses($id)));

    }
    function set_comments()
    {
        header('Content-Type: application/x-json; charset=utf-8');
        $data= $this->input->post('data');

        $result = $this->comments->setComments($data);

        echo json_encode($result);


    }
    function delete_comment()
    {
        header('Content-Type: application/x-json; charset=utf-8');
        $data= $this->input->post('data');

        $result = $this->comments->deleteComment($data);

        echo json_encode($result);

    }
}
?>