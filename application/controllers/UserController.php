<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UserController extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->model('user_model');
        $this->load->library('pagination');
    }

    public function insertshow() {
        //$this->load->view('header');
        //$this->load->view('insert');
        $data['content'] = $this->load->view('insert', '', TRUE);
        $this->load->view('master', $data);
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
        //$this->load->view('header');
//        pagination

        $config = array();
        $config["base_url"] = base_url() . "UserController/ShowData";
        $total_row = $this->user_model->record_count();
        $config["total_rows"] = $total_row;
        $config["per_page"] = 3;
        //$config['use_page_numbers'] = TRUE;
        $config['num_links'] = $total_row;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $config['uri_segment'] = 3;



        $this->pagination->initialize($config);

        $offset = $this->uri->segment(3);
        //$offset = 0;

        $data['results'] = $this->user_model->show_user_from_db($offset);
        echo $this->db->last_query();
        $data['content'] = $this->load->view('Show', $data, TRUE);
        //print_r($data);
        $this->load->view('master', $data);

//        end
        // $data['alldata'] = $this->user_model->show_user_from_db();
        // $this->load->view('Show', $data);
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
        $this->ShowData();
        //redirect(UserController/insertshow);
//        Showing all data
        // $this->load->view('header');
        // $data['alldata'] = $this->user_model->show_user_from_db();
        //$this->load->view('Show', $data);
    }

    public function DeleteData() {

        $id = $this->uri->segment(3);
        $this->user_model->delete_user_from_db($id);
        redirect('UserController/ShowData');
    }

    public function admin() {
        // $this->load->view('header');
        //$this->load->view('admin');
        $data['content'] = $this->load->view('admin', '', TRUE);
        $this->load->view('master', $data);
    }

    public function logout() {
        $this->session->set_flashdata('item', array('message' => 'You have successfully logged out', 'class' => 'success'));
        $this->session->unset_userdata('email');
        redirect('UserController/insertshow');
    }

    public function Upload() {

        $data['content'] = $this->load->view('upload', '', TRUE);
        $this->load->view('master', $data);
//        if(isset($_POST)) {
//            $udata['name'] = $this->input->post('name');
//        }
    }

    public function FinalUpload() {
        // $this->load->library('upload');

        $this->load->helper(array('form', 'url'));
        $this->load->helper('form');
        
        $config['upload_path'] = 'files/';
        $config['allowed_types'] = 'gif|jpg|png|doc|txt';
        //$config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;


        $this->load->library('upload', $config);
        //$this->upload->initialize($config);



        if (!$this->upload->do_upload()) {
            //redirect('UserController/insertshow');
            //$this->load->view('upload_form', $error);
            echo "now";
        } else {
            //$data = $this->upload->data();
//        print_r($data);
//        die();
            // $error = array('error' => $this->upload->display_errors());
            //$this->Upload();

            echo "then";
        }
    }

}

?>