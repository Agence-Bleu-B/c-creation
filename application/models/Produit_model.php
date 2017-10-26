<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Produit_model extends CI_Model
{
    //récupération de tous les produits
    public function get_all(){
    	$req = 'SELECT * FROM produits';
    	$query = $this->db->query($req);
    	$liste = $query->result_array();

    	return $liste;
    }

    public function get_by_cat('$cat')
    {
    	$req= 'SELECT * FROM produits WHERE'.'categorie ='.$cat;
    	$query = $this->db->query($req);
    	$liste = $query->result_array();

    	return $liste;
    }
}
