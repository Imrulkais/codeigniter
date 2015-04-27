<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends CI_Controller {
	public function working()
	{
		$this->load->view('header');
                $this->load->view('insert');
	}
}