<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presse extends CI_Controller {
	public function index()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        $this->load->view('presse/ind_presse',$data);
        $this->load->view('common/footer');
	}
}
