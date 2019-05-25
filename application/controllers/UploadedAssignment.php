<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class UploadedAssignment extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Assignment_model','course');




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

        $this->loadViews("uploadedAssignment", $this->global, NULL, NULL);
    }


    function set_course()
    {
        header('Content-Type: application/x-json; charset=utf-8');

        $dataJson = $this->input->post('data');
        $data = json_decode($dataJson);
        log_message('error', 'check--1111....'.json_encode($data));

        $student = $data->course;
        $result = $this->course->setCourse($student);

        echo json_encode($result);
    }

}
?>