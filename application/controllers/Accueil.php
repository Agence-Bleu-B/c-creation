<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {
	public function index()
	{
		$datahead = array();
		$datahead['title'] = "c-creation, créateur de luminaires, lampes et ampoules d'exception";
		$datahead['description'] = 'Découvrez notre large choix de lampes, lampadaires, suspensions et ampoules design pour illuminer votre intérieur.';
		$data = array();
		$this->load->model('Produit_model');
		$data['list_nouv']=$this->Produit_model->get_nouveaute();

		$this->load->view('common/headeracc',$datahead);
        $this->load->view('accueil/home',$data);
        $this->load->view('common/footer');
	}
}
