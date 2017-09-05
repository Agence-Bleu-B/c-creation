<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produits extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('connection_model');

    }
	public function index()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/catalogue';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        $this->load->view('produits/catalogue',$data);
        $this->load->view('common/footer');
	}
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
	public function detail()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/detail produit';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        $this->load->view('produits/detail',$data);
        $this->load->view('common/footer');
	}

	public function connexion()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/connexion';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('common/header',$datahead);
        $this->load->view('produits/connexion',$data);
        $this->load->view('common/footer');
	}

}
