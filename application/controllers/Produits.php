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
		$datahead['title'] = 'c-creation, découvrez nos luminaires, lampes et ampoules';
		$datahead['description'] = 'C-creation, découvrez nos créations lumineuses: lampes, lampadaires,
		 suspensions, ampoules, cordons et pièces détachées. Apportez une luminosité nouvelle à votre décoration!';
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
		$datahead['title'] = 'c-creation lampes design';
		$datahead['description'] = 'Avec nos lampes design et qualitatives, apportez une luminosité nouvelle à votre décoration';
		$data = array();
		$this->load->library('pagination');
		$config['base_url']=site_url('produits/lampes'); 
		$config['total_rows'] = $this->Produit_model->max_ligne('lampe');
		
		$config['per_page'] = 9;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
		$config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
		$config['first_link']="début";
		$config['last_link']="fin";

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        if (!isset($_GET['per_page'])) {
        	$ppage = 0;
        }
        else{
        	$ppage = $_GET['per_page'];
        }
	
		$data['list_prod']=$this->Produit_model->get_by_cat($ppage,9,'lampe');
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();

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
		$datahead['title'] = 'c-creation, lampadaires de qualité';
		$datahead['description'] = 'Avec nos lampadaires design et qualitatifs, apportez une luminosité nouvelle à votre décoration';
		$data = array();
		$this->load->library('pagination');
		$config['base_url']=site_url('produits/lampadaires'); 
		$config['total_rows'] = $this->Produit_model->max_ligne('lampadaire');
		
		$config['per_page'] = 9;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
		$config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
		$config['first_link']="début";
		$config['last_link']="fin";

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        if (!isset($_GET['per_page'])) {
        	$ppage = 0;
        }
        else{
        	$ppage = $_GET['per_page'];
        }
	
		$data['list_prod']=$this->Produit_model->get_by_cat($ppage,9,'lampadaire');
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();

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
		$datahead['title'] = 'c-creation, des suspensions design';
		$datahead['description'] = "Nos suspensions d'exception apportent une luminosité nouvelle à votre décoration";
		$data = array();
		$this->load->library('pagination');
		$config['base_url']=site_url('produits/suspensions'); 
		$config['total_rows'] = $this->Produit_model->max_ligne('suspension');
		
		$config['per_page'] = 9;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
		$config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
		$config['first_link']="début";
		$config['last_link']="fin";

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        if (!isset($_GET['per_page'])) {
        	$ppage = 0;
        }
        else{
        	$ppage = $_GET['per_page'];
        }
	
		$data['list_prod']=$this->Produit_model->get_by_cat($ppage,9,'suspension');
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();

		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/suspensions',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}

	public function appliques()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation, des appliques de qualité';
		$datahead['description'] = "Nos appliques d'exception apportent une luminosité nouvelle à votre décoration";
		$data = array();
		$this->load->library('pagination');
		$config['base_url']=site_url('produits/appliques'); 
		$config['total_rows'] = $this->Produit_model->max_ligne('applique');
		
		$config['per_page'] = 9;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
		$config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
		$config['first_link']="début";
		$config['last_link']="fin";

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        if (!isset($_GET['per_page'])) {
        	$ppage = 0;
        }
        else{
        	$ppage = $_GET['per_page'];
        }
	
		$data['list_prod']=$this->Produit_model->get_by_cat($ppage,9,'applique');
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();
		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/appliques',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}

	public function plafonniers()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation, des plafonniers design';
		$datahead['description'] = "Nos plafonniers d'exception apportent une luminosité nouvelle à votre décoration";
		$data = array();
		$this->load->library('pagination');
		$config['base_url']=site_url('produits/appliques'); 
		$config['total_rows'] = $this->Produit_model->max_ligne('plafonnier');
		
		$config['per_page'] = 9;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
		$config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
		$config['first_link']="début";
		$config['last_link']="fin";

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        if (!isset($_GET['per_page'])) {
        	$ppage = 0;
        }
        else{
        	$ppage = $_GET['per_page'];
        }
	
		$data['list_prod']=$this->Produit_model->get_by_cat($ppage,9,'plafonnier');
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();
		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/plafonniers',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}

	public function ampoules()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation, des ampoules de qualité';
		$datahead['description'] = "Découvrez notre gamme d'ampoules de qualité à prix abordable";
		$data = array();
		$this->load->library('pagination');
		$config['base_url']=site_url('produits/ampoules'); 
		$config['total_rows'] = $this->Produit_model->max_ligne('ampoule');
		
		$config['per_page'] = 9;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
		$config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
		$config['first_link']="début";
		$config['last_link']="fin";

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        if (!isset($_GET['per_page'])) {
        	$ppage = 0;
        }
        else{
        	$ppage = $_GET['per_page'];
        }
	
		$data['list_prod']=$this->Produit_model->get_by_cat($ppage,9,'ampoule');
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();
		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/ampoules',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
	public function cordons()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation des cordons de qualité';
		$datahead['description'] = 'C-creation, des cordons qualitatifs et design, adaptés à votre décoration.';
		$data = array();
		$this->load->library('pagination');
		$config['base_url']=site_url('produits/cordons'); 
		$config['total_rows'] = $this->Produit_model->max_ligne('cordon');
		
		$config['per_page'] = 9;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
		$config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
		$config['first_link']="début";
		$config['last_link']="fin";

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        if (!isset($_GET['per_page'])) {
        	$ppage = 0;
        }
        else{
        	$ppage = $_GET['per_page'];
        }
	
		$data['list_prod']=$this->Produit_model->get_by_cat($ppage,9,'cordon');
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();

		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/cordons',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
	public function pieces()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation pièces détachées de qualité';
		$datahead['description'] = 'Retrouvez notre gamme complète de pièces détachées pour illuminer votre intérieur.';
		$data = array();
		$this->load->library('pagination');
		$config['base_url']=site_url('produits/pieces'); 
		$config['total_rows'] = $this->Produit_model->max_ligne('piece');
		
		$config['per_page'] = 9;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
		$config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
		$config['first_link']="début";
		$config['last_link']="fin";

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        if (!isset($_GET['per_page'])) {
        	$ppage = 0;
        }
        else{
        	$ppage = $_GET['per_page'];
        }
	
		$data['list_prod']=$this->Produit_model->get_by_cat($ppage,9,'piece');
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();
		
		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/pieces',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
	public function detail()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation/detail produit';
		$datahead['description'] = "C-creation, envie de voir votre intérieur sous un nouveau jour? Découvrez nos lampes,
		ampoules et luminaires design à des prix abordables.";
		$data = array();
		$data['detail'] = $this->Produit_model->get_detail($_GET['ref']);		
		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/detail',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
	public function lampesP()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation lampes design p';
		$datahead['description'] = 'Avec nos lampes design et qualitatives, apportez une luminosité nouvelle à votre décoration p';
		$data = array();
		$this->load->library('pagination');
		$config['base_url']=site_url('produits/lampesP'); 
		$config['total_rows'] = $this->Produit_model->max_ligne('lampe');
		
		$config['per_page'] = 18;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
		$config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
		$config['first_link']="début";
		$config['last_link']="fin";

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        if (!isset($_GET['per_page'])) {
        	$ppage = 0;
        }
        else{
        	$ppage = $_GET['per_page'];
        }
	
		$data['list_prod']=$this->Produit_model->get_by_cat($ppage,18,'lampe');
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();

		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/lampesP',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}


	public function appliquesP()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation lampes design p';
		$datahead['description'] = 'Avec nos lampes design et qualitatives, apportez une luminosité nouvelle à votre décoration p';
		$data = array();
		$this->load->library('pagination');
		$config['base_url']=site_url('produits/appliquesP'); 
		$config['total_rows'] = $this->Produit_model->max_ligne('applique');
		
		$config['per_page'] = 18;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
		$config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
		$config['first_link']="début";
		$config['last_link']="fin";

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        if (!isset($_GET['per_page'])) {
        	$ppage = 0;
        }
        else{
        	$ppage = $_GET['per_page'];
        }
	
		$data['list_prod']=$this->Produit_model->get_by_cat($ppage,18,'applique');
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();

		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/appliquesP',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}

	public function plafonniersP()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation lampes design p';
		$datahead['description'] = 'Avec nos lampes design et qualitatives, apportez une luminosité nouvelle à votre décoration p';
		$data = array();
		$this->load->library('pagination');
		$config['base_url']=site_url('produits/appliquesP'); 
		$config['total_rows'] = $this->Produit_model->max_ligne('plafonnier');
		
		$config['per_page'] = 18;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
		$config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
		$config['first_link']="début";
		$config['last_link']="fin";

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        if (!isset($_GET['per_page'])) {
        	$ppage = 0;
        }
        else{
        	$ppage = $_GET['per_page'];
        }
	
		$data['list_prod']=$this->Produit_model->get_by_cat($ppage,18,'plafonnier');
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();

		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/plafonniersP',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}



	public function lampadairesP()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation, lampadaires de qualité P';
		$datahead['description'] = 'Avec nos lampadaires design et qualitatifs, apportez une luminosité nouvelle à votre décoration p';
		$data = array();
		$this->load->library('pagination');
		$config['base_url']=site_url('produits/lampadairesP'); 
		$config['total_rows'] = $this->Produit_model->max_ligne('lampadaire');
		
		$config['per_page'] = 18;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
		$config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
		$config['first_link']="début";
		$config['last_link']="fin";

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        if (!isset($_GET['per_page'])) {
        	$ppage = 0;
        }
        else{
        	$ppage = $_GET['per_page'];
        }
	
		$data['list_prod']=$this->Produit_model->get_by_cat($ppage,18,'lampadaire');
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();

		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/lampadairesP',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
	public function suspensionsP()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation, des suspensions design small';
		$datahead['description'] = "Nos suspensions d'exception apportent une luminosité nouvelle à votre décoration p";
		$data = array();
		$this->load->library('pagination');
		$config['base_url']=site_url('produits/suspensionsP'); 
		$config['total_rows'] = $this->Produit_model->max_ligne('suspension');
		
		$config['per_page'] = 18;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
		$config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
		$config['first_link']="début";
		$config['last_link']="fin";

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        if (!isset($_GET['per_page'])) {
        	$ppage = 0;
        }
        else{
        	$ppage = $_GET['per_page'];
        }
	
		$data['list_prod']=$this->Produit_model->get_by_cat($ppage,18,'suspension');
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();

		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/suspensionsP',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
	public function ampoulesP()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation, des ampoules de qualité p';
		$datahead['description'] = "Découvrez notre gamme d'ampoules de qualité à prix abordable p";
		$data = array();
		$this->load->library('pagination');
		$config['base_url']=site_url('produits/ampoulesP'); 
		$config['total_rows'] = $this->Produit_model->max_ligne('ampoule');
		
		$config['per_page'] = 18;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
		$config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
		$config['first_link']="début";
		$config['last_link']="fin";

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        if (!isset($_GET['per_page'])) {
        	$ppage = 0;
        }
        else{
        	$ppage = $_GET['per_page'];
        }
	
		$data['list_prod']=$this->Produit_model->get_by_cat($ppage,18,'ampoule');
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();
		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/ampoulesP',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
	public function cordonsP()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation des cordons de qualité p';
		$datahead['description'] = 'C-creation, des cordons qualitatifs et design, adaptés à votre décoration. p';
		$data = array();
		$this->load->library('pagination');
		$config['base_url']=site_url('produits/cordonsP'); 
		$config['total_rows'] = $this->Produit_model->max_ligne('cordon');
		
		$config['per_page'] = 18;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
		$config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
		$config['first_link']="début";
		$config['last_link']="fin";

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        if (!isset($_GET['per_page'])) {
        	$ppage = 0;
        }
        else{
        	$ppage = $_GET['per_page'];
        }
	
		$data['list_prod']=$this->Produit_model->get_by_cat($ppage,18,'cordon');
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();

		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/cordonsP',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
	public function piecesP()
	{
		$datahead = array();
		$datahead['title'] = 'c-creation pièces détachées de qualité p';
		$datahead['description'] = 'Retrouvez notre gamme complète de pièces détachées pour illuminer votre intérieur. p';
		$data = array();
		$this->load->library('pagination');
		$config['base_url']=site_url('produits/piecesP'); 
		$config['total_rows'] = $this->Produit_model->max_ligne('piece');
		
		$config['per_page'] = 18;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
		$config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
		$config['first_link']="début";
		$config['last_link']="fin";

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        if (!isset($_GET['per_page'])) {
        	$ppage = 0;
        }
        else{
        	$ppage = $_GET['per_page'];
        }
	
		$data['list_prod']=$this->Produit_model->get_by_cat($ppage,18,'piece');
		$this->pagination->initialize($config);
		$data['pagination']=$this->pagination->create_links();
		
		$this->load->view('common/header',$datahead);
        if ($this->isco == true) {
			$this->load->view('produits/piecesP',$data);
		}
		else{$this->load->view('produits/connexion',$data);}
        $this->load->view('common/footer');
	}
}
