<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Notice extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Notice_model','notice');
        $this->load->model('Course_model','course');




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

        $this->loadViews("Notices", $this->global, NULL, NULL);
    }


    function set_notice()
    {
        header('Content-Type: application/x-json; charset=utf-8');

        $dataJson = $this->input->post('data');
        $data = json_decode($dataJson);

        $result = $this->notice->setNotice($data);

        echo json_encode($result);
    }

    function get_Courses(){

        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->course->getActiveCourses()));

    }

}
?>