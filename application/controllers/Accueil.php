<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {
	public function index()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/headeracc',$datahead);
        $this->load->view('accueil/home',$data);
        $this->load->view('common/footer');
	}
}