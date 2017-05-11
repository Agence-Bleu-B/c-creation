<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produits extends CI_Controller {
	public function lampes()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/les lampes';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        $this->load->view('produits/lampes',$data);
        $this->load->view('common/footer');
	}
	public function lampadaires()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/les lampadaires';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        $this->load->view('produits/lampadaires',$data);
        $this->load->view('common/footer');
	}
	public function suspensions()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/les suspensions';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        $this->load->view('produits/suspensions',$data);
        $this->load->view('common/footer');
	}
	public function plafonniers()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/les plafonniers';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        $this->load->view('produits/plafonniers',$data);
        $this->load->view('common/footer');
	}
	public function appliques()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/les appliques';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        $this->load->view('produits/appliques',$data);
        $this->load->view('common/footer');
	}
}
