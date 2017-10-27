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

    public function get_by_cat($cat)
    {
    	if($cat === 0)
    	{
    		$req = 'SELECT * FROM produits';
    	}
    	else
    	{
			$req= 'SELECT * FROM produits WHERE categorie = '."'".$cat."'";
    	}
    				
    	$query = $this->db->query($req);
    	$liste = $query->result_array();

    	return $liste;
    }

    public function add_prod($post)
    {
    	$data = array(
    		'ref' => $post['ref'],
    		'nom' => $post['nom'],
    		'coloris' =>$post['coloris'],
    		'dimension' =>$post['dimension'],
    		'dispo' => $post['dispo'],
    		'image' => $post['image'],
    		'categorie' => $post['categorie']);

    	$this->db->insert('produits',$data);

    }

    public function supp_prod($ref)
    {
    	$this->db->delete('produits',array('ref'=>$ref));
    }

    public function modif_prod($post)
    {
    	$data = array(
    		'id' => $post['id'],
    		'ref' => $post['ref'],
    		'nom' => $post['nom'],
    		'coloris' =>$post['coloris'],
    		'dimension' =>$post['dimension'],
    		'dispo' => $post['dispo'],
    		'image' => $post['image'],
    		'categorie' => $post['categorie']);

    	$this->db->where('id', $post['id']);
		$this->db->update('produits' , $data);

    }

    public function get_detail($ref)
    {
    	$req = 'SELECT * FROM produits WHERE ref = '."'".$ref."'";
    	$query = $this->db->query($req);
    	$liste = $query->result_array();

    	return $liste;
    }
}