<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		$datahead = array();
		$datahead['title'] = "c-creation luminaires d'exception";
		$datahead['description'] = "C création vous propose des luminaires design et de qualité. Illuminez votre décoration 
		grâce à des lampes d'exception à des prix abordables.";
		$data = array();
		$this->load->view('common/header',$datahead);
        $this->load->view('about/a_propos',$data);
        $this->load->view('common/footer');
	}
}
