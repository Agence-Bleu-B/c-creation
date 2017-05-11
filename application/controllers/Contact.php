<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation, contactez nous';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        $this->load->view('contact/ind_contact',$data);
        $this->load->view('common/footer');
	}
}
