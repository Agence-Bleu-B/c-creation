<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produits extends CI_Controller {

	private $isco;

	public function __construct()
    {
        parent::__construct();
        $this->load->model('connection_model');
        $this->load->model('Produit_model');

        //rajouter "if post"
        if (isset($_POST['conect'])) {
        	$mdp = $_POST['mdp'];
			$log = $_POST['login'];
			$this->connection_model->connection($log,$mdp);
        }

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
        	$data['list_prod']=$this->Produit_model->get_by_cat('lampe');
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
        	$data['list_prod']=$this->Produit_model->get_by_cat('lampadaire');
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
		$this->load->library('pagination');
		$config['total_rows'] = 200;
		$config['per_page'] = 20;

		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			
			$data['list_prod']=$this->Produit_model->get_by_cat('suspension');
			$this->pagination->initialize($config);
			$data['pagination']=$this->pagination->create_links();
			$this->load->view('produits/suspensions',$data);
		
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
	public function ampoules()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/les ampoules';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
        	$data['list_prod']=$this->Produit_model->get_by_cat('ampoule');
			$this->load->view('produits/ampoules',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
	public function cordons()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/cordons';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
        	$data['list_prod']=$this->Produit_model->get_by_cat('cordon');
			$this->load->view('produits/cordons',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
	public function pieces()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/pieces detachees';
		$datahead['description'] = 'c-creation';
		$data = array();
		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
        	$data['list_prod']=$this->Produit_model->get_by_cat('piece');
			$this->load->view('produits/pieces',$data);
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
