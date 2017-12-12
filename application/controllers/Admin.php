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
		//chargement models
		$this->load->model('produit_model');
		//actions
		if (isset($_POST['new'])) {
			$this->produit_model->add_prod($_POST);
		}
		if (isset($_POST['delete'])) {
			$this->produit_model->supp_prod($_POST['id']);
		}
		if (isset($_POST['modif'])) {
			$this->produit_model->modif_prod($_POST);
		}
		if (isset($_POST['changephoto'])) {
			$this->produit_model->modif_image($_POST,$_FILES);
		}
		//mise en variables
		$this->data2['listLampes']= $this->produit_model->get_cat('lampe');
		$this->data2['listLampadaires']= $this->produit_model->get_cat('lampadaire');
		$this->data2['listSuspensions']= $this->produit_model->get_cat('suspension');
		$this->data2['listAppliques']=$this->produit_model->get_cat('applique');
		$this->data2['listSuspensions']=$this->produit_model->get_cat('suspension');
		$this->data2['listAmpoules']= $this->produit_model->get_cat('ampoule');
		$this->data2['listCordons']= $this->produit_model->get_cat('cordon');
		$this->data2['listPiece']= $this->produit_model->get_cat('piece');

		$this->load->view('admin/header',$this->data);
		$this->load->view('admin/produits',$this->data2);
       	$this->load->view('admin/footer');
	}
	public function clients()
	{
		$this->load->model('clients_model');
		//verif si connecté
	    if (!$this->isco) {
	    	redirect('/admin', 'refresh');
	    }
	    //si demande de suppression
	    if (isset($_POST['sup'])) {
	    	$this->clients_model->delete_client($_POST);
	    }
	    //si demande de creation
	    if (isset($_POST['new'])) {
	    	$this->clients_model->new_client($_POST);
	    }
	    //si demande de modif
	    if (isset($_POST['modif'])) {
	    	$this->clients_model->modif_client($_POST);
	    }

	    //recuperation clients
	    $this->data2['clients_liste'] = $this->clients_model->get_clients();
		//affichage page
		$this->load->view('admin/header',$this->data);
		$this->load->view('admin/clients',$this->data2);
       	$this->load->view('admin/footer');
	}
	public function nouveautes()
	{
		$this->load->model('produit_model');
		//verif si connecté
	    if (!$this->isco) {
	    	redirect('/admin', 'refresh');
	    }
	    //actions
	    if (isset($_POST['modif'])) {
	    	$this->produit_model->modif_nouveaute($_POST);
	    }
		//affichage page
		$this->load->model('Produit_model');
		$this->data['list_nouv']=$this->Produit_model->get_nouveaute();
		$this->load->view('admin/header',$this->data);
		$this->load->view('admin/nouveautes',$this->data);
       	$this->load->view('admin/footer');
	}
	public function ajaxOrder(){
		$i=1;
		foreach ($_POST['list'] as $key => $value) {
				$data = array(
	    		'ord' => $i
	    		);

	    	$this->db->where('ref', $value);
			$this->db->update('produits' , $data);
			$i++;
		}
	}
}
