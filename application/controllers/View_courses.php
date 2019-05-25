<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class View_courses extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Course_model','course');



    }

    public function index()
    {
        $this->global['pageTitle'] = 'CodeInsect : Dashboard';
        $this->load->model('user_model');
        $this->isLoggedIn();
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );

        $this->loadViews("viewcourses", $this->global, NULL, NULL);
    }
    function get_Courses(){

        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->course->getAllCourses()));

    }
    function addCourse()
    {
        $this->global['pageTitle'] = 'LMS : Dashboard';
        $this->load->model('user_model');
        $this->isLoggedIn();
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );
        $data['id'] = $this->uri->segment(3);

        log_message('error',   json_encode($data['id'] ));
//            log_message('error',   json_encode($data['id'] ));

        $this->global['pageTitle'] = 'Assign Course';

        $this->loadViews("addcourse", $this->global, $data, NULL);
    }
    function set_assign()
    {
        header('Content-Type: application/x-json; charset=utf-8');

        $dataJson = $this->input->post('data');
        $data = json_decode($dataJson);
        log_message('error', 'check--1111....'.json_encode($data));

        $result = $this->course->setAssign($data);

        echo json_encode($result);
    }

}
?>