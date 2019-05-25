<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class View_Notice extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Notice_model','notice');




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

        $this->loadViews("viewNotices", $this->global, NULL, NULL);
    }


    function get_notice()
    {
        header('Content-Type: application/x-json; charset=utf-8');
        echo(json_encode($this->notice->getAllNotice()));
    }
    function get_a_notice()
    {
        header('Content-Type: application/x-json; charset=utf-8');
        $id= $this->input->post('id');
        echo(json_encode($this->notice->getANotice($id)));
    }

    function delete_notices()
    {
        header('Content-Type: application/x-json; charset=utf-8');
        $data= $this->input->post('data');

        $result = $this->notice->deleteNotices($data);

        echo json_encode($result);
    }
    function set_notice()
    {
        header('Content-Type: application/x-json; charset=utf-8');
        $id= $this->input->post('id');
        $data= $this->input->post('data');
        log_message('error',json_encode($id));
        log_message('error',json_encode($data));
        $result = $this->notice->updateNotice($id,json_decode($data));

        echo json_encode($result);
    }

}
?>