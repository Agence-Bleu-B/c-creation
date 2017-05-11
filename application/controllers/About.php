<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation, à propos';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        $this->load->view('about/a_propos',$data);
        $this->load->view('common/footer');
	}
}
