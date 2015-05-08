<?php

class myhooks {

    private $CI;
    public $session;
    public function __construct() {

        $this->CI = &get_instance();
    }

    public function hooks() {

        $class = $this->CI->router->class;
        $method = $this->CI->router->method;

        if ($method=='SuperAdmin') {
            if (null!=$this->CI->session->userdata('email')) {
                redirect('UserController/ShowData');
            } else {
                //redirect('UserController/admin');
            }
        }
    }

}
