<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Student extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('student_model','student');




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

        $this->loadViews("Student", $this->global, NULL, NULL);
    }


    function set_student()
    {
        header('Content-Type: application/x-json; charset=utf-8');

        $dataJson = $this->input->post('data');
        $data = json_decode($dataJson);

        $student = $data->student;
        $result['student'] = $this->student->setStudent($student);
        $result['data'] = $student;
        $userInfo = array('email'=>$student->email, 'password'=>getHashedPassword($student->nic), 'roleId'=>4, 'name'=> $student->name,
            'mobile'=>$student->tel, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));

        $this->load->model('user_model');
        $result['login'] = $this->user_model->addNewUser($userInfo);

        echo json_encode($result);
    }

}
?>