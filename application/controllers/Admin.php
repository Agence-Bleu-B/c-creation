<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	private $isco;
	private $data = array();//data head et footer sous certaines conditions
	private $data2 = array();//data corp

	public function __construct()
    {
        parent::__construct();
        //chargement models
		$this->load->model('admin_model');
		//si demande decco
		if (isset($_GET['deco'])) {
			$this->admin_model->deco();
		}
		//si post verif si ok et mise en session si ok
		if (isset($_POST['val'])) {
			$mdp = $_POST['password'];
			$log = $_POST['login'];
			$this->admin_model->connection($log,$mdp);
		}
		//verif si connecté
	    $this->isco = $this->admin_model->isconnect();
	    //recuperation de la page en cours
	    $explode = explode('/', $this->uri->ruri_string());
		$this->data['pagecours'] = $explode[1];
    }
	
	public function index()
	{
		//affichage page selon connection
		if ($this->isco) {
			$this->load->view('admin/header',$this->data);
			$this->load->view('admin/home',$this->data2);
		}
		else{
			$this->load->view('admin/header-reg',$this->data);
			$this->load->view('admin/register',$this->data2);
		}
       $this->load->view('admin/footer');
	}
	public function produits()
	{
		//verif si connecté
	    if (!$this->isco) {
	    	redirect('/admin', 'refresh');
	    }


		$this->load->view('admin/header',$this->data);
		$this->load->view('admin/produits',$this->data2);
       	$this->load->view('admin/footer');
	}
	public function clients()
	{
		//verif si connecté
	    if (!$this->isco) {
	    	redirect('/admin', 'refresh');
	    }
		//affichage page 
		$this->load->view('admin/header',$this->data);
		$this->load->view('admin/clients',$this->data2);
       	$this->load->view('admin/footer');
	}
	public function nouveautes()
	{
		//verif si connecté
	    if (!$this->isco) {
	    	redirect('/admin', 'refresh');
	    }
		//affichage page 
		$this->load->view('admin/header',$this->data);
		$this->load->view('admin/nouveautes',$this->data2);
       	$this->load->view('admin/footer');
	}
}
