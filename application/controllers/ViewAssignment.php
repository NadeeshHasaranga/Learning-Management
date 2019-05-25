<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class ViewAssignment extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Assignment_model','assignment');
        $this->load->model('course_model','course');




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

        $this->loadViews("viewassignment", $this->global, NULL, NULL);
    }



    function get_assignment(){

        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->assignment->getAssignment()));

    }

    function delete_assignment(){

        header('Content-Type: application/x-json; charset=utf-8');
        $data= $this->input->post('data');

        $result = $this->assignment->deleteAssignment($data);

        echo json_encode($result);

    }
}
?>