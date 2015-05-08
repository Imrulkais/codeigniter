<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AdminController extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->model('admin_model');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function SuperAdmin() {


        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[12]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header');
            $this->load->view('admin');
        } else {
            $udata['email'] = $this->input->post('email');
            $udata['password'] = $this->input->post('password');
            $data = $this->admin_model->get_admin_from_db();

            foreach ($data as $key => $value) {

                if ($udata['email'] == $value->email && $udata['password'] == $value->password) {
                    $this->session->set_userdata('email', $value->email);
                    //redirect('UserController/insertshow');
                }
                else{
                   redirect('UserController/admin');
                }
            }
        }
    }

}
