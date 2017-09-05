<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produits extends CI_Controller {

	private $isco;

	public function __construct()
    {
        parent::__construct();
        $this->load->model('connection_model');

        //rajouter "if post"

        $this->isco = $this->connection_model->isconnect();

    }
	public function index()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/catalogue';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
		if ($this->isco == true) {
			$this->load->view('produits/catalogue',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
	public function lampes()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/les lampes';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/lampes',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
	public function lampadaires()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/les lampadaires';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/lampadaires',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
	public function suspensions()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/les suspensions';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/suspensions',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
	public function plafonniers()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/les plafonniers';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/plafonniers',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
	public function appliques()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/les appliques';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/appliques',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
	public function detail()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/detail produit';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/detail',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}

}
