<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UserController extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->model('user_model');
    }
    
    public function insertshow(){
        $this->load->view('header');
        $this->load->view('insert');
    }
    public function Insert() {
        $this->load->view('header');
        $udata['name'] = $this->input->post('name');
        $udata['mobile'] = $this->input->post('mobile');
        $udata['address'] = $this->input->post('address');
        $udata['password'] = $this->input->post('password');
        $this->user_model->insert_user_to_db($udata);
        $this->session->set_flashdata('item', array('message' => 'Record created successfully', 'class' => 'success'));
        redirect('UserController/insertshow');
    }

    public function ShowData() {
        $this->load->view('header');
        $data['alldata'] = $this->user_model->show_user_from_db();
        $this->load->view('Show', $data);
    }

    public function EditData($id) {
        $this->load->view('header');
        $data['alldata'] = $this->user_model->edit_user_from_db($id);
        $this->load->view('EditRecord', $data);
    }

    public function CompleteEdit() {

        $udata['id'] = $this->input->post('id');
        $udata['name'] = $this->input->post('name');
        $udata['mobile'] = $this->input->post('mobile');
        $udata['address'] = $this->input->post('address');
        $password = $udata['password'] = $this->input->post('password');
        $this->user_model->update_user_to_db($udata);

//        Showing all data
        $this->load->view('header');
        $data['alldata'] = $this->user_model->show_user_from_db();
        $this->load->view('Show', $data);
    }

    public function DeleteData($id) {

        $this->user_model->delete_user_from_db($id);
        $this->load->view('header');
        $data['alldata'] = $this->user_model->show_user_from_db();
        $this->load->view('Show', $data);
    }
    
    public function admin() {
        $this->load->view('header');
        $this->load->view('admin');
    }
    public function SuperAdmin(){
        
        
    }

}

?>
